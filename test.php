<!--   <?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("location:index.php");
}
 ?>

<?php
include("connection.php");

if(isset($_POST['sub'])){

  $numb=$_POST['numb'];
  $fname=$_POST['fname'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $add=$_POST['add'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $occup=$_POST['occup'];
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $pass=sha1($pass);

  $sql="INSERT INTO invigilator (Inv_Number,FullName,Gender,DOB,Address,PhoneNo,Email,Occupation,Username,Password) VALUES(:numb,:fname,:gender,:dob,:add,:phone,:email,:occup,:user,:pass)";
  $pre = $con->prepare($sql);
  $pre->execute(array(':numb'=>$numb,':fname'=>$fname,':gender'=>$gender,':dob'=>$dob,':add'=>$add,':phone'=>$phone,':email'=>$email,':occup'=>$occup,':user'=>$user,':pass'=>$pass));
  header("location:index.php");
}

?> 
 -->      
   
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  
  <link rel="stylesheet" type="text/css" href="tst.css">

<style type="text/css">
  



</style>
  
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #54b0fd;">

<!--        <div class="logo col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="images/suza.jpg" class="img-responsive" alt="logo" height="60px" width="40%" style="background-color: blue;"></div> -->
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" >
        <h1 style="text-align: center;font-style: bold; font-family:Lucida Fax; color: white; ">SUZA STAFF INVIGILATION SYSTEM</h1>
      </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #c4d3d7;">
        <h4 style="text-align: center;">Admin dashboard</h4>
      </div>

    </div>
 <div class="row">

     <nav class="navbar">
  <ul class="navbar-nav">

    <li class="logo">
      <a href="#" class="nav-link">
        <span class="link-text">Fireship </span>
      </a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <span class="link-test">Cats </span>
      </a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <span class="link-test">Duck </span>
      </a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <span class="link-test">Lion </span>
      </a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <span class="link-test">Cow </span>
      </a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link"><i class="fa fa-user"></i>
        <span class="link-test">Dog </span>
      </a>
    </li>
  </ul>
  
 </nav>

      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" style="background-color: #E1E4FC;">
<!-- ------------------------------------------------- -->



      </div>
    </div>
    
  </div>
 <!--  <?php 
  include("footer.php")
   ?> -->
  
</body>
</html>
