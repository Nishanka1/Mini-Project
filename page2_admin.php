
<?php

$conn = new mysqli("localhost", "root", "","crud") or die("Connection Failed");
  
       $sql="SELECT *  FROM grievance";
      $result=mysqli_query($conn,$sql) or die("Connection Failed");
      
?>
<!DOCTYPE>

<html>
	<head>
<title> admin</title>
<style> <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'> 
 
html {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

thead th {
  font-family: 'Rock Salt', cursive;
}

th {
  letter-spacing: 2px;
}

td {
  letter-spacing: 1px;
}

tbody td {
  text-align: center;
}

thead, tfoot {
  background: url(leopardskin.jpg);
  color: white;
  text-shadow: 1px 1px 1px black;
}

thead th, tfoot th, tfoot td {
  background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5));
  border: 3px solid black;
}
tbody tr:nth-child(odd) {
  background-color: grey;
}

tbody tr:nth-child(even) {
  background-color: grey;
}

tbody tr {
  background-image: url(noise.png);
}

table {
  background-color:grey;
}
/* 
#main-content{
    margin-left:550px;
    margin-top:250px;
} */

#solvedbutton{
  background-color:rgb(192,192,192);
  color:rgb(192,192,192);
  border:none;
  font-size:15px;
  font-family: 'Rock Salt', cursive;


}
a{
  text-decoration: none;
  color:black;
}
h2{
  margin-left:100px;
}
table{
  width:100%
}
h2{
  margin-left:650px;
  font-size:20px;
  font-family: 'Rock Salt', cursive;
}
</style>
	</head>

	<body style="background-color:rgb(192,192,192)">
  <header> <h2>All Complaints</h2>  </header>
<div id="main-content">
   
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Contact No</th>
        <th>Text</th>
        <th>Action</th>
        </thead>
        <?php  if(mysqli_num_rows($result)>0){
         while ($row = $result->fetch_assoc()) { ?>
        <tbody>
            <tr>
                <td><?php echo $row['sid'];?></td>
                <td> <?php echo $row['contactno'];?></td>
                <td><?php echo $row['text'];?></td>
              
                <td>
                    
                   <button id="solvedbutton"> <a href='solved.php?id=<?php echo $row['sid'];?>'>Solved</a></button>
                </td>
</tr>
<?php }}?>
        </tbody>
    </table>
   
</div>
</body>
</html>