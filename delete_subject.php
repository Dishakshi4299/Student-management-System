<?php 
$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'admin_operations');
$Delete_Subject_Id=$_GET['Delete'];
$Delete_query=" DELETE  FROM add_subject WHERE id='$Delete_Subject_Id' ";
$execute=mysqli_query($con, $Delete_query);
if($execute)
{
	echo '<script>window.open("add_subjects.php?Deleted= Record Deleted Successfully","_self")</script>';

}




?>