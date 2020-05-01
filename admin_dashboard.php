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
      <a href="#!" class="brand-logo " style="margin-right:50px; text-decoration: none;" >Admin Dashboard </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars fa-2x"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="about.php" style="text-decoration: none;">About</a></li>
        <li><a href="badges.html" style="text-decoration: none;">Change Password</a></li>
       <li><a class="waves-effect waves-light btn" href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="about.php">About</a></li>
    <li><a href="badges.html">Change Password</a></li>
    <li><a class="waves-effect waves-light btn" href="logout.php">  Log Out </a></li>

    
  </ul>
 
			<h2 class="text-center font-weight:bold" style="font-size:20px;">Welcome to the dashboard <?php echo $_SESSION['user'] ?></h2></div> 
			&nbsp; &nbsp;
	</div>
	
    <section>

<div class="row">
   <div class="col s4 m4 l4 offset-l4"><hr></div>
  
   <div class="row">
    <div class="col m4 s12 l4">
      
      <div class="card hoverable #4dd0e1 cyan lighten-2 ml-2" style="height:250px;" >
        
          <h3 class="card-title center-align" style="font-size:35px; font-weight:bold;">ENROLL NEW STUDENT</h3>

        
        <div class="card-content">
           <i class="large material-icons  " style=" font-size:7rem; color:white; margin-left:75px;">account_circle</i>
           <a class="btn-floating halfway-fab waves-effect waves-light #006064 cyan darken-4" href="enroll.php"><i class="large material-icons ">add</i></a>
        </div>
       
      </div>
    
            
    </div>
    <div class="col m4 s12 l4">
      
      <div class="card hoverable #f48fb1 pink lighten-3 ml-2" style="height:250px;">
        
           <h3 class="card-title center-align" style="font-size:35px; font-weight:bold; ">UPDATE  DETAILS</h3>
        
        <div class="card-content">
          <i class="large material-icons mt-4" style=" font-size:7rem; color:white; margin-left:75px;">update</i>
          <a class="btn-floating halfway-fab waves-effect waves-light #e91e63 pink" href="display.php"><i class="large material-icons ">edit</i></a>
        
        </div>
       
      </div>
    
            
    </div>
    <div class="col m4 s12 l4">
      
      <div class="card hoverable #ffb74d orange lighten-2 ml-2" style="height:250px;">

           <h3 class="card-title center-align" style="font-size:35px; font-weight:bold;">DELETE STUDENT</h3>
        <div class="card-content">
         <i class="large material-icons mt-4" style=" font-size:7rem; color:white; margin-left:75px;">delete_forever</i>
         <a class="btn-floating halfway-fab waves-effect waves-light #e65100 orange darken-4" href="delete.php"><i class="large material-icons ">clear</i></a>

        </div>
       
      </div>
    
            
    </div>
   </div>
   </section>
 
 <section>

<div class="row">
   <div class="col s4 m4 l4 offset-l4"><hr></div>
 
   <div class="row">
    <div class="col m4 s12 l4">
      
      <div class="card hoverable #ff5252 red accent-2 ml-2" style="height:250px;" >
        
          <h3 class="card-title center-align" style="font-size:35px; font-weight:bold;">SEARCH STUDENT DETAILS </h3>

        
        <div class="card-content">
           <i class="large material-icons  " style=" font-size:7rem; color:white; margin-left:75px;">search</i>
           <a class="btn-floating halfway-fab waves-effect waves-light #b71c1c red darken-4" href="search.php"><i class="large material-icons ">search</i></a>
        </div>
       
      </div>
    
            
    </div>
    <div class="col m4 s12 l4">
      
      <div class="card hoverable #ce93d8 purple lighten-2 ml-2" style="height:250px;">
        
           <h3 class="card-title center-align" style="font-size:35px; font-weight:bold; ">ADD SUBJECTS</h3>
        
        <div class="card-content">
          <i class="large material-icons mt-4" style=" font-size:7rem; color:white; margin-left:75px;">library_add</i>
          <a class="btn-floating halfway-fab waves-effect waves-light #4a148c purple darken-4" href="add_subjects.php"><i class="large material-icons ">add</i></a>
        
        </div>
       
      </div>
    
            
    </div>
    <div class="col m4 s12 l4">
      
      <div class="card hoverable #b2ff59 light-green accent-2 ml-2" style="height:250px;">

           <h3 class="card-title center-align" style="font-size:35px; font-weight:bold;">ALLOT MARKS</h3>
        <div class="card-content">
         <i class="large material-icons mt-4" style=" font-size:7rem; color:white; margin-left:75px;">assignment_ind</i>
         <a class="btn-floating halfway-fab waves-effect waves-light #76ff03 light-green accent-3" href="allot_marks.php"><i class="large material-icons ">check</i></a>

        </div>
       
      </div>
    
            
    </div>
   </div>
   </section>
 
	
	<script>
		 $(document).ready(function(){
    $('.sidenav').sidenav();
  });
        
	</script>
</body>
</html>