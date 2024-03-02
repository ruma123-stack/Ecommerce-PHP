<?php
   include("../backend/product.php");
   ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLOTHING BRAND</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/89f77e38cb.js" crossorigin="anonymous"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <link rel="stylesheet" href="ecommerce.css"/>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-2" style="background-color: #003153">
   <div class="container p-0 m-0 ">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="https://localhost/rumi/views/index.php" target="blank">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="https://localhost/rumi/views/dashboard.php" target="blank">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="https://localhost/rumi/views/login.php ?action=logout" target="blank">Logout</a>
        </li>  
    </div>
  </div>
</nav>


<div class="container mt-5">

        <div class="row">
          <a href="https://localhost/rumi/views/insert-product.php" class="btn btn-success p-2 m-4">Add item</a>
            <table class="table text-center mt-1 table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Product Category</th>
      <th scope="col">Product Image</th>
      <th scope="col">Price</th>
      <th scope="col">Tax</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <form method="POST" enctype="multipart/form-data">
  <?php foreach($rows as $data){
    echo "<tr>";
    echo"<td>".$data['product_id']."</td>";
    echo"<td>".$data['product_name']."</td>";
    echo"<td>".$data['qty']."</td>";
    echo"<td>".$data['product_category']."</td>";
    echo"<td>".$data['product_image']."</td>";
    echo"<td>".$data['product_price']."</td>";
    echo"<td>".$data['tax']."</td>";
     echo"<td>
</form>

     <form method='POST' action='../backend/delete.php'>
     <input type='hidden' name='delete' value='".$data["product_id"]."'/>
     <button type='submit' class='btn btn-danger'>Delete</button>
</form>

<form method='GET' action='../views/update.php'>
     <input type='hidden' name='edit' value='".$data["product_id"]."'/>
     <button type='submit' class='btn btn-info m-4'>Edit</button>
   </form>
    </td>";
    echo "</tr>";
  }?>
  </tbody>
</table>
</div>
</div>
</div>
<?php
        include("../fragment/footer.php");
        ?>