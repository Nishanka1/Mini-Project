<?php
$conn = new mysqli("localhost", "root", "","crud") or die("Connection Failed");
echo "hello";

if(isset($_POST['login'])){

    $crud_name=$_POST["username"];
    
    $crud_password=$_POST["password"];
    
    $sql="SELECT password FROM admincrud WHERE username=$crud_name";
   
    
    $result=mysqli_query($conn,$sql) or die("Connection Failed");
  
    if(mysqli_num_rows($result)>0){
        while ($row = $result->fetch_assoc()) {
           if($row['password']==$crud_password)  {
               header("Location:http://192.168.64.2/MP2/page2_admin.php");
    }
}}


    // else{
    //     echo "please signup";
    // }
    }
    mysqli_close($conn);

?>