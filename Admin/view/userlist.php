<?php 
	session_start();
	if(isset($_SESSION['admin']))
	{
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User List</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		body{
			background: #F3F7FB;
		}
        table, th, td, tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        input[type=search] {
		  padding: 8px;
		  width: 350px;
		  margin: 0;
		  margin-top: 30px;
		  font-size: 17px;
		  position: absolute;
		  left: 100px;
		  border: none;
		}
		.search{
			position: relative;
		}
		.search button {
		  margin: 0;
		  padding: 8px 10px;
		  margin-top: 30px;
		  margin-right: 16px;
		  background: #ffffff;
		  font-size: 17px;
		  border: none;
		  cursor: pointer;
		  position: absolute;
		  left: 450px;
		}
        

    </style>
</head>
<body>
	<?php require "include/adminhead.php"; ?>
	<?php  
	require_once '../controller/adminInfo.php';

	$customers = fetchCustomer();

	?>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="search">
					<form action="../view/searchpage.php">
					    <input type="search" placeholder="Search.." name="searchUser">
					    <button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<br>
	<br>
	<br>
		


	<section id="user">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="user">
						<table width="100%">
							<tr>
								<td colspan="11"><h1 align="center">Customer List</h1></td>
							</tr>
					        <tr>  
					            <th>ID</th> 
					            <th>User Name</th> 
					            <th>Name</th> 
					            <th>E-mail</th>  
					            <th>Phone</th> 
					            <th>Gender</th>   
					            <th>Address</th>      
					            <th>Password</th>      
					            <th>Profile</th>                            
					            <th>Delete</th>          
					        </tr>  
					        <?php foreach ($customers as $i => $customer): ?>
								<tr>
									<td><?php echo $customer['0'] ?></td>
									<td><?php echo $customer['1'] ?></td>
									<td><?php echo $customer['2'] ?></td>
									<td><?php echo $customer['3'] ?></td>
									<td><?php echo $customer['4'] ?></td>
									<td><?php echo $customer['5'] ?></td>
									<td><?php echo $customer['6'] ?></td>
									<td><?php echo $customer['7'] ?></td>
									<td><img width="80px" src="../../User/View/images/<?php echo $customer['8'] ?>" alt="<?php echo $customer['1'] ?>"></td>
									<td><a href="../controller/deleteCustomer.php?id=<?php echo $customer['0'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
								</tr>
							<?php endforeach; ?>
							<tr>
								<td colspan="11" align="center" style="padding: 20px;"><a href="addCustomer.php" style="font-size: 30px; padding: 5px; background-color: #99cc33;">Add Customers</a></td>
							</tr>
					    </table> 
					    
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<br><br>
	<?php include "include/footer.php"; ?>
	
	
</body>
</html>




<?php
	}
	else{
		echo "Invalid request";
	}
?>
