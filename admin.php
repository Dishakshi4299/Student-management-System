<?php 
session_start();

$con= mysqli_connect('localhost', 'root');

$select= mysqli_select_db($con,'admin');

if(isset($_POST["submit"]))
{
	$user= $_POST['user'];
	$pass=$_POST['pwd'];

	$q= "select * from admin_table where username = '$user' && password = '$pass'";
	$query= mysqli_query($con,$q);
	$row= mysqli_num_rows($query);

	
		if($row == 1)
		{
			echo "login successful";
			$_SESSION['user']=$user;
			header('location:admin_dashboard.php');

		}
		
		else
		{
         
         header('location:homepage.php');
	
		}
	

}


?>