<?php
include("connection.php");

if(isset($_POST['submit'])){
$c_name = $_POST['name'];
$c_email_id= $_POST['email'];
$c_password= $_POST['password'];

}

$sql ="INSERT INTO  registration (customer_name, customer_email, customer_password) VALUES ( '$c_name', '$c_email_id', '$c_password')";
if($conn->query($sql)===TRUE)
{
header('location:../views/register.php');
} 
else{
  echo "Error:".$sql.$conn->error;
}
$conn->close();
?>