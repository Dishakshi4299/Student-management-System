<?php 
$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'admin_operations');
$Delete_Record_Id=$_GET['Delete'];
$Delete_query=" delete from add_student where id='$Delete_Record_Id' ";
$execute=mysqli_query($con, $Delete_query);
if($execute)
{
	echo '<script>window.open("delete.php?Deleted= Record Deleted Successfully","_self")</script>';

}




?>