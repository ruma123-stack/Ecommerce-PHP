<?php
   include("../fragment/header.php");
   ?>

<section class="my-3 py-3">
<div class="row container-fluid mx-auto">
    <div class="text-center mt-3 pt-3 col-lg-6 col-md-12 col-sm-12">
        <h3 class="font-weight-bold">Account Info</h3>
        <hr class="mx-auto">
        <div class="account-info">
            <p>Name<span></span></p>
            <p>Email<span>@gmail.com</span></p>
            <p><a href="https://localhost/rumi/views/order.php" id="order-btn">Order Now</a></p>
            <p><a href="https://localhost/rumi/views/login.php" id="logoin-btn">Login</a></p>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12">
    <form id="account-form">
        <h3>Change Password</h3>
        <hr class="mx-auto">
        <div class="form-group">
            <label>Password</label>
            <input type="Password" class="form-control" id="account-password" name="Password" placeholder="password" required/>
</div>
<div class="form-group">
            <label>Confirm Password</label>
            <input type="Password" class="form-control" id="account-password-confirm" name="confirmPassword" placeholder="password" required/>
</div>
<div class="form-group">
    <input type="submit" value="Change Password" class="btn btn-primary m-3 p-2" id="change-pass-btn">
</div>
</form>
</div>
</div>


</section>




<?php
        include("../fragment/footer.php");
        ?>