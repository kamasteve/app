<?php
/**
* Database model for user management
*
* Used in User controller
*/
class User_model extends CI_Model
{
	/**
	* Check user data in database
	*
	* @param array $user_data Array containing identifying record from database.
	* @return mixed Array containing user data on success, otherwise false.
	*/
    function check_credentials($user_data)
    {   
        $user_data['active'] = 1;

        if (isset($user_data['password']) == true) {
            $user_data['password'] = $this->secure_password(
                $user_data['password'],
                $user_data['username']);
        }
        $query = $this->db->get_where('users', $user_data);
        
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }

        return false;
    }

    /**
    * Write new account to databse
    *
    * @param array @user_data Array containing 'username', 'email' and 'password'
    * @return mixed Activation code on success, otherwise false
    */
    function create($user_data)
    {
    	$this->load->helper('string');
        // populate default user data
    	$user_data['active'] = 0;
    	$user_data['code'] = random_string('alnum', 10);
        $user_data['language'] = $this->config->item('language');
        $user_data['password'] = $this->secure_password(
            $user_data['password'],
            $user_data['username']);

        // grab id of first rate from database
        $this->db->order_by('rate_id', 'asc');
        $rates = $this->db->get('rates');
        $rates = $rates->row_array();
        $user_data['rate_id_fk'] = $rates['rate_id'];

        // insert record
    	$this->db->insert('users', $user_data);

 		if ($this->db->affected_rows() == 1) {
            return $user_data['code'];
        }

        return false;
    }

    /**
    * Activate user
    *
    * @param array @user_data Arry containing 'username' and 'code'
    * @return bool True on success, false otherwise
    */
	function activate($user_data)
	{
		$this->db->where($user_data);
		$this->db->update('users', array('active' => 1));

		if ($this->db->affected_rows() == 1) {
			return true;
		}

		return false;
	}

    /**
    * Password generation and update in database
    *
    * @param array $user_data Array with 'email' field.
    * @return mixed Password string on success, otherwise false.
    */
    function reset_pwd($user_data)
    {
        $this->load->helper('string');
        $pwd = random_string('alnum', 10);

        // fetch username from db
        $user_selected = $this->check_credentials($user_data);

        $info = array(
            'password' => $this->secure_password($pwd, $user_selected['username'])
        );

        $this->db->where($user_data);
        $this->db->update('users', $info);

        if ($this->db->affected_rows() == 1) {
            return $pwd;
        }

        return false;
    }

    /**
    * Retreive available rates from databse
    *
    * @return array Key-value(rate_id => rate_name)
    */
    function get_rate_list()
    {
        $this->db->select('rate_id, name');
        $query = $this->db->get('rates');

        return $query->result_array();
    }

    /**
    * Update profile with new info
    *
    * @param int $user_id User id
    * @param array $user_data Info to be updated
    * @return mixed User info on success, otherwise false
    */
    function update_profile($user_id, $user_data)
    {
        if (isset($user_data['password']) == true) {
            $user_data['password'] = $this->secure_password(
                $user_data['password'],
                $user_data['username']);
        }

        $user_id = array('user_id' => $user_id);

        $this->db->where($user_id);
        $this->db->update('users', $user_data);

        if ($this->db->affected_rows() == 1) {
            return $this->check_credentials($user_id);
        }

        return false;
    }

    /**
    * Delete user account and user data
    *
    * @param array $user_data Array containing hashed password, id and code
    * @return bool True on success, otherwise false
    */
    function delete_account($user_data)
    {
        $id = $user_data['user_id'];

        // verify user credentials
        if ($this->check_credentials($user_data) == false) {
            return false;
        }

        // delete user data
        $this->db->where('user_id_fk', $id);
        $this->db->delete('shifts');

        // delete account info
        $this->db->where('user_id', $id);
        $this->db->delete('users');

        if ($this->db->affected_rows() == 1) {
            return true;
        }

        return false;
    }

    /**
    * Salt password
    *
    * @param string $pwd Users password
    * @param string $acc Users email
    * @return string Secured password
    */
    function secure_password($pwd, $acc)
    {
        $pwd = sha1($pwd) . $acc;

        return sha1($pwd);
    }
}
