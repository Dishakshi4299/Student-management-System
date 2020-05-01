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
</div>
</div>
<h3 class="text-center" style="font-weight:bold; font-size:22px;">Enter Student Marks</h3>

<div class="container">
    <form action="allot_marks.php" method="POST" >
  <div class="form-group">
    
    <input type="text" class="form-control"  name="name" value="" placeholder="Enter Student Name" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
  </div>
   <div class="form-group">
    
    <input type="text" class="form-control"  name="roll" value="" placeholder="Enter Student Roll No." autocomplete="off"  required style="font-size:20px; font-weight:bold;">
  </div>
   <div class="form-group">
    
    <input type="text" class="form-control"  name="branch" value="" placeholder="Enter Student Name" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
  </div>

       <div class="form-group">
    
    <input type="text" class="form-control"  name="DAA" value="" placeholder="Enter Marks in DAA" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control"  name="Web Technology" value="" placeholder="Enter Marks in Web Tech" autocomplete="off"  required style="font-size:20px; font-weight:bold;">

  </div>
   <div class="form-group">
    
    <input type="text" class="form-control"  name="Cyber Security" value="" placeholder="Enter Marks in Cyber Security" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
    
  </div>
   <div class="form-group">
    
    <input type="text" class="form-control"  name="PPL" value="" placeholder="Enter Marks" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
    
  </div>
   <div class="form-group">
    
    <input type="text" class="form-control"  name="DBMS " value="" placeholder="Enter Marks in PPL" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
    
  </div>
   <div class="form-group">
    
    <input type="text" class="form-control"  name="Economics" value="" placeholder="Enter Marks in DBMS" autocomplete="off"  required style="font-size:20px; font-weight:bold;">
    
  </div>

    <br>
  <button type="submit" name="submit" class="btn btn-primary " style="margin-left:270px; font-size:22px; font-weight:bold;">Submit</button>
  <button type="reset" name="reset" class="btn btn-primary " style="margin-left:380px; font-size:22px; font-weight:bold;">Reset</button>

</form>
</div>
<br>
</body>
</html>