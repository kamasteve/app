<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "hill_rental");
$invoice= $_REQUEST['invoice'];
$house_number=$_REQUEST['unit'];
$columns = array('invoice','subtotal','product');

$query = "SELECT * FROM invoice_items WHERE invoice= '".$_REQUEST['invoice']."' order by invoice desc"; //$result = mysqli_query($con,"SELECT * FROM invoice_items WHERE invoice='$invoice' order by invoice desc");

if(isset($_POST["invoice"]["value"]))
{
 $query .= '
 WHERE invoice LIKE "%'.$_POST["invoice"]["value"].'%" 
 OR subtotal LIKE "%'.$_POST["invoice"]["value"].'%" 
 ';
}

if(isset($_POST["invoice"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['invoice']['0']['column']].' '.$_POST['invoice']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY invoice DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['house_number'] . ', ' . $_POST['house_number'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

$result = mysqli_query($connect,"SELECT * FROM invoice_items WHERE invoice= '".$_REQUEST['invoice']."' order by invoice desc");
while($row = mysqli_fetch_array($result))
{

 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="invoice">' . $row["invoice"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="product">' . $row["product"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="subtotal">' . $row["subtotal"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
 

}

function get_all_data($connect)
{
 $query = "SELECT * FROM invoice_items WHERE invoice= '".$_REQUEST['invoice']."' order by invoice desc";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 //"recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>