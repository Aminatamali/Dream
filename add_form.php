  <?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("location:index.php");
}
 ?>

<!-- <?php
include("connection.php");
session_start();
if(isset($_POST['send'])){

	$code=$_POST['code'];
	$title=$_POST['title'];
	$datee=$_POST['datee'];
	$timee=$_POST['timee'];
	$duration=$_POST['duration'];

	$sql1="SELECT RoomID FROM room WHERE Username=:user";
	$stmt=$con->prepare($sql1);
	$stmt->execute(array('user'=> $_SESSION['user']));
		echo $stmt->rowCount();
		if($stmt->rowCount()==1){
			$row=$stmt->fetch();

	$sql="INSERT INTO exam (ExamCode,RoomID,ExamName,Datie,Timie,Duration) VALUES (:code,:room,:title,:datee,:timee,:duration)";
	$pre = $con->prepare($sql);
	$pre->execute(array(':code'=>$code,':room'=>$row["RoomID"],':title'=>$title,':datee'=>$datee,':timee'=>$timee,':duration'=>$duration));
	header("location:index.php");


}
	}


?>		
 -->
<?php 
	include("header.php");
 ?>

				<div class="row">
			<?php include ('nav.php'); ?>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="background-color: #E1E4FC;">

				<h3 style="text-align: center; color: blue; background-color: #898abe; font-size: 24px; font-family: Times New Roman; font-style: bold; ">INVIGILATION DATA</h3>

					<form method="POST" action="#">

									<div class="form-group">
						<label for="in1">Invigilator Name:</label>
						<select class="form-control" id="in1" name="invig" required>
							<option>Select Invigilator Name</option>

							<?php 
							include "connection.php";
							$stmt=$con->prepare("select * from invigilator");
							$stmt->execute();

							while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
								?>
								<option value="<?php echo $row['InvigID'];?>"><?php echo $row["FullName"];?></option>
								<?php
							}
							?>
						</select>

					</div>

								<div class="form-group">
						<label for="dt">Date:</label>
						<select  class="form-control" id="dt" name="dates" required>
							<option>Select Date</option>

													<?php 
                  include "connection.php";
                  $stmt=$con->prepare("select * from exam");
                  $stmt->execute();
                   
                  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                  ?>
                   <option value="<?php echo $row['exID'];?>"><?php echo $row["Datie"];?></option>
<?php
}
?>
						</select>

					</div>
				
					<div class="form-group">
						<label for="dr">Duration:</label>
						<select  class="form-control" id="dr" name="dur" required>
							<option> Select Duration</option>

													<?php 
                  include "connection.php";
                  $stmt=$con->prepare("select * from exam");
                  $stmt->execute();
                   
                  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                  ?>
                   <option value="<?php echo $row['exID'];?>"><?php echo $row["Duration"];?></option>
<?php
}
?>
						</select>

					</div>
							

								<button type="submit" name="send" class="btn btn-primary">SUBMIT</button>
								<button type="reset" name="cancle" class="btn btn-primary">CANCEL</button>
						
					</form>

			</div>
		</div>
		
	</div>
	<?php 
	include("footer.php");
	 ?>
	
</body>
</html>