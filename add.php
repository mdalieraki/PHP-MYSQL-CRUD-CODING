<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'header.php'; ?>

<div id="main-content">
	<h2> Add New Records </h2>
	<form class="post-form" action="savedata.php" method="post">
		
		<div class="form-group">
			<label> Name </label>
			<input type="text" name="sname" >
		</div>

		<div class="form-group">
			<label> Address </label>
			<input type="text" name="saddress" >
		</div>

		<div class="form-group">
			<label> Class </label>
			<select name="class">
				<option value=""selected disabled> Select your class </option>;
			        
			        <?php 

			               $conn= mysqli_connect("localhost","root","","phpcrudali4") or die("connection is failed");
			               $sql = "SELECT * FROM studentclass4";
			               $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");     

			               while ($row = mysqli_fetch_assoc($result)) {  
			            	
			       ?>

				              <option value="<?php echo $row['cid'];?>"> <?php echo $row['cname']; ?> </option>
                 
                      <?php } ?>         <!--  closing of WHILE LOOP curly braces-->
                                           <!--  $row is an Associative Array, so we have to apply WHILE LOOP -->

            </select>
		</div>

		<div class="form-group">
			<label> Phone </label>
			<input type="text" name="sphone" >
		</div>

		<input class= "submit" type="submit" value="Save" >
    
    </form>


</div>

</body>
</html>