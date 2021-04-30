<!doctype html>
<html >
<head>
  
    <title> campus index </title>
	<link rel="stylesheet" type="text/css" href=".css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
	
	<?php include "header.php";  ?>
  
    </head>
        
  	<body class="header-fixed-top">

  		<div id="page-top" class="page-top"></div><!-- /.page-top -->
		
  		<section id="site-banner" class="site-banner text-center">
  			<div class="container">
  				<div class="site-logo">
  					<a href="./"><img src="images/Amina1.png" alt="Site Logo" style="height:80px; width:500px;"></a>
  				</div><!-- /.site-logo -->
  			</div><!-- /.container -->
  		</section><!-- /#site-banner -->

		
		<header id="main-menu" class="main-menu">
  			<div class="container">
  				<div class="row">
  					<div class="col-sm-7">
  						<div class="navbar-header">
  							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
  								<i class="fa fa-bars"></i>
  							</button>
                <div class="menu-logo">
                  <a href="./"><img src="images/suzalogo.png" alt="menu Logo"></a>
                </div><!-- /.menu-logo -->
              </div>
			    </div>
			<div class="col-md-12 col-sm-7" id="menu_list">
    <ul>
        <li class="active"><a href="admin.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="admincomp.php">View Company</a></li>
        <li><a href="adminstudent.php">View Student</a></li>
        <li><a href="adminnotif.php">Company Feedback</a></li>
		<li><a href="logout.php">Logout</a></li>
    </ul><!-- /.menu-list -->
</div><!-- /.menu-list -->
          </div>

		</div>
      <!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /#main-menu -->
  
   <!-------------------------------------------------------------------->
    <div class="" style="margin-top: 20px;"></div>
    <div class="col-md-10 col-md-offset-1 col-xs-12">
        -tabele--->
		<?php 
		include("connection.php");
		$q2=$db->query("SELECT * FROM company");
		
		$sn=1;
		?>
		
        <div class="col-md-12 table-responsive row" style="margin: 10px 0;">
                    <table id="data" class="table table-hover table-striped row" width="100%">
                    <thead >
                        <tr style="background: lightblue;">
							<th>Sno</th>
							<th>CompanyNumber </th>
							<th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>UserName</th>
                            <th>Role</th>
                            <th>Status</th>
							<th colspan="3" class="text-center">Actions</th>
                        </tr>
                    </thead>
					<tbody>
					<?php
						while($row = $q2->fetch_assoc()) {
							?>
					<tr>
					<td><?=$sn++?></td>
						<td><?= $row['compID']; ?></td>
						<td><?= $row['compName']; ?></td>
						<td><?= $row['compAddress']; ?></td>
						<td><?= $row['Email']; ?></td>
						<td><?= $row['contactNo']; ?></td>
						<td><?= $row['username']; ?></td>
						<td><?= $row['Role']; ?></td>
						<td><?= $row['Status']; ?></td>
						<td class="text-center" style="width: 30px"><a href="CompUpdate.php?id=<?= $row['compID'] ?>"><i class="fa fa-pencil"></i></a></td>
					    <td class="text-center" style="width: 30px"><a href="del_CompHandler.php?delete=<?= $row['compID'] ?>"><i class="fa fa-trash-o"></i></a></td>
					</tr>
						<?php } ?>
					</tbody>
					 <tfoot>
                        <tr style="background: lightblue;">
							<th>Sno</th>
							<th>CompanyNumber </th>
							<th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>User Name</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th colspan="2" class="text-center">Actions</th>
                        </tr>
                    </tfoot>
					
			</table>
        </div>
       <!-- End table -->
  </div>
  
  <div class="clearfix"></div>
  <div class="" style="margin-top: 20px;"></div>
  <!--------------------------------------------------------------->
  
  <?php include 'footer.php'; ?>



</body>
</html>