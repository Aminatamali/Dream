  <?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("location:index.php");
}
 ?>

<!--  <?php 
 include("connection.php");

 if(isset($_POST['send'])){
 	session_start();
 	$campus=$_POST['campus'];
 	$status=$_POST['status'];

 	$sql="select stID from staff where Username=:user";

 	$pre = $con->prepare($sql);
 	$pre->execute(array(':user'=>$_SESSION["user"]));
 	if($pre->rowCount()==1){
 		$row=$pre->fetch();


 		$sql="INSERT INTO application (stID,campus,Status) VALUES(:id,:campus,:status)";
 		$pre = $con->prepare($sql);
 		$pre->execute(array(':id'=>$row['stID'],':campus'=>$campus,':status'=>$status));
 	}
 			header("location:index.php");

 		}


 		?> -->


 		<?php 
 		include("header.php")
 		?>
		<div class="row">
			<?php include ('nav.php'); ?>
			
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="background-color: #E1E4FC;">


 		<h3 style="text-align: center; color: blue; background-color: #898abe; font-size: 24px; font-family: Times New Roman; font-style: bold; ">INVIGILATION DATA</h3>
 		<table style="border-collapse: collapse; width: 100%;">

 		<form method="POST" action="#">

 		<div class="form-group">
 		<label for="cmp">Campus:</label>
 		<input type="text" class="form-control" id="cmp" placeholder="Enter Campus Name" name="campus" required>
 		</div>

 		<div class="form-group">
 		<label for="stt">Status:</label>
 		<select class="form-control" id="stt" name="status"  required>
 		<option>Select Status</option>
 		<option>Invigilator</option>
 		<option>Backup</option>
 		</select>

 		</div>


 		<tr>
 		<td style="width: 50%;">
 		<button type="submit" name="send" class="btn btn-primary">SUBMIT</button>
 		<button type="reset" name="cancle" class="btn btn-primary">CANCEL</button>
 		</td>
 		</tr>

 		</form>
 		</table>

 		</div>
 		</div>

 		</div>
 		<?php 
 		include("footer.php")
 		?>

 		</body>
 		</html>