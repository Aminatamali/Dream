  <?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("location:index.php");
}
 ?>

<!-- <?php
include("connection.php");

if(isset($_POST['sub'])){

	$numb=$_POST['numb'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$add=$_POST['add'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$occup=$_POST['occup'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$sql="INSERT INTO invigilator (Inv_Number,FirstName,LastName,Gender,DOB,Address,PhoneNo,Email,Occupation,Username,Password) VALUES(:numb,:fname,:lname,:gender,:dob,:add,:phone,:email,:occup,:user,:pass)";
	$pre = $con->prepare($sql);
	$pre->execute(array(':numb'=>$numb,':fname'=>$fname,':lname'=>$lname,':gender'=>$gender,':dob'=>$dob,':add'=>$add,':phone'=>$phone,':email'=>$email,':occup'=>$occup,':user'=>$user,':pass'=>$pass));
	header("location:index.php");
}

?> 
 -->			
<?php 
	include("header.php")
 ?>

 <style>
   input [type="text"],[type="date"]{
    width: 150px;
    border-radius: 5px;

   }

 </style>

				<div class="row">
		<?php include ('nav.php'); ?>
    
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="background-color: #E1E4FC;">


				<h3 style="text-align: center; color: #37474f; background-color: #79B2FC; font-size: 24px; font-family: Times New Roman; font-style: bold; ">INVIGILATORS DATE AND SESSIONS ARRANGEMENT </h3>
				<div class="table-responsive" >
					
    <table class="table">
      <thead>
        <tr>
          <!-- <th style="text-align: center;">S/N</th> -->
        </tr>
      </thead>

      <form action="" method="POST">

      <tbody>
        <tr>
          <td>

            <div class="form-group">
            <select class="form-control" id="in1" name="name" required>
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

            <br></td>
          </tr>

          <tr>
           <td>
           	<p>15/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           	
           	 <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>

           </td>

           <td>
           	<p>16/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>17/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>18/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>
           </tr>

           <tr>
           <td>
           	<p>19/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>22/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
          <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>23/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>24/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           </tr>

           <tr>

           <td>
           	<p>25/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
          <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>26/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>01/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>02/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
         <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           </tr>

           <tr>
           <td>
           	<p>03/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
          <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>04/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
           <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

           <td>
           	<p>05/02/2021</p>
            <input type="date" name="cal" placeholder="Enter the Date"><br>
           	<input type="checkbox" name="dur" value="Morning"> Morning<br>
           	<input type="checkbox" name="dur" value="Noon"> Noon<br>
            <select class="form-control" id="in1" name="name" required>
              <option>Select Room</option>

              <?php 
              include "connection.php";
              $stmt=$con->prepare("select * from room");
              $stmt->execute();

              while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $row['RoomID'];?>"><?php echo $row["roomName"];?></option>
                <?php
              }
              ?>
            </select>
           </td>

        </tr>

        <tr>
              <td style="width: 50%;">
                <button type="submit" name="send" class="btn btn-primary">SUBMIT</button>
                <button type="reset" name="cancle" class="btn btn-primary">CANCEL</button>
              </td>
            </tr>

      </tbody>
    </form>
    </table>
      
  </div>
</div>

			</div>
		</div>
		
	</div>
	<?php 
	include("footer.php")
	 ?>
	
</body>
</html>