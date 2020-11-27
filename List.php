<?php
include "config.php";
//----Retrive record from database-----
$query2="SELECT * FROM `user`";
$result=mysqli_query($conn,$query2);


if ($result->num_rows > 0) {
    // output data of each row
echo "<h2>Output Data</h2>";
echo "<table border=2px>";
while($row=mysqli_fetch_array($result))
{
  echo "<tr><td>".$row['username']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['email']."</td><td>".$row['password']."</td><td>".$row['confirmpassword']."</td></tr>";
}
  echo "</table>";
}
 else {
    echo "0 results";
  }
  $conn->close()
?>
<html>
  <body>
    <a href="signup.php">Back</a>
  </body>
</html>