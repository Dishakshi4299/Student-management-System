<?php 
session_start();
if(isset($_POST["submit"]))
{

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'admin_operations');

$studentname= $_POST['sname'];
$roll=$_POST['roll'];
$phone=$_POST['phn'];
$branch=$_POST['branch'];
$Year=$_POST['year'];
$City=$_POST['city'];
$PName=$_POST['pname'];
$Address=$_POST['address'];
$q= "select * from add_student where name = '$studentname' && roll= '$roll' && phn='$phone' && branch='$branch' && year='$Year'&& city='$City' && pname='$PName' && address='$Address' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1 )
{
echo '<span class="danger">Already exist!!</span>';
	
}
else
{
$qy="insert into add_student (name, roll, phn, branch, year, city, pname, address) values('$studentname', '$roll', '$phone', '$branch','$Year', '$City', '$PName', '$Address' )";
$execute = mysqli_query($con, $qy);
if($execute)
{
echo '<span class="success" >Record has been added successfully!!</span>';
}

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style2.css">
<style>
.success
{
font-weight: bold;
color: green;
font-size: 25px;

}
.danger
{
font-weight: bold;
color: red;
font-size: 25px;	
}
</style>
</head>
<body>
	<div class="center-div">
		<div class="text-center">
			 <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo " style="margin-right:50px;" >Admin Dashboard </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars fa-2x"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="about.php">About</a></li>
        <li><a href="badges.html">Change Password</a></li>
       <li><a class="waves-effect waves-light btn" href="logout.php">Log Out</a></li>
       <li><a class="waves-effect waves-light btn" href="admin_dashboard.php">Back</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="about.php">About</a></li>
    <li><a href="badges.html">Change Password</a></li>
    <li><a class="waves-effect waves-light btn" href="logout.php">  Log Out </a></li>

    
  </ul>
	<div class="container">
		<h2 class="text-center" style=" font-size:25px; font-weight:bold;">FILL STUDENT DETAILS</h2>
	</div>
	<div class="container">
		<form action="enroll.php" method="POST" >
  <div class="form-group">
    
    <input type="text" class="form-control"  name="sname" value="" placeholder="Enter Student Name" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
  </div>

  <div class="form-group">
    
    <input type="text" class="form-control" name="roll" value="" style="font-size:20px; font-weight:bold;" autocomplete="off" required  placeholder="Enter Student Roll No.">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="phn" value=""  placeholder="Enter Student Phone Number" autocomplete="off" required style="font-size:20px; font-weight:bold;" >
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="branch" value="" style="font-size:20px; font-weight:bold;" autocomplete="off" required placeholder="Enter Student's Branch" >
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="year" value="" placeholder="Enter Year" autocomplete="off" required style="font-size:20px; font-weight:bold;">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="city" value="" placeholder="Enter City"  autocomplete="off" required style="font-size:20px; font-weight:bold;">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="pname" value="" placeholder="Enter Parent's Name" autocomplete="off" required style="font-size:20px; font-weight:bold;">
  </div>
  <div class="form-group">
  
  <input type="text" class="form-control" rows="2" name="address" value ="" placeholder="Enter Student's Address" autocomplete="off" required style="font-size:20px; font-weight:bold;">
</div>
<br>
  <button type="submit" name="submit" class="btn btn-primary " style="margin-left:270px; font-size:25px; font-weight:bold;">Submit</button>
  <button type="reset" name="reset" class="btn btn-primary " style="margin-left:380px; font-size:25px; font-weight:bold;">Reset</button>
</div>
</form>

	</div>
	
</body>
</html>