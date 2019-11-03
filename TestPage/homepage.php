<?php
session_start();
if(!isset($_SESSION['active'])) 
  header("Location: index.php");
require 'dbconfig/config.php';
$counter=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="css/newhomepagestyle.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/notifications.css">

</head>

<body>

<main>
<div class="wrapper">
    <ul class="category-navigation">
      <li class="active"><a href="homepage.php">Home</a></li>      
    </ul>
    <div class="container">

      <?php
      date_default_timezone_set('Europe/Sarajevo');
      //$timestamp = time();
      $date_time = date("Y-m-d");
      $datumIsteka=mysqli_query($con,"SELECT datumIstekaUg FROM employee");
      $treba=false;
      while($b=mysqli_fetch_array($datumIsteka)){
        $mj=substr($b[0],5,2);
        $go=substr($b[0],0,4);
        $tgo=date("Y");
        $tmj=date("m");
        if($tgo==$go && $mj-$tmj<8 && $mj-$tmj>=7){
          $treba=true;
          $who=mysqli_query($con,"SELECT ImeIPrezime,id,deleted from employee where datumIstekaUg='$b[0]'");
          $rowz = mysqli_fetch_array($who);
          if($rowz[2]!='1'){
          $exp = $mj-$tmj;
          echo '<div class="Message Message--green">
                  <div class="Message-icon green">
                    <i class="fa fa-times"></i>
                  </div>
                  <div class="Message-body">
                    <p><strong>Warning!</strong> '.$rowz[0].'-s contract will expire in '.$exp.' months.</p>
                    <a href="panel.php?send='.$rowz[1].'"><button class="Message-button">Go to '.$rowz[0].'-s profile </button></a>
                    </div>
                    </div>';
          $counter++;
        }
        }else if($go==$tgo+1 && $mj+12-$tmj<8 && $mj+12-$tmj>=7){
          $treba=true;
          //novo
          $who=mysqli_query($con,"SELECT ImeIPrezime,id,deleted from employee where datumIstekaUg='$b[0]'");
          $rowz = mysqli_fetch_array($who);
          if($rowz[2]!='1'){
          $exp = $mj+12-$tmj;
          echo '<div class="Message Message--green">
                  <div class="Message-icon green">
                    <i class="fa fa-times"></i>
                  </div>
                  <div class="Message-body">
                    <p><strong>Warning!</strong> '.$rowz[0].'-s contract will expire in '.$exp.' months.</p>
                    <a href="panel.php?send='.$rowz[1].'"><button class="Message-button">Go to '.$rowz[0].'-s profile </button></a>
                    </div>
                    </div>';
                $counter++;
              }
        }
        if($tgo==$go && $mj-$tmj<7 && $mj-$tmj>=6){
          $treba=true;
          //novo
          $who=mysqli_query($con,"SELECT ImeIPrezime,id,deleted from employee where datumIstekaUg='$b[0]'");
          $rowz = mysqli_fetch_array($who);
          if($rowz[2]!='1'){
          $exp = $mj-$tmj;
          echo '<div class="Message Message--orange">
                  <div class="Message-icon orange">
                    <i class="fa fa-times"></i>
                  </div>
                  <div class="Message-body">
                    <p><strong>Warning!</strong> '.$rowz[0].'-s contract will expire in '.$exp.' months.</p>
                    <a href="panel.php?send='.$rowz[1].'"><button class="Message-button">Go to '.$rowz[0].'-s profile </button></a>
                    </div>
                    </div>';
          $counter++;
        }
        }else if($go==$tgo+1 && $mj+12-$tmj<7 && $mj+12-$tmj>=6){
          $treba=true;
          //novo
          $who=mysqli_query($con,"SELECT ImeIPrezime,id,deleted from employee where datumIstekaUg='$b[0]'");
          $rowz = mysqli_fetch_array($who);
          if($rowz[2]!='1'){
          $exp = $mj+12-$tmj;
          echo '<div class="Message Message--orange">
                  <div class="Message-icon orange">
                    <i class="fa fa-times"></i>
                  </div>
                  <div class="Message-body">
                    <p><strong>Warning!</strong> '.$rowz[0].'-s contract will expire in '.$exp.' months.</p>
                    <a href="panel.php?send='.$rowz[1].'"><button class="Message-button">Go to '.$rowz[0].'-s profile </button></a>
                    </div>
                    </div>';
                $counter++;
              }
        }
        if($tgo==$go && $mj-$tmj<6){
          $treba=true;
          //novo
          $who=mysqli_query($con,"SELECT ImeIPrezime,id,deleted from employee where datumIstekaUg='$b[0]'");
          $rowz = mysqli_fetch_array($who);
          if($rowz[2]!='1'){
          $exp = $mj-$tmj;
          echo '<div class="Message Message--red">
                  <div class="Message-icon red">
                    <i class="fa fa-times"></i>
                  </div>
                  <div class="Message-body">
                    <p><strong>Warning!</strong> '.$rowz[0].'-s contract will expire in '.$exp.' months.</p>
                    <a href="panel.php?send='.$rowz[1].'"><button class="Message-button">Go to '.$rowz[0].'-s profile </button></a>
                    </div>
                    </div>';
          $counter++;
        }
        }else if($go==$tgo+1 && $mj+12-$tmj<6){
          $treba=true;
          //novo
          $who=mysqli_query($con,"SELECT ImeIPrezime,id,deleted from employee where datumIstekaUg='$b[0]'");
          $rowz = mysqli_fetch_array($who);
          if($rowz[2]!='1'){
          $exp = $mj+12-$tmj;
          echo '<div class="Message Message--red">
                  <div class="Message-icon red">
                    <i class="fa fa-times"></i>
                  </div>
                  <div class="Message-body">
                    <p><strong>Warning!</strong> '.$rowz[0].'-s contract will expire in '.$exp.' months.</p>
                    <a href="panel.php?send='.$rowz[1].'"><button class="Message-button">Go to '.$rowz[0].'-s profile </button></a>
                    </div>
                    </div>';
                $counter++;
              }
        }
        $_SESSION['cont'] = $counter;
      }
?>
    </div>
  </div>
</main>



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
    </ul>
  </nav>
</aside>
<?php
    if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['active']); 
    header('location: index.php');
  }
  ?>
</body>
</html>