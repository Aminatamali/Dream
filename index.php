<?php 
	include("connection.php");

	if(isset($_POST['send'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$pass=sha1($pass);


		$sql="SELECT Username,Password FROM admin WHERE (Username=:user AND Password=:pass)";
		$stmt=$con->prepare($sql);
		$stmt->execute(array('user'=>$user,'pass'=>$pass));
    
		if($stmt->rowCount()==1){
			session_start();
			$_SESSION['user']=$user;
      $_SESSION['pass']=$pass;
			$_SESSION['Role']="Admin";   
			header("location:profile.php");

      // }else{
      //   $sql="SELECT Username,Password FROM invigilator WHERE (Username=:user AND Password=:pass)";
      //   $stmt=$con->prepare($sql);
      //   $stmt->execute(array('user'=>$user,'pass'=>$pass));
      //   if($stmt->rowCount()==1){
      //     session_start();
      //     $_SESSION['user']=$user;
      //     $_SESSION['Status']="Invigilator";
      //     header("location:exam.php");


				}else{
					header("location:index.php");
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Index page</title>


 <!--  <link href="bootstrap/css/bootsrap.css" rel="stylesheet" />
  <link href="bootstrap/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">
  <script src="bootstrap/js/jquery-1.10.2.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  
  <link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body>
  <div class="container-fluid">
    <div style="width: 100%; height: 600px; background-image: url('images/backg.jpg'); background-size: 100% 100%; ">
    <div>
      <h1 style="text-align: center;font-style: bold; font-family:Lucida Fax; color: white; ">SUZA STAFF INVIGILATION SYSTEM</h1>
    </div>  
      <div class="loginbox" style="margin-top: 50px;">
        <img src="images/person.jpg" class="logo">
  <form id="part" class="input-group" action="#" method="POST">
        <input type="text" name="user" class="input-field" placeholder="Enter Your Username" required>
        <input type="Password" name="pass" class="input-field" placeholder="Enter Your Password" required>
        <center> <input type="submit" name="send" class="submit-btn" value="LOGIN"></center><br>
       <center> <a href="#" class="forget" style="color: #999; font-family: Book Antiqua; font-size: 15;">Forget Password</a></center>
      </form>
</div>
    </div>
  

</div>

<!-- <?php
  include("footer.php");
  ?> -->

</body>

</html>
