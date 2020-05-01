<?php 
session_start();
if(isset($_POST["submit"]))
{

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'admin_operations');


$Subject_Code= $_POST['sub_code'];
$Subject_Name= $_POST['sub_name'];
$q="SELECT * FROM add_subject WHERE sub_code='$Subject_Code' && sub_name='$Subject_Name'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
  echo '<span class="danger">Already exist!!</span>';
}
else
{
  $qy="INSERT INTO add_subject (sub_code, sub_name) VALUES ('$Subject_Code', '$Subject_Name')";
  $execute = mysqli_query($con, $qy);
if($execute)
{
  echo '<span class="success" >Subject has been added successfully!!</span>';
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
       <li><a class="waves-effect waves-light btn" href="admin_dashboard.php">Back</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">About</a></li>
    <li><a href="badges.html">Change Password</a></li>
    <li><a class="waves-effect waves-light btn" href="logout.php">  Log Out </a></li>

    
  </ul>
	<div class="container">
		<h2 class="text-center" style=" font-size:25px; font-weight:bold;">MANAGE SUBJECTS</h2>
	</div>
  <div class="col-sm-10">
    <div>
      <form action="add_subjects.php" method="POST">
        <div class="form-group">
           <input type="text" placeholder="Enter Subject Code" name="sub_code" value="" class="form-control" required style=" font-size:22px; font-weight:bold; margin-left: 20px;">
        </div>
        <div class="form-group">
          <input type="text" placeholder="Enter Subject Name" name="sub_name" value="" class="form-control" required style=" font-size:22px; font-weight:bold; margin-left: 20px;">
        </div>
        
        <br>
          <button type="submit" name="submit" class="waves-effect waves-light btn" style="margin-left:270px; font-size:22px; font-weight:bold;">ADD SUBJECT</button>
           <button type="reset" name="reset" class="waves-effect waves-light btn" style="margin-left:270px; font-size:22px; font-weight:bold;">RESET SUBJECT</button>
          <br>
      </form>
    </div>
    <br>
    <br>
    <div class="align-items-center">
      <h4class="text-center" style="font-weight:bold; margin-left: 100px;">LIST OF SUBJECTS</h4>
      <h3 class="success"><?php echo @$_GET['Deleted']; ?> </h3>
      <table class="table table-hover table-responsive-lg " style="margin-left:110px; ">
        <thead class="thead-dark text-center">
          <tr>
            <th>SNo.</th>
            <th>SUBJECT CODE</th>
            <th>SUBJECT NAME</th>
            <th>DELETE SUBJECT</th>
          </tr>
          </thead>
          <?php 
           $con = mysqli_connect('localhost','root');
         $select= mysqli_select_db($con, 'admin_operations');
          $View="select * from add_subject";
          $Execute= mysqli_query($con,$View);
           $Sno =0;
          while($DataRows= mysqli_fetch_array( $Execute))
          {
            $Id=$DataRows["id"];
            $Sub_Code=$DataRows["sub_code"];
            $Sub_Name=$DataRows["sub_name"];
            $Sno ++;
        ?>
         
         
  <tbody>
    <tr>
    <td> <?php echo  $Sno; ?></td>
    <td> <?php echo $Sub_Code; ?></td>
    <td> <?php echo $Sub_Name; ?></td>
    <td><a href="delete_subject.php?Delete=<?php echo $Id;?>" style="text-decoration: none;">DELETE</a></td>
  </tr>

          <?php  } ?>

  </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<br>
<br>
</body>
</html>