<?php 
include("../backend/connection.php");
?>

<?php
   include("../fragment/header.php");
   ?>


<?php
if(isset($_GET['product_id'])){

    $product_id = $_GET['product_id'];
   $query = "SELECT * FROM products  WHERE product_id ='" .$product_id."'";
   $result = $conn->query($query);
   if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $product_name = $row['product_name'];
    $qty = $row['qty'];
    $product_category = $row['product_category'];
    $product_image = $row['product_image'];
    $product_price= $row['product_price'];

   }
}
else{
    header('location:https://localhost/rumi/views/index.php');
 }
?>
  
<section class="container single-product my-3 pt-3">
    <div class="row mt-3">
         <div class="col-lg-5 col-md-6 col-sm-12">
            <img class="img-fluid w-50 pb-1" src="<?php echo $row['product_image']; ?>" id="mainImg"/>
<div class="small-img-group">
    <div class="small-img-col data-productid=1">
<img src="../images/men.jpg" width=100% class="small-img"/>
<h5>men wear</h5>
</div>
<div class="small-img-col data-productid=2">
<img src="../images/bag3.jpg" width=60% class="small-img" style="height:200px";/>
<h5>handbag</h5>
</div>
<div class="small-img-col data-productid=3">
<img src="../images/women3.jpg" width=80% class="small-img" style="height:200px"/>
<h5>women wear</h5>
</div>
</div>
</div>

<div class="col-lg-6 col-md-12 col-12">
    <h3><?php echo $product_name; ?></h3>
    <h5 class="py-4">Men <?php echo $product_category; ?></h5>
    <h2>$<?php echo $product_price; ?></h2>
<div class="btn-group">
    <form method ="POST">
        <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>" product_id="product_id">
    <a href="<?php echo "https://localhost/rumi/views/cart.php?product_id=". $row['product_id']; ?>"  name="add_to_cart" class="btn btn-danger">ADD TO CART</a>
</form>
</div>
    

    <h4 class="mt-4 mb-4">Product details</h4>
    <span>The details of this product will be displayed
    the details of this product will be displayed
    the details of this product will be displayed
    the details of this product will be displayed.
    </span>
</div>
</div>
</section>


<script>
    var mainImg = document.getElementById("mainImg");
    var smallImg = document.getElementsByClassName("small-img");

    for(let i=0; i<3; i++){

    smallImg[i].onclick = function(){
    mainImg.src = smallImg[i].src;
   }
    }
</script>

<?php
        include("../fragment/footer.php");
        ?>