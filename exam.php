  <?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("location:index.php");
}
 ?>

<?php
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

<?php 
	include("header.php");
 ?>

				<div class="row">
			<?php include ('nav.php'); ?>
			
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="background-color: #E1E4FC;">

				<h3 style="text-align: center; color: blue; background-color: #898abe; font-size: 24px; font-family: Times New Roman; font-style: bold; ">EXAMINATION FORM</h3>

					<form method="POST" action="#">

								<div class="form-group">
									<label for="exm">Exam Code:</label>
									<input type="text" class="form-control" id="exm" placeholder="Enter Exam Code" name="code" required>
								</div>
							
								<div class="form-group">
									<label for="exmt">Exam Name:</label>
									<input type="text" class="form-control" id="exmt" placeholder="Enter Exam Title" name="title" required>
								</div>

								<div class="form-group">
									<label for="exdt">Date:</label>
									<input type="date" class="form-control" id="exdt" placeholder="Enter Date" name="datee" required>
								</div>

								<div class="form-group">
									<label for="extm">Time:</label>
									<input type="time" class="form-control" id="extm" placeholder="Enter Time" name="timee" required>
								</div>

								<div class="form-group">
									<label for="dur">Duration:</label> <br>
									<input type="radio" id="dur" name="durt" value="Morning" required>Morning 
									<input type="radio" id="dur" name="durt" value="Afternoon" required>Afternoon

								</div>

								<div class="form-group">
									<label for="dur">Number of Students:</label>
									<input type="number" class="form-control" id="dur" name="std" placeholder="Enter Number of Students" name="duration" required>
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