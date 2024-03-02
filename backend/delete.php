<?php
include("connection.php");

$product_id=$_POST["delete"];

$insertcustomer ="DELETE FROM product WHERE product_id=".$product_id;

if($conn->query($insertcustomer)===TRUE){
    header('location:https://localhost/rumi/views/dashboard.php');

}
else{
    echo "Error:" .$insertcustomer . "<br>" .$conn->error;
}
$conn->close();
?>


