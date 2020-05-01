<?php
$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'admin_operations');
$Update_Record=$_GET['Update'];
$show="SELECT * FROM add_student WHERE id='$Update_Record'";
$Update=mysqli_query($con, $show);

while($DataRows=mysqli_fetch_array($Update))
{
  $Update_Id= $DataRows['id'];
  $Name=$DataRows['name'];
  $Roll=$DataRows['roll'];
  $Phone=$DataRows['phn'];
  $Branch=$DataRows['branch'];
  $Year=$DataRows['year'];
  $City=$DataRows['city'];
  $Parent=$DataRows['pname'];
  $Address=$DataRows['address'];
 

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
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
        <li><a href="sass.html">About</a></li>
        <li><a href="badges.html">Change Password</a></li>
       <li><a class="waves-effect waves-light btn" href="logout.php">Log Out</a></li>
       <li><a class="waves-effect waves-light btn" href="display.php">Back</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">About</a></li>
    <li><a href="badges.html">Change Password</a></li>
    <li><a class="waves-effect waves-light btn" href="logout.php">  Log Out </a></li>

    
  </ul>
	<div class="container">
		<h2 class="text-center" style=" font-size:25px; font-weight:bold;">UPDATE STUDENT DETAILS</h2>
	</div>
	<div class="container">
		<form action="update.php?Update_Id=<?php echo $Update_Id; ?>" method="POST" >
  <div class="form-group">
    
    <input type="text" class="form-control"  name="sname" value="<?php echo $Name; ?>" placeholder="Enter Student Name" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
  </div>

  <div class="form-group">
    
    <input type="text" class="form-control" name="roll" value="<?php echo $Roll; ?>"  placeholder="Enter Student Roll No." autocomplete="off" required  style="font-size:20px; font-weight:bold;" >
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="phn" value="<?php echo $Phone; ?>"  placeholder="Enter Student Phone Number" autocomplete="off" required style="font-size:20px; font-weight:bold;" >
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="branch" value="<?php echo $Branch; ?>" style="font-size:20px; font-weight:bold;" autocomplete="off" required placeholder="Enter Student's Branch" >
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="year" value="<?php echo $Year; ?>" placeholder="Enter Year" autocomplete="off" required style="font-size:20px; font-weight:bold;">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" name="city" value="<?php echo $City; ?>" placeholder="Enter City"  autocomplete="off" required style="font-size:20px; font-weight:bold;">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="pname" value="<?php echo $Parent; ?>" placeholder="Enter Parent's Name" autocomplete="off" required style="font-size:20px; font-weight:bold;">
  </div>
  <div class="form-group">
  
  <input type="text" class="form-control" rows="2" name="address" value ="<?php echo $Address; ?>" placeholder="Enter Student's Address" autocomplete="off" required style="font-size:20px; font-weight:bold;">
</div>
<br>
  <button type="submit" name="update" class="btn btn-primary " style="margin-left:270px; font-size:25px; font-weight:bold;">Update</button>
  <button type="reset" name="reset" class="btn btn-primary " style="margin-left:380px; font-size:25px; font-weight:bold;">Reset</button>
</div>
</form>

	</div>
	
</body>
</html>
<?php 

$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'admin_operations');
if(isset($_POST["update"]))
{ $Update_Id= $_GET['Update_Id'];
  $Name= $_POST['sname'];
  $Roll= $_POST['roll'];
  $Phone= $_POST['phn'];
  $Branch=$_POST['branch'];
  $Year=$_POST['year'];
  $City=$_POST['city'];
  $Parent=$_POST['pname'];
  $Address=$_POST['address'];
  $UpdateQuery="UPDATE add_student SET name='$Name', roll='$Roll', phn='$Phone', branch='$Branch',year='$Year', city='$City', pname='$Parent', address='$Address' WHERE id='$Update_Id' ";
  $execute = mysqli_query($con,$UpdateQuery);
  if($execute)
{
  echo '<script>window.open("display.php?Updated= Record Updated Successfully","_self")</script>';
}

}



?>