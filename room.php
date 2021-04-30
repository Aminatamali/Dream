  <?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("location:index.php");
}
 ?>

<!-- <?php 
		include("connection.php");

if(isset($_POST['subt'])){

	$rname=$_POST['rname'];
	$noseat=$_POST['noseat'];
	$camp=$_POST['camp'];
	$block=$_POST['block'];
	$num=$_POST['num'];


	$sql="INSERT INTO room (roomName,No_seats,Campus,Block,No_invig) VALUES(:rname,:noseat,:camp,:block,:num)";
	$pre = $con->prepare($sql);
	$pre->execute(array(':rname'=>$rname,':noseat'=>$noseat,'camp'=>$camp,':block'=>$block,':num'=>$num));
	header("location:profile.php");

}

 // echo "abcd";

 ?>
  -->
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
							<label for="rn">Room Name:</label>
							<input type="text" class="form-control" id="rn" placeholder="Enter Room Name" name="rname" required>
						</div>

						<div class="form-group">
							<label for="nosit">Number of Seat:</label>
							<input type="number" class="form-control" id="nosit" placeholder="Enter Number of Seat" name="noseat" required>
						</div>

						<div class="form-group">
							<label for="cmp">Campus:</label>
							<input type="text" class="form-control" id="cmp" placeholder="Enter Campus" name="camp" required>
						</div>

						<div class="form-group">
							<label for="blok">Block:</label>
							<input type="text" class="form-control" id="blok" placeholder="Enter Block" name="block" required>
						</div>

						<div class="form-group">
							<label for="numb">Number of Invigilators:</label>
							<input type="text" class="form-control" id="numb" placeholder="Enter Number of Invigilators" name="num" required>
						</div>

						<tr>
							<td style="width: 50%;">
								<button type="submit" name="subt" class="btn btn-primary">SUBMIT</button>
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