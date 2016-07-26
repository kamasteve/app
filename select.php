<select class="form-control" >
                            <?php
$con = mysql_connect("localhost","root","");
 $db = mysql_select_db("landlord",$con);
 $get=mysql_query("SELECT name FROM properties ORDER BY id ASC");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['id'].'">'.$row['id'].'</option>';
}
?>
                            
                        </select>