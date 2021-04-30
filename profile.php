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
<!-- <?php
	include("nav.php")

?> -->	
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="background-color: #E1E4FC;">

		<div class="table-responsive"  class="table table-striped">          
			<table class="table">
				<thead>
					<tr>
						<th colspan="4">
							<h4 style="text-align: center; color: white; font-family: Arial; font-size: 25px;" >Profile</h4>
						</th>
					</tr>
				</thead>
				
				<tbody>
					<tr class="table-info">
						<td colspan="4">User Information</td>
					</tr>


					<?php
					$user=$_SESSION['user'];
					$pass=$_SESSION['pass'];
					include("connection.php");

					$sql="SELECT * FROM admin WHERE Username='$user' AND Password='$pass' ";
					$stmt=$con->query($sql);
					$sn=1;


					if ( $r = $stmt->fetch(PDO::FETCH_ASSOC) ) {
						echo ("<tr><td>");
						echo (htmlentities($r['Name']));
						echo("</td><td>");
						echo (htmlentities($r['Address']));
						echo("</td><td>");
						echo (htmlentities($r['Username']));
						echo("</td><td>");
						echo (htmlentities($r['Role']));
						echo("</td></tr>\n");
					}
					?>
				</tbody>
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

