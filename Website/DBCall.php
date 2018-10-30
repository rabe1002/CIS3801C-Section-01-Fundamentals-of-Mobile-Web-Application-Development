<!DOCTYPE html>
<html>
<head>
  <title>Staff</title>
  <meta charset=utf-8>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<p>
<?php
//Allow Headers
header('Access-Control-Allow-Origin: *');
//$servername = "localhost:3306";
$servername = "localhost:3306";
$username = "Learner";
$password = "Rasmussen";
$dbname = "demo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($conn->connect_error)
     echo "Error: Unexpected connection error. Please retry the operation.";
 else
  {
     $result = $conn->query("SELECT * FROM Staff");

     {
       while ($row = $result->fetch_assoc()) {


         $A = $row['Title'];
         $B = $row['FirstName'];
         $C = $row['LastName'];
         $D = $row['PhoneNumber'];
         echo $A, " ";
         echo $B, " ";
         echo $C, " ";
         echo $D, " ";
         echo "<br>";
       }
       }
     $conn->close();
}
?>
</p>
</body>
</html>
