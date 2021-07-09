<?php 

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student4 WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/phpmysqlCRUDali4/index.php");

mysqli_close($conn);

?>