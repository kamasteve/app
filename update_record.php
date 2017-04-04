<?php
  // establish connection to database and select DB
  $link = mysqli_connect("localhost", "root", "", "hill_rental");

  // get record
  $id_ = $_REQUEST['id_'];
  $external_id = $_REQUEST['external_id'];
  $name = $_REQUEST['name'];
  $amount = $_REQUEST['amount'];
  $product_code = $_REQUEST['product_code'];
  $custcode = $_REQUEST['custcode'];
  $payer_code = $_REQUEST['payer_code'];
  $line_number = $_REQUEST['line_number'];

  // prepare query
  $query = "UPDATE payments_details
            SET id='$id_',
                external_id='$external_id',
                name='$name',
                amount='$amount',
                product_code='$product_code',
                custcode='$custcode',
                payercode='$payer_code',
                linenumber='$line_number'
            WHERE id='$id_'";

  // execute query
  $result = mysqli_query($link,$query) or die('Server error = '.mysqli_error($link));

  // check if successful
  if($result){
    // return successful
    echo 1;
  }else{
    // return failed
    echo 0;
  }

  // close DB
  mysqli_close($link);
?>
