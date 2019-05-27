<!DOCTYPE html>
<html lang="ru">  
<head> 
  <title> MAGICCARD </title>  
    <meta charset="UTF-8"> 




    <?php 
    require_once '../bogdan/connection.php';
    ?>





    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href=" css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!-- icon -->
    <link rel="stylesheet" href="css/main.css">
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
   <body>
    <!-- start home section-->
<div class="magazines">
 
  <!-- start nav-->
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="main.html">главная</a></li>
      <li class="nav-item"><a class="nav-link" href="#contact">контакты</a></li>
      </ul>
   </div> 
  </nav>

<div class="limited">
  <h3 class="heading">Магазин</h3>
  <div class="row">

<?php

          $sql = mysqli_query($db,'SELECT `name`, `opisanie`, `price`, `proizv`, `img` FROM  `tov`');
          while ($nopp =mysqli_fetch_array($sql)):?>
  <div class="col-lg-3"> 
    
      <div class="card">
        <!-- <img src="img/NOC.jpg" alt="NOC"> -->


        <img src="<?php echo "{$nopp['img']}";?>">


      <p>Название:  <?php echo "{$nopp['name']}"; ?></p>
      <p>описание:  <?php echo "{$nopp['opisanie']}"; ?></p>
      <p>Производитель:  <?php echo "{$nopp['proizv']}"; ?></p>
      <p>цена:  <?php echo "{$nopp['price']}"; ?>Гривнен</p>
      <button class="btnby"> Купить</button>
      </div>
     <!--  конец кард -->



  </div> <!-- Konec kola -->
  <?php
      endwhile;
      ?>
</div> <!-- конец роу -->
</div>


</div>


<div id="contact">
<footer>
  <div class="col-12 text-center">

    <h3 class="heading">КОНТАКТЫ</h3>
    
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6 text-center">

      <p>Наши номера: +38(066)5555555 /
      +38(066)6666666<br> 
      Наш адрес: Ул. Разбитых фонарей 5<br>
</p>
     
     <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
    
     <a href="" target="_blank"><i class="fab fa-facebook"></i></a> 
    
    </div>
    
  </div>
  <p>MAGICCARD 2019</p>
</footer>
</div>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>