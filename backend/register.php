<?php
include("connection.php");

$FName=$_POST["FName"];
$LName=$_POST["LName"];
$Address=$_POST["Address"];
$DOB=$_POST["DOB"];
$Email=$_POST["Email"];



$sql ="INSERT INTO  myorder (first_name, last_name,Address, DOB, email) VALUES ( '$FName', '$LName', '$Address', '$DOB', '$Email')";
if($conn->query($sql)===TRUE)
{
echo "Registration Successful";
} 
else{
  echo "Error:".$sql.$conn->error;
}
$conn->close();
?>