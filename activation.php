<?php
include ('database_connection.php');
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=mysqli_real_escape_string($dbc,$_GET['code']);
$c=mysqli_query($dbc,"SELECT uid FROM register WHERE activation='$code'");

if(mysqli_num_rows($c) > 0)
{
$count=mysqli_query($dbc,"SELECT uid FROM register WHERE activation='$code' and status='0'");

if(mysqli_num_rows($count) == 1)
{
mysqli_query($dbc,"UPDATE register SET status='1' WHERE activation='$code'");
$msg="Your account is activated";
}
else
{
$msg ="Your account is already active, no need to activate again";
}

}
else
{
$msg ="Wrong activation code.";
}

}
?>
//HTML Part
<?php echo $msg; ?>