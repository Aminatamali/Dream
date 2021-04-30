<?php
include("connection.php");

if(isset($_POST['sub'])){

	$fname=$_POST['name'];
	$add=$_POST['add'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$pass=sha1($pass);

	$sql="INSERT INTO admin (Name,Address,Gender,phone,Email,Username,Password) VALUES(:name,:add,:gender,:phone,:email,:user,:pass)";
	$pre = $con->prepare($sql);
	$pre->execute(array(':name'=>$name,':add'=>$add,':gender'=>$gender,':phone'=>$phone,':email'=>$email,':user'=>$user,':pass'=>$pass));
	header("location:profile.php");
}

?> 
			
<?php 
	include("header.php")
 ?>

		<div class="row">
			<?php include ('nav.php'); ?>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="background-color: #E1E4FC;">

				<h3 style="text-align: center; color: #37474f; background-color: #79B2FC; font-size: 24px; font-family: Times New Roman; font-style: bold; ">ADMIN REGISTRATON FORM</h3>
				<table style="border-collapse: collapse; width: 100%;">

					<form method="POST" action="#">

						<tr>
							<td style="width: 50%;">
								<div class="form-group">
									<label for="fnam">Full Name:</label>
									<input type="text" class="form-control" id="fnam" placeholder="Enter Full Name" name="name" required>
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
									<label for="gnd">Gender:</label>
									<input type="radio" name="gender" value="Male">Male
									<input type="radio" name="gender" value="Female">Female
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