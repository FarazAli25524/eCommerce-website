<?php

    include("Product.php");
    error_reporting(0);

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buy Now</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
</head>

<body>

  <!-- header -->
  <header class="header">
    <div class="head-top">
      <a href="index.html" class="brand-name">
        Sofa
        <span>House</span>
      </a>
      <div>
        <span class="head-icon">
          <i class="fas fa-search"></i>
        </span>
        <span class="head-icon">
          <i class="fas fa-bell"></i>
        </span>
        <span class="head-icon">
          <i class="fas fa-shopping-bag"></i>
        </span>
        <span class="head-icon">
          <i class="fas fa-user-circle"></i>
        </span>
      </div>
    </div>

    <div class="head-body container">
      <div class="head-body-content">
        <h1 class="head-title text-field"> Buy Now
        </h1>

        <div class="form">
         <form>

          <input type="text" placeholder="Firstname" name="firstname">
          <input type="text" placeholder="Lastname" name="lastname">
          <input type="email" placeholder="xyz@email.com" name="email">
          <input type="text" placeholder="Address here" name="Address">
          <br>
          <input type="submit" value="Order Now" name="submit" style="background-color: black; color: white; width: 120px;">
         
          </form>
        </div>
      </div>

      <div class="head-body-img">
        <img src="assets/round-chair.png" alt="header image">
        <br>
        <h3>Price &nbsp; <span style="color: red;">$350</span></h3>
      </div>
    </div>
  </header>
  <!-- end of header -->

  <div class="container">
    <h3>Description</h3>
    <hr>
    <br>
    <ul>
      <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. iure?</li>
    </ul>
    <br>
    <ul>
      <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque libero perspiciatis nobis! Dolores, consequatur repudiandae dignissimos perferendis quasi porro assumenda esse totam corrupti magnam temporibus dolor repellat vel voluptas iure?</li>
    </ul>
    <br>
    <ul>
      <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque libero perspiciatis nobis! Dolores, consequatur repudiandae dignissimos perferendis quasi porro assumenda esse totam corrupti magnam temporibus dolor repellat vel voluptas iure? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos labore aperiam eaque deleniti reiciendis, hic enim eveniet alias ipsum. Ipsam quae provident, non molestias unde ab laborum ullam fugit odit!</li>
    </ul>
  </div>

  <!-- footer -->
  <footer class="footer container">
    <div class="footer-item">
      <h2 class="brand-name">
        Sofa <span>House</span>
      </h2>
      <p>social media accounts</p>
      <ul class="footer-icons">
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-google-plus-g"></i></a>
        </li>
      </ul>
    </div>

    <div class="footer-item">
      <h3>links</h3>
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">download</a></li>
        <li><a href="#">pricing</a></li>
        <li><a href="#">about</a></li>
      </ul>
    </div>

    <div class="footer-item">
      <h3>products</h3>
      <ul>
        <li><a href="#">chair</a></li>
        <li><a href="#">sofa</a></li>
        <li><a href="#">pillow</a></li>
        <li><a href="#">cushion</a></li>
      </ul>
    </div>

    <div class="footer-item">
      <h3>support</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">how it works</a></li>
        <li><a href="#">features</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </div>
  </footer>
  <!-- end of footer -->
</body>

</html>

<?php

    $fn=$_GET['firstname'];
    $ln=$_GET['lastname'];
    $em=$_GET['email'];
    $add=$_GET['Address'];

    echo "$fn";
    echo "$ln";
    echo "$em";
    echo "$add";


   $query="INSERT INTO CUSTOMER values ('$fn','$ln','$em','$add')";
   $data=mysqli_query($conn,$query);

   if($data){
       echo "Order Placed";
   }else{
       echo "Invalid Data";
   }

?>