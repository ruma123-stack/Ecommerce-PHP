<?php
   include("../fragment/header.php");
   ?>
   <?php
include("../backend/connection.php");
?>
<?php
session_start();
$message='';
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $user_password =$_POST['user_password'];
$_SESSION['user'] = $username;
    $query = "SELECT * FROM admin_login WHERE username ='$username' AND user_password ='$user_password'";
    $result = $conn->query($query);
    if($result->num_rows >0){
        header("location:https://localhost/rumi/views/insert-product.php");

    }else{
        $message .="Login Failed";
    }
}
?>



<section class="login-form my-3 py-3">
<div class="container text-center mt-3">
 <h1 class="form-weight-bold ">Login</h1> 
 <h3 style="margin-left:15px; color:red"><?php echo $message;?></h3>

<hr class="mx-auto">
</div>
    <div class="mx-auto container">
     <form class="container" method="POST">
       
    <div class="form-group">
     <label>UserName</label>
    <input type ="text" class="form-control" id="username" name="username" placeholder="Enter your UserName">
</div>
<div class="form-group">
    <label>Password</label>
    <input type ="password" class="form-control" id="password" name="user_password" placeholder ="Enter your Password">
</div>
<div class="form-group">
    <input type="submit" class="btn" id="login-btn" value="Login" name="submit">
</div>

<div class="form-group">
    <a href="https://localhost/rumi/views/register.php" class="btn text-secondary">Dont have account? Register</a>
</div>
</form>
</div>
</section>

<?php
   include("../fragment/footer.php");
   ?>