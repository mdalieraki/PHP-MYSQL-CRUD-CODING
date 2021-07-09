<?php 

   $stu_name = $_POST['sname'];
   $stu_address = $_POST['saddress'];
   $stu_class = $_POST['class'];
   $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","phpcrudali4") or die("Connection is Failed.");
$sql = "INSERT INTO student4(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query is Unsuccessful");

header("Location: http://localhost/phpmysqlCRUDali4/index.php");

mysqli_close($conn);


 ?>