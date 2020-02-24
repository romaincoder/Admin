<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="col-lg-12">
				<h1> NGO LIST </h1>
				<table border="2">
					<tr>
						<th> ID </th>
						<th> Name </th>
						<th> Username </th>
						<th> Mobile No. </th>
						<th> Address </th>
						<th> City </th>
						<th> Password </th>
					</tr>
					 	
					<?php
					$con=mysqli_connect('localhost','root','','ngo');
					
					$q = "SELECT * FROM `ngodata` ";
					$query = mysqli_query($con,$q);
					while ($res = mysqli_fetch_array($query)) {
					?>
					
					<tr>
						<td> <?php echo $res ['n_id'] ?> </td>
						<td> <?php echo $res ['name'] ?> </td>
						<td> <?php echo $res ['username'] ?> </td>
						<td> <?php echo $res ['mo_no'] ?>. </td>
						<td> <?php echo $res ['address'] ?> </td>
						<td> <?php echo $res ['city'] ?> </td>
						<td> <?php echo $res ['password'] ?> </td>
						<td>  <button>  <a href="delete.php?n_id=<?php echo $res['n_id']; ?>">Delete  </a> </button></td>
						<td> <button> <a href="update.php?n_id=<?php echo $res['n_id']; ?>"> </a> Update </button></td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</body>
</html>