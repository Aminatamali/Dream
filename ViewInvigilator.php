
<?php 
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("location:index.php");
}
 ?>

<?php 
include("header.php")
?>
<div class="row">
	<?php include ('nav.php'); ?>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="background-color: #E1E4FC;">

	<div class="col-md-12 table-responsive row" style="margin: 10px 0;">
		<h4 style="text-align: center; font-size: 16px; margin-bottom: 2.5px; margin-right: 17px; ">INVIGILATOR TABLE</h4>
                    <table id="data" class="table table-hover table-striped row" width="100%">
                    <thead >
                        <tr style="background: lightblue;">
							<!-- <th>Sno</th> -->
							<th>Name</th>
                            <th>Address</th>
                            <th>PhoneNo</th>
                            <th>Email</th>
                            <th>Occupation</th>
                            <th>Username</th>
                            <th colspan="3" class="text-center">Actions</th>
                        </tr>
                    </thead>

                          <tbody>


         <?php
include("connection.php");
?>
<?php 
    $sql="SELECT FullName,Address,PhoneNo,Email,Occupation
    ,Username ,InvigID FROM invigilator ";
    $stmt=$con->query($sql);
    $sn=1;


    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    // echo (htmlentities($row[#])); 
    // echo("</td><td>");
    echo (htmlentities($row['FullName']));
    echo("</td><td>");
    echo (htmlentities($row['Address']));
    echo("</td><td>");
    echo (htmlentities($row['PhoneNo']));
    echo("</td><td>");
    echo (htmlentities($row['Email']));
    echo("</td><td>");
    echo (htmlentities($row['Occupation']));
    echo("</td><td>");
    echo (htmlentities($row['Username']));
    echo("</td></tr>\n");
    }
 ?>


      </tbody>
					
					 <tfoot>
                        <tr style="background: lightblue;">
							<!-- <th>Sno</th> -->
							<th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Occupation</th>
                            <th>Username
                            </th>
                            <th colspan="2" class="text-center">Actions</th>
                        </tr>
                    </tfoot>
					
			</table>
        </div>



	</div>
</div>

</div>
	<?php 
	include("footer.php")
	 ?>
	
</body>
</html>
 