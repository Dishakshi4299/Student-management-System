<?php 
session_start();
if(isset($_POST["Submit"]))
{
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'student');

$username= $_POST['user'];
$password=$_POST['pwd'];

$q= "select * from signin where user = '$username' && pass= '$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1)
{ ?>
	<script> alert("username already taken");
	window.open('signin.php','_self');
	</script>
<?php 
	
}
else
{
$qy="insert into signin (user, pass) values('$username','$password')";
mysqli_query($con, $qy);
header('location:homepage.php');

}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<style>
.image
{
   width: 100%;
  height: 100vh;
  background-image: url('images/a.jpg');
  position: fixed;
  left: 0;
  right: 0;
  background-repeat: no-repeat;
  
  background-size:cover;
  z-index: -1;
  filter:blur(3px);
  -webkit-filter: blur(3px);
  opacity: 0.4;
  
}

</style>
</head>
<body>
	<div class="image"></div>
<div class="container">
	 <br>
    <br>
		<h2 class="text-center display-3 " style="">CREATE YOUR ACCOUNT!!</h2> &nbsp;
	</div>
	<div class="container mt-2">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<div class="card mt-5 card1 shadow" style="background-color:#ffcccc;">
  <div class="card-body">
    <h4 class="card-title" style="font-size:27px; font-weight:bold; color: black;">Student Signin</h4>
    <p class="card-text">
    	<form action="signin.php" method="POST">
  <div class="form-group ">
    <label  style="font-size:25px; font-weight:bold;">Username:</label>
    <input type="text" class="form-control" name="user" placeholder="Enter Your Username" required>
  </div>
  <div class="form-group">
    <label  style="font-size:25px; font-weight:bold;">Password:</label>
    <input type="password" class="form-control" name="pwd" placeholder="Enter Your Password" autocomplete="off" required>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  
  <button type="submit" class="btn btn-info" name="Submit" style="font-size:23px; font-weight:bold; border:2px solid white; ">
  <span class="spinner-grow spinner-grow-sm" style="color:white;"></span>Signin
</button>
</form>
    
 
  </div>
</div>
</div>
			</div>


</div>	
</body>
</html>












