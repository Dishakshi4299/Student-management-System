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
<style>
.success
{
  color: green;
  font-size: 25px;
  font-weight: bold;
}
</style>
</head>
<body>
  <div class="center-div">
    <div class="text-center">
       <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo " style="margin-right:50px; text-decoration: none;" >Admin Dashboard </a>
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
  <br>
  <h2 class="text-center" style="font-size:25px; font-weight:bold;">SEARCH STUDENT DETAILS </h2>
  <div class="container">
  <form action="search.php" method="GET">
    <fieldset>
      <input type="text" value="" name="Search" placeholder="Search by roll no/ Student name" style="font-weight:bold; font-size:22px;">
      <input type="submit" name="search_button" value="search" class="btn btn-primary" >

    </fieldset>
  </form>
</div>
<?php 
$con=mysqli_connect('localhost','root','');
 $select=mysqli_select_db($con,'admin_operations');
 if(isset($_GET['search_button']))
 {
  $Search = $_GET["Search"];
  $SearchQuery=" SELECT * FROM add_student WHERE roll ='$Search' OR name='$Search' ";
  $execute=mysqli_query($con, $SearchQuery);
  $Sno =0;
  while($DataRows=mysqli_fetch_array($execute))
  {
        $Id= $DataRows['id'];
        $Name=$DataRows['name'];
        $Roll=$DataRows['roll'];
        $Phone=$DataRows['phn'];
        $Branch=$DataRows['branch'];
        $Year=$DataRows['year'];
        $City=$DataRows['city'];
        $Parent=$DataRows['pname'];
        $Address=$DataRows['address'];
        $Sno ++;
        ?>
        <table class="table table-hover table-responsive-lg " style="">
          <thead class="thead-dark">
    <tr>
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
      <td> <?php echo $Sno ; ?></td>
    <td> <?php echo $Name; ?></td>
    <td> <?php echo $Roll; ?></td>
    <td> <?php echo $Phone; ?></td>
    <td> <?php echo $Branch; ?></td>
    <td> <?php echo $Year; ?></td>
    <td> <?php echo $City; ?></td>
    <td> <?php echo $Parent; ?></td>
    <td> <?php echo $Address; ?></td>
    <td><a href="search.php"><button class="btn btn-secondary" name="searchagain" value=""  >Search Again</button></a></td>
    </tr>

  </tbody>
        </table>
  <?php      
  }

 }

?>
  
  <table class="table table-hover table-responsive-lg " style="">
    <thead class="thead-dark">
    <tr>
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
    <?php 
      $con=mysqli_connect('localhost','root','');
      $select=mysqli_select_db($con,'admin_operations');
      $view="select * from add_student";
      $execute=mysqli_query($con, $view);
      $Sno =0;
      while($DataRows=mysqli_fetch_array($execute))
      {
        $Id= $DataRows['id'];
        $Name=$DataRows['name'];
        $Roll=$DataRows['roll'];
        $Phone=$DataRows['phn'];
        $Branch=$DataRows['branch'];
        $Year=$DataRows['year'];
        $City=$DataRows['city'];
        $Parent=$DataRows['pname'];
        $Address=$DataRows['address'];
        $Sno++;
       

    ?>
    <tr>
    <td> <?php echo $Sno; ?></td>
    <td> <?php echo $Name; ?></td>
    <td> <?php echo $Roll; ?></td>
    <td> <?php echo $Phone; ?></td>
    <td> <?php echo $Branch; ?></td>
    <td> <?php echo $Year; ?></td>
    <td> <?php echo $City; ?></td>
    <td> <?php echo $Parent; ?></td>
    <td> <?php echo $Address; ?></td>
      
    </tr>
        <?php  } ?>
      </tbody>
  </table>
  
</body>
</html>