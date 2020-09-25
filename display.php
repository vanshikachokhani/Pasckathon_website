

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'css/style.css';  ?>
	<?php  include 'links/links.php'; ?>
</head>
<body>

<div class="main-div">
	<h1>List of hospitals</h1>
	<div class="center-div">		
		<div class="table-responsive">
		<table>
			<thead>
				<th >Hospital</th>
				<th>Disease</th>
				<th>Safety</th>
				<th>Cleanliness</th>
				<th>Treatment</th>
				<th>Value for money</th>
				<th colspan="2">View</th>
			</thead>
			<tbody>
	<?php

	include 'db.php';

	$selectquery = " select * from RECOMMENDI ";

	$query = mysqli_query($conn,$selectquery );

	while($result = mysqli_fetch_assoc($query)){

	?>
				<tr>
					<td><?php  echo $result['HOSPITAL'];  ?> </td>
					<td><?php  echo $result['DISEASE'];  ?> </td>
					<td><?php  echo $result['SAFETY'];  ?> </td>
					<td><?php  echo $result['CLEANLINESS'];  ?> </td>
					<td><?php  echo $result['TREATMENT'];  ?> </td>
					<td><?php  echo $result['VALUE_FOR_MONEY'];  ?> </td>
					<td><a href="bargraph.php?id=<?php  echo $result['id'];  ?>"> <i class="fa fa-eye"> </i> </a></td>
					<!--<td><a href="delete.php?ids=<?php  echo $result['id'];  ?>"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>-->
				</tr>
	<?php 
				
		}

	?>

			</tbody>
		</table>
	</div>
</div>
</div>
</body>
</html>
