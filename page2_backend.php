<?php
$conn = new mysqli("localhost", "root", "","crud") or die("Connection Failed");

if(isset($_POST['submits'])){
 
    $crud_rollno=$_POST["rollno"];
    $crud_number=$_POST["number"];
    $crud_myText=$_POST["myText"];
 
$sql="INSERT INTO grievance(rollno,contactno,text) Values('{$crud_rollno}','{$crud_number}','{$crud_myText}')";
$result=mysqli_query($conn,$sql) or die("Connection Failed");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
  <style>
      h1{
font-size:40px;
margin-top:50px;
margin-left:80px;
      }
      body{
        background-color:rgb(217,229,240);
      }
  </style>
</head>
<body>
    <h1>YOUR COMPLAINT HAS BEEN REGISTERED SUCCESSFULLY!</h1>
   
</body>
</html>