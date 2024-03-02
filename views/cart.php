<?php include("../fragment/header.php");
?>

<?php 
include("../backend/connection.php");
?>

<?php

$product_id = $_GET['product_id'];
$query = "SELECT * FROM products WHERE product_id ='" .$product_id."'";
$result = $conn->query($query);

if($result->num_rows > 0)
{

$row = $result->fetch_assoc();
$product_name = $row['product_name'];
$qty = $row['qty'];
$product_category = $row['product_category'];
$product_image = $row['product_image'];
$product_price = $row['product_price'];
$tax = $row['tax'];
}
?>

<section class="cart my-3 py-3">
<div class="container mt-3">
   <h1>Your Cart</h1>
   <hr>
</div>
<table class="mt-4 pt-3"> 
  <tr>
    <th>Product</th>
    <th>Quanty</th>
    <th>Price</th>
    <th>Tax rate</th>
    <th>Total</th>
</tr>
<tr>
    <td><div class="product-info">
        <img src=<?php echo $product_image; ?> alt=""/>
        <div>
            <h3><?php echo $product_name; ?></h3>
            <h6><?php echo $product_category; ?></h6>
           <p>$<?php echo $product_price; ?></p>
            <br>
            <button class="btn btn-danger" type="button">REMOVE</button>
</div>
</div> 
</td>
<td> 
     <input type="number" class=" from-control-sm"
     min="1" id="qty" value="<?php echo $qty; ?>"></td></div>
    <td><input type="text" class="form-control from-control-sm"
    value="<?php echo $product_price; ?>" id="price"></td>
    <td><input type="text" class="form-control from-control-sm"
    value="<?php echo $tax ?>" id="tax"></td>
    <td><input type="text" name="total" class="form-control from-control-sm"
    id="total"></td>

</td>
</table>
<div class="cart-total">
    <table>
        <tr>
            <td>Total Amount</td>
            <td>$<span id="demo"></span></td>
</tr>
<tr><td>
<a href="https://localhost/rumi/views/checkout.php " class="btn btn-success mt-3">Checkout to Proceed</a>
</tr></td>
</table>
</div>
</section>
<script>
  $(document).ready(function(){
    var price = $('#price').val();
    var qty = $('#qty').val();
    var tax = $('#tax').val();
    var add = qty * price;
    $('#price').val(add);
  var val = price * tax / 100;
  var total = parseInt(add) + parseInt(val);
$('#total').val(total);
$('#demo').html(total);

$('#qty').change(function(){
  var qty = $(this).val();
  var add = qty * price;
  $('#price').val(add);
  var val = $('#price').val() * tax / 100;
  var total= parseInt(add) + parseInt(val);
  $('#total').val(total);
  $('#demo').html('<span class=container text-success>' + total + '</span>');


});
});
</script>

 <section id="cart-add" class="section-p1">
     <div id="coupon">
        <h3>Apply Coupon</h3>
<div>
<input type="text" placeholder="Enter Your Coupon">
 <button class="btn btn-success p-2 "type ="submit">Apply</button>
</div>
 </div>
 </div>
 </section>


<?php
        include("../fragment/footer.php");
        ?>

    