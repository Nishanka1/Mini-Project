<?php
$stu_id=$_GET['id'];
$conn = new mysqli("localhost", "root", "","crud") or die("Connection Failed");
$sql="DELETE FROM grievance where sid={$stu_id}";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful.");
header("Location:http://192.168.64.2/MP2/page2_admin.php");
?>