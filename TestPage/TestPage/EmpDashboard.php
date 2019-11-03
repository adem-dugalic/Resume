<?php
  session_start();
  if(!isset($_SESSION['active'])) 
  header("Location: index.php");
  require 'dbconfig/config.php';
  $counter=$_SESSION['cont'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Database</title>

<!-- Latest compiled and minified JavaScript -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/empDash.css?version=1">		
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<!-- Side navigation bar-->
<aside>
  <header>
    <div><img class="header-logo" src="img/IUSlogo2.png"/>
      <p class="section-title">WELCOME 
      <?php echo $_SESSION['username'] ?> 
    <a href="homepage.php">
    <div class="notification-box">
    <span class="notification-count"><?php echo $counter ?></span>
    <div class="notification-bell">
      <span class="bell-top"></span>
      <span class="bell-middle"></span>
      <span class="bell-bottom"></span>
      <span class="bell-rad"></span>
      </div>
  </div>
    </a>
    </p>
    </div>
  </header>
  <nav class="side-navigation">
    <ul>
      <li><a href="homepage.php">Dashboard</a></li>
      <li><a href="EmpDashboard.php">Employee Database</a></li>
      <li><a><form action="homepage.php" method="post" enctype="multipart/form-data"><button class="btnnn" name="logout">Log out</button></form></a></li>
      <?php
    if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['active']); 
    header('location: index.php');
  }
  ?>
    </ul>
  </nav>
</aside>
<main>
  <header class="main-head">
    <div class="search">
      <input type="text" name="search" placeholder="Type here to search..." autocomplete="off"/>
    </div>
  </header>

  <!-- main content-->
  <div class="wrapper">
    <ul class="category-navigation">
      <li class="linkss active" data-name="SVE"><a href="#" name="SVE">Home</a></li>
      <li><a href="newEmployee.php">Add Employee</a></li>
      <li><a href="exportToExel.php" name="generate">Generate Report</a></li>
      <li class="linkss" data-name="FENS"><a href="#" name="FENS">FENS</a></li>
      <li class="linkss" data-name="FASS"><a href="#" name="FASS">FASS</a></li>
      <li class="linkss" data-name="FBA"><a href="#" name="FBA">FBA</a></li>
      <li class="linkss" data-name="FL"><a href="#" name="FL">FL</a></li>
      <li class="linkss" data-name="FE"><a href="#" name="FE">FE</a></li>
      <li class="linkss" data-name="Academic"><a href="#" name="Academic">Academic staff</a></li>
    </ul>
<!-- Table in the main area-->
    <div class="container">
      <div class="row c">
      <?php 
      $query= "SELECT * from employee";
      $test=mysqli_query($con,$query);
      while($smt=mysqli_fetch_array($test)){
      echo '<div class="col-md-4 mb zasakriti" data-depr="'.$smt['part'].'"><a href="panel.php?send='.$smt['id'].'"><img class="img-rounded img" src="'.$smt['img'].'"id="uploadPreview">
          <p>'.$smt['ImeIPrezime'].'</p></a></div>';

        }
    ?>
      </div>
   </div>
  </div>

</main>

<?php 


?>

</body>
</html>