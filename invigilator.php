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
			
<?php 
	include("header.php")
 ?>

		<div class="row">
			<?php include ('nav.php'); ?>
			
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="background-color: #E1E4FC;">

				<h3 style="text-align: center; color: #37474f; background-color: #79B2FC; font-size: 24px; font-family: Times New Roman; font-style: bold; ">INVIGILATOR REGISTRATON FORM</h3>
				<table style="border-collapse: collapse; width: 100%;">

					<form method="POST" action="#">

						<tr>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="num">Invigiator Number:</label>
									<input type="text" class="form-control" id="num" placeholder="Enter Invigilator Number" name="numb" required>
								</div>
							</td>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="fnam">Full Name:</label>
									<input type="text" class="form-control" id="fnam" placeholder="Enter Full Name" name="fname" required>
								</div>
							</td>
						</tr>

						<tr>
													<td style="width: 50%;">
								<div class="form-group">
									<label for="gnd">Gender:</label>
									<input type="radio" name="gender" value="Male">Male
									<input type="radio" name="gender" value="Female">Female
								</div>
							</td>
						</tr>

						<tr>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="db">Date of Birth:</label>
									<input type="date" class="form-control" id="db" placeholder="Enter Date of Birth " name="dob" required>
								</div>
							</td>

							<td style="width: 50%;">
								<div class="form-group">
									<label for="addr">Address:</label>
									<input type="text" class="form-control" id="addr" placeholder="Enter Address" name="add" required>
								</div>
							</td>
						</tr>

						<tr>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="phn">Phone Number:</label>
									<input type="number" class="form-control" id="phn" placeholder="Enter Phone Number" name="phone" required>
								</div>
							</td>

							<td style="width: 50%;">
								<div class="form-group">
									<label for="eml">Email:</label>
									<input type="email" class="form-control" id="eml" placeholder="Enter Email" name="email" required>
								</div>
							</td>
						</tr>

						<tr>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="occu">Occupation:</label>
									<input type="text" class="form-control" id="occu" placeholder="Enter Occupation" name="occup" required>
								</div>
							</td>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="stt">Status:</label>
									<input type="text" class="form-control" id="stt"  name="status" value="Invigilator" disabled>
								</div>
							</td>
						</tr>

						<tr>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="user">Username:</label>
									<input type="text" class="form-control" id="user" placeholder="Enter Username" name="user" required>
								</div>
							</td>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
								</div>
							</td>
						</tr>

						<tr>
							<td style="width: 50%;">
								<button type="submit" name="sub" class="btn btn-primary">SUBMIT</button>
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