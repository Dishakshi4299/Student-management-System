<?php  
session_start();
if(!isset($_SESSION['user']))
{
	header('location:homepage.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
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
	
</head>
<body>
	<div class="center-div">
		<div class="text-center">
			 <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo " style="margin-right:50px;" >Student Dashboard </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars fa-2x"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">About</a></li>
        <li><a href="badges.html">Change Password</a></li>
       <li><a class="waves-effect waves-light btn" href="logout1.php">Log Out</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">About</a></li>
    <li><a href="badges.html">Change Password</a></li>
    <li><a class="waves-effect waves-light btn" href="logout1.php">  Log Out </a></li>

    
  </ul>
  <br>
	<div class="container">
		<h3>Welcome to the dashboard <?php echo $_SESSION['user'];   ?>&nbsp;!!</h3>
		
	</div>
	<div class="container">
		<form action="student_dashboard.php" method="POST" >
  <div class="form-group">
    
    <input type="text" class="form-control"  name="roll" value="" placeholder="Enter Your Roll No." autocomplete="off"  required style="font-size:20px; font-weight:bold;">
  </div>
  <button type="submit" name="submit" class="waves-effect waves-light btn"  style="margin-left:270px; font-size:25px; font-weight:bold;">Show Info</button>
  <button type="reset" name="reset" class="waves-effect waves-light btn"  style="margin-left:380px; font-size:25px; font-weight:bold;">Reset</button>

	</div>
</body>
</html>
<?php 
$con= mysqli_connect('localhost', 'root');

$select= mysqli_select_db($con,'admin_operations');


if(isset($_POST["submit"]))
{
	
	$roll= $_POST["roll"];

	$q="select * from add_student where roll ='$roll'";
	$result=mysqli_query($con, $q);

   
     if(mysqli_num_rows($result) >0 )
     {
      $DataRows= mysqli_fetch_array($result);
        
        ?>
        <table class="table table-hover table-responsive-lg " style="">
          <thead class="thead-dark">
    <tr>
    	<br>
      <th>ID</th>
      <th>NAME</th>
      <th>ROLL NO.</th>
      <th>PHONE</th>
      <th>BRANCH</th>
      <th>YEAR</th>
      <th>CITY</th>
      <th>PARENT'S NAME</th>
      <th>ADDRESS</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    <td> <?php echo $DataRows['id']; ?></td>
    <td> <?php echo $DataRows['name']; ?></td>
    <td> <?php echo $DataRows['roll']; ?></td>
    <td> <?php echo $DataRows['phn']; ?></td>
    <td> <?php echo $DataRows['branch']; ?></td>
    <td> <?php echo $DataRows['year']; ?></td>
    <td> <?php echo $DataRows['city']; ?></td>
    <td> <?php echo $DataRows['pname']; ?></td>
    <td> <?php echo $DataRows['address']; ?></td>
    </tr>

  </tbody>
        </table>
  <?php      
  }

 
   else
     {
     	echo "<script> alert ('No Student Found') </script>";
     }
}

?>