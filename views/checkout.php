<?php
   include("../fragment/header.php");
   ?>


<section class="my-3 py-3">
<div class="container mt-2 pt-2">
 <h1 class="text-center form-weight-bold" >Check Out</h1> 
 <hr class="mx-auto">

<form method="post" action="../backend/register.php">
<div class="row">
<div class="col-lg">   
<label for="FName" class="form-label">First Name</label>
<input type="text"  name="FName" class="form-control" placeholder="Enter your First name">
  </div>
  <div class="col-lg">
  <label for="LName" class="form-label">Last Name</label>
    <input type="text"  name="LName" class="form-control" placeholder="Enter your Last name">
  </div>
  <br>
  <div class="mb-4">
  <label for="Address" class="form-label">Address</label>
  <textarea class="form-control" name="Address" id="Address" cols="5" rows="5">Delivery address</textarea>
</div>
<div class="mb-4">
  <label for="DOB" class="form-label">Date of Birth</label>
  <input type="date" name ="DOB">
</div>
  <div class="mb-4">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <a href="https://localhost/rumi/views/payment.php " class="btn btn-success mt-3">Place Order</a>
  
</div>
</div>
</form>
</div>
</section>
<?php
   include("../fragment/footer.php");
   ?>   
       