<?php 
include("../backend/connection.php");
?>



<?php
   include("../fragment/header.php");
   ?>

   <!-- <---carousel--->
<div class="py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/top2.jpg." class="d-block w-100" alt="..."style=" height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5 class ="text-uppercase text-danger fs-bold ">shop with best deals!</h5>
        <p class="text-danger" >Discounts upto 20%..</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/top1.jpg" class="d-block w-100" alt="..." style="height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>CHOOSE YOUR BEST OUT FIT</h5>
        <p>SEARCH FOR LATEST TRENDS.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/top.webp" class="d-block w-100" alt="..." style="height:500px">
      <div class="carousel-caption d-none d-md-block">
        <h5 class ="text-dark">CHECK NEW PRODUCTS </h5>
        <p class ="text-dark">SHOP WITH EASE@</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
</div>
</div>

<!-- <---brands--->
<section id="brand" class="container">
    <div class="row">
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../images/brand1.jpg"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../images/brand2.webp"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../images/brand3.png"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../images/brand4.png"/>
</div>
</section>


<!-- <---latest--->
<section id="latest" class="my-4 pb-4">
            <div class="container mt-4 py-4">
            <h2 class="text-center fs-2 text-danger " >Latest Products</h2>
            <hr>
            <p class="text-center"> Here you can check our Latest products</p>
          
                <div class="row">
                     <?php
                    $query = "SELECT * FROM products";
                    $res = $conn->query($query);
                    if($res->num_rows > 0)
                    {
                        while($row = $res->fetch_assoc()){
                            $product_name = $row['product_name'];
                            $qty = $row['qty'];
                        $product_category = $row['product_category'];
                    $product_image = $row['product_image'];   
                $product_price = $row['product_price']; ?> 

                    <div class="item col-lg-3 col-md-4 col-sm-12">
                        <div class="card">
                            <img src="<?php echo $product_image;?>"   alt="..." style="height:250px">
                            <div class="card-body text-center">
                                <h5 class="card-title"> <?php echo $product_name; ?></h5>
                                <h4><?php echo $product_category; ?></h4>
                                <div class="star p-1 text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                  </div>
                                    <h3>$ <?php echo $product_price; ?></h3>
                                    <a href="<?php echo "https://localhost/rumi/views/single-product.php?product_id=". $row['product_id']; ?>" class="btn btn-danger">BUY NOW</a>                    
                                </div>
                            </div>
                        </div>
                           <?php } } ?>
                        </div>
                        </div>
  
                  </section>
                
                            
                            <!-- <---pagination--->
<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>

    <nav class="navbar navbar-danger bg-danger p-4">
  <div class="container-fluid">
    <a class="navbar-brand text-light">Sign Up For Newsletters <h6>Get E-mail Updates about our latest Shops!</h6></a>
   
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Your email address" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">SignUp</button>
    </form>
  </div>
</nav>
        <?php
        include("../fragment/footer.php");
        ?>
       

   