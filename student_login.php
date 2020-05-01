<?php 
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'student');
if(isset($_POST["submit"]))
{
$username= $_POST['uname'];
$password=$_POST['upwd'];

$q= "select * from signin where user = '$username' && pass= '$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['user']=$username;
	header('location:student_dashboard.php');

}
else
{
	header('location:homepage.php');
}

}
?>