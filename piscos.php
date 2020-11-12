<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BSALE TEST</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="styles.css?v3.2">
</head>

<body>
  
  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Navigation -->
    <nav class="nav-main">
      <!-- Brand -->
      <a href="index.php">
      <img src="img/brand.jpg" alt="Logo" class="nav-brand"> BSALE
      </a>

      <!-- Left Nav -->
      <ul class="nav-menu">
        <li>
          <a href="piscos.php">Piscos</a>
        </li>
        <li>
          <a href="bebidas.php">Bebidas</a>
        </li>
        <li>
          <a href="vodkas.php">Vodkas</a>
        </li>
        
      </ul>

      <!-- Right Nav -->
      <ul class="nav-menu-right">
        <li>
          <a href="#">
           
<form class="form" action="index.php" method="POST">
      <input id="buscador" type="search" name="buscar" placeholder="Buscar" aria-label="Search">
       <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
          </a>

          
        </li>
      </ul>
    </nav>
    <hr>


    <!-- NEWS CARDS -->

    <div class="category">
        Piscos
    </div>

    <div class="news-cards">
    <?php

include 'cat_piscos.php';

while ($producto = mysqli_fetch_array($sql_query)){?>
     
    <div class="card">

    <div class="img-name">
        <img src="productos/<?php echo $producto['url_image']; ?>" alt="" />
        <h3>  <?php echo $producto['name']; ?></h3>
    </div>
     
        <div class="price-cart">
        <p> $ <?php echo $producto['price']; ?></p>
        <a href="#"><i class="fas fa-shopping-cart"></i></i></a>
        </div>


      </div>
      <?php }?>
    </div>

  
   
    </div>


  
  </div>



  <!-- Footer -->
  <footer class="footer">
    <h3>Nicolás Carrasco</h3>
  </footer>


  <script src="main.js"></script>
</body>

</html>