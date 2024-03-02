<?php
   include("../fragment/header.php");
   ?>


<section class="register-form my-3 py-3">
<div class="container text-center mt-3">
 <h1 class="form-weight-bold" >Register</h1> 
<hr class="mx-auto">
</div>
    <div class="mx-auto container">
     <form  action="../backend/customer.php" method='POST'>
     <div class="form-group">
     <label>Name</label>
    <input type ="text" class="form-control" id="register-name" name="name" placeholder="Enter your name" required/>
</div>
    <div class="form-group">
     <label>Email</label>
    <input type ="text" class="form-control" id="register-email" name="email" placeholder="Enter your email" required/>
</div>
<div class="form-group">
    <label>Password</label>
    <input type ="password" class="form-control" id="register-password" name="password" placeholder ="Enter your password" required/>
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <input type ="password" class="form-control" id="resister-confirm-password" name="confirmpassword" placeholder ="confirm password" required/>
</div>
<div class="form-group">
    <input type="submit" class="btn" id="register-btn" value="Register"  name="submit">
</div>

<div class="form-group">
    <a href="https://localhost/rumi/views/login.php" class="btn text-secondary">Do you have an account? Login</a>
</div>
</form>
</div>
</section>

<?php
   include("../fragment/footer.php");
   ?>