<!DOCTYPE html>
<html lang="en">
<head>

 

     <title>DEWINI</title>

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


<!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">Dewini</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#blog" class="smoothScroll">Blog</a></li>
                         <li><a href="#work" class="smoothScroll">Our Work</a></li>
                         <li><a href="#contact" class="smoothScroll">Contacts</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a></li>
                    </ul>
               </div>

          </div>
     </section>
</br>
</br>





     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">

                              <h2>Les Maladies</h2>

                              <span class="line-bar">...</span>
                         </div>
                    </div>
                    



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



$reponse = $bdd->query("SELECT id,nom,description,media  FROM department where idCategorie ='$id'");

while ($data = $reponse->fetch())
{

     
?>
                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href=<?php echo '"'.$data['nom'].'.php"' ; ?> ><img src=<?php echo '"'.$data['media'].'"' ; ?> class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <h3><a href="blog-detail.php"><?php echo $data['nom']  ?><br /></a></h3>
                                   <p><?php echo $data['description']  ?>.</p>
                                   <a href=<?php echo '"decMaladie.php?id='.$data['id'].'"' ; ?> class="btn section-btn">Read article</a>
                              </div>
                         </div>
                    </div> 
                    <?php 

}
                     
                    ?>
                    

                    

                    
                    
               </div>
          </div>
     </section>
          <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>