<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = '0- Waste';
?>
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">


<!-- Bootstrap core CSS -->
          <link rel="stylesheet" href="/css/bootstrap-grid.css" />
          <link rel="stylesheet" href="/css/bootstrap.min.css" />



 <?= $this->Html->charset() ?>

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


<head>




 <!-- Navigation -->
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

             <div class="container">
               <a class="navbar-brand" href="#">0- Waste</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                   <li class="nav-item active">
                     <a class="nav-link" href="/blogs/home">Home
                       <span class="sr-only">(current)</span>
                     </a>
                   </li>
                   <li class="nav-item active">
                     <a class="nav-link" href="#"><?php echo __('Über Uns')?></a>
                   </li>
                   <li class="nav-item active">
                     <a class="nav-link" href="#"><?php echo __('Kontakt')?></a>
                   </li>
         
          <!-- <?php
session_start();
    if(!isset($_SESSION['username']))
    {
        echo '<li class="nav-item active"><a class="nav-link" href="/users/login">Login</a></li>';
    }
    else {
        echo '<li class="nav-item active"><a class="nav-link" href="/blogs/logout">Logout</a></li>'; }
        

?>   -->



                      <li class="nav-item active"><a class="nav-link" href="/users/login">Login</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="/blogs/logout">Logout</a>
                    </li> 
                 </ul>
               </div>
             </div>
           </nav>








</head>











</br>
</br>
</br>




    

    <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
        </div>
    </main>
    



    
<!DOCTYPE html>
<html lang="en">
  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    />
  
 
    <div class="share-btn-container">
      <a href="#" class="facebook-btn">
        <i class="fab fa-facebook"></i>
      </a>

      <a href="#" class="twitter-btn">
        <i class="fab fa-twitter"></i>
      </a>

      <a href="#" class="pinterest-btn">
        <i class="fab fa-pinterest"></i>
      </a>

      <!-- <a href="#" class="linkedin-btn">
        <i class="fab fa-linkedin"></i>
      </a> -->

      <a href="#" class="whatsapp-btn">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>

    <div class="content">
      

    <img
        class="pinterest-img"
        src=""
        alt=""
      />
    </div>

    <script src="/js/main.js"></script>
 
   

</html>
