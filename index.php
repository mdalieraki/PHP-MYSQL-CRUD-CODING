<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'header.php'; ?>

<div id ="main-content">
	
	<h2>All Records</h2>

	<?php
	   $conn = mysqli_connect("localhost","root","","phpcrudali4") or die("Connection is Failed.");
	   $sql = "SELECT * FROM student4 JOIN studentclass4 WHERE student4.sclass = studentclass4.cid";
	   $result = mysqli_query($conn, $sql) or die("Query is Unsuccessful.");

	   if (mysqli_num_rows($result) > 0 ) {
	 ?>
	
	<table cellpadding="7px">
		
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>CLASS</th>
			<th>PHONE</th>
			<th>ACTION</th>
		</thead>

		<tbody>

			<?php 
			while ($row = mysqli_fetch_assoc($result)){
			 
			?>
            

            <tr>
				<td> <?php echo $row['sid']; ?> </td>
				<td> <?php echo $row['sname']; ?> </td>
				<td> <?php echo $row['saddress']; ?> </td>
				<td> <?php echo $row['cname']; ?> </td>
				<td> <?php echo $row['sphone']; ?> </td>
				<td>
					<a href="edit.php?id=<?php echo $row['sid']; ?>"> EDIT </a>
					<a href="delete-inline.php?id=<?php echo $row['sid']; ?>"> DELETE </a>
				</td>
			</tr>

		    <?php } ?>            <!-- closing of WHILE LOOP curly braces -->

		</tbody>

    </table>              <!-- closing of IF curly braces below -->

<?php }                           
         
         else{                                           

	         echo "<h2> No Record Found </h2>";
             
             }

    mysqli_close($conn);

?>



</div>

</body>
</html>