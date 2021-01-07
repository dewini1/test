<!DOCTYPE html>
<html lang="en">
<head>

     <title>DEWINI</title>
    <?php
try
{
     $bdd = new PDO('mysql:host=localhost;dbname=dewini;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<?php

$id = $_GET["id"];

$reponse = $bdd->query("SELECT nom,description2,media2  FROM department where id ='$id'");

while ($data = $reponse->fetch())
{



     
?>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
          <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2><?php  echo $data['nom'] ?></h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>
               </div>
          </div>
     </section>
          <p>
           <?php  echo $data['description2'] ?>
           </p>    
                    <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src=<?php echo '"'.$data['media2'].'"' ; ?> frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
      <?php 

}
                         
                    ?>

                    </div>
</body>
</html>
