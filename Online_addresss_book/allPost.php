<?php 
  
session_start();
include "connection.php";
 if(isset($_POST['update']))
{
 $id=$_POST['id'];
 $FullName=$_POST['fullname'];
$NickName=$_POST['nickname'];
$Email=$_POST['email'];
$Address=$_POST['address'];
$PhoneNo=$_POST['phone'];
$Website=$_POST['website'];

$sql="UPDATE addressTest SET FullName='$FullName',NickName='$NickName',Email='$Email',Address='$Address',PhoneNo='$PhoneNo',Website='$Website' WHERE id='$id'"; //NOT TO FIND ID ERROR IN $id


$edit=mysqli_query($con,$sql);
if($edit)
{
	echo "Ok";
	header('location:home.php');
}
}
?>