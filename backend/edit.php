<?php
include("connection.php");


$product_id=$_GET["edit"];

$sql = "UPDATE 'product' SET product_id=$product_id,product_name='$product_name','quantity='$qty',product_category='$product_category',product_image='$product_image',product_price='$product_price',tax='$tax'";

if ($conn->query($sql) === TRUE) {
    echo "updated successfuly";
}
else{
    echo "Error:" . $conn->error;
}
$conn->close();
?>


