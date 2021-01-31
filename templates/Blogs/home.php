<!DOCTYPE html>

<html lang="en">

<head>




      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Heroic Features - Start Bootstrap Template</title>

        <!-- Bootstrap core JavaScript -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>

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


    </head>
















<body>


<meta property="og:title" content="0- Waste">
<meta property="og:site_name" content="">
<meta property="og:url" content="">
<meta property="og:description" content="Der Newcomer in Sachen Backrezepte">
<meta property="og:type" content="article">
<meta property="og:image" content="https://www.moneycrashers.com/wp-content/uploads/2011/01/zero-waste-food-groceries-1068x713.jpg">




  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3"><?php echo __("Werden Sie zusammen mit uns etwas nachaltiger!")?></h1>
      <p class="lead"><?php echo __("Werden Sie ein Teil unserer 0- Waste Community und verwenden Sie auch noch übrig gebliebene Zutaten und Lebensmittel bevor Sie sie vergwerfen!")?></p>
      <a href="/articles/index" class="btn btn-primary btn-lg"><?php echo __('Rezeptliste')?></a>
      <!-- <a href="/users" class="btn btn-primary btn-lg"><?php echo __('Nutzerverwaltung')?></a> -->

 








    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://www.tegut.com/fileadmin/tegut_upload/Rezepte/Bananenkuchen-mit-Schokoraspeln-1920x1080px.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo __("Bananenkuchen")?></h4>
            <p class="card-text"><?php echo __("Zurzeit sehr beliebt: Ein leckerer Bananenkuchen mit Schokoglausur.")?></p>
          </div>
          <div class="card-footer">
            <a href="/articles/view/Bananenkuchen" class="btn btn-primary"><?php echo __("Ansehen")?></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://i.pinimg.com/originals/3a/24/4f/3a244f7d6a2547c96bada20d345744dc.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo __("Zimtkuchen")?></h4>
            <p class="card-text"><?php echo __("Ein Zimtkuchen nach alter Art mit saftigen Rum-Rosinen und gemahlenen Mandeln, auf Wunsch sogar mit Rum-Zuckerguss.")?></p>
          </div>
          <div class="card-footer">
            <a href="/articles/view/Zimtkuchen" class="btn btn-primary"><?php echo __("Ansehen")?></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://elavegan.com/wp-content/uploads/2020/10/horizontal-shot-of-vegan-chocolate-pudding-in-two-jars.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo __("Schokopudding")?></h4>
            <p class="card-text"><?php echo __("Der feine Schokoladen-Pudding schmeckt außergewöhnlich schokoladig durch den hochwertigen Kakao und feine Schokoladenstücke.")?></p>
          </div>
          <div class="card-footer">
            <a href="/articles/view/Schokopudding" class="btn btn-primary"><?php echo __("Ansehen")?></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://www.teahub.io/photos/full/171-1719161_vanillepudding-recept.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo __("Vanillepudding")?></h4>
            <p class="card-text"><?php echo __("Der Original Pudding Vanille-Geschmack ist die älteste und beliebteste Geschmacksrichtung der Kochpuddinge.")?></p>
          </div>
          <div class="card-footer">
            <a href="/articles/view/Vanillepudding" class="btn btn-primary"><?php echo __("Ansehen")?></a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
<footer>


<!-- <?php

$filename = "count.txt";// the text file to store count
// Open the file foe reading current count
$fp = fopen($filename, 'r');

//Get exiting count
$count = fread($fp, filesize($filename));

//close file
fclose($fp);

//Add 1 to the existing count
$count = $count +1;

//Display the number of hits
echo "<div style='text-align:right'>";
echo  "<p>Bisherige Aufrufe insgesamt:" . $count. "</p>" ;


//Reopen to modify content
$fp = fopen($filename, 'w');

//write the new count to file
fwrite($fp, $count);

//close file
fclose($fp);

?> -->


<?php

echo $this->Form->create(NULL,array('url'=>'/blogs/home'));
           echo $this->Form->radio("locale",
              [
                 ['value'=>'en_US','text'=>'English'],
                 ['value'=>'de_DE','text'=>'German'],

              ]
           );
           echo $this->Form->button('Sprache ändern');

           echo $this->Form->end();

?>




</footer>












</html>

