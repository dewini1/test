<?php
// Initialize the session
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Check if the user is already logged in, if yes then redirect him to welcome page



 
// Include config file
require_once "config.php";

$pdo = config::getConnexion();
 
// Define variables and initialize with empty values
$prenom = $password = "";


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if prenom is empty
    if(empty(trim($_POST["prenom"]))){
       
        $prenom_err = "Please enter prenom.";
    } else{
        
       

    
    
 
    
  
        // Prepare a select statement
        $sql = "SELECT id, Prenom,medecin FROM users WHERE Prenom = :prenom";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":prenom", $param_prenom, PDO::PARAM_STR);
            
            // Set parameters
            $param_prenom = trim($_POST["prenom"]);
         
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){

                // Check if prenom exists, if yes then verify password
                if($stmt->rowCount() == 1){

                    if($row = $stmt->fetch()){
                        echo $row ["medecin"];
                        $id = $row["id"];
                        $prenom = $row["Prenom"];
                        
                        $medecin = $row ["medecin"];
                     
                        if(is_null($medecin)){
                            
                          // echo $prenom;
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["prenom"] = $prenom;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");

                        }else
                        {
                         session_start();
                              echo $prenom;
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["Prenom"] = $prenom;                            
                            
                            // Redirect user to welcome page
                            header("location: affichage.php");
                        
                       
                    }
                } else{
                    // Display an error message if prenom doesn't exist
                    $prenom_err = "No account found with that prenom.";
                }
            } 

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
}

?>


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

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
 
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


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
                    <a href="index.html" class="navbar-brand">Dewini</a>
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
                         <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Join</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1><?php echo 'Votre santé ,Notre priorité'?>.</h1>
                              
                              <span>
                                   CALL US (+216)54423277
                                   <small>For any question</small>
                              </span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="images/DOCTOR Interview Questions And Answers (How to PASS a Junior Doctor Interview!).mp4" frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-6">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Let us introduce</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <p>Le concept est de créer une plateforme qui a pour but de faciliter la rencontre entre le patient et le docteur ( prendre un rendez-vous a la base ) . Quand quelqu'un visite la plateforme il trouvera des médecins de plusieurs spécialités avec leurs localisation , et une agenda des rendez-vous et avec un certain système de rating </p>
                            
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="about-info skill-thumb">

                              

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="about-image">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Our Blog</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>


 <?php
try
{
     $bdd = new PDO('mysql:host=localhost;dbname=dewini;charset=utf8', 'root', ''); //connection bd pdo
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage()); //en cas d erreur 
}
?>

<?php

$reponse = $bdd->query('SELECT id,nom,description,media  FROM categories');  //requete SQL

while ($data = $reponse->fetch()) //lire  les donnees 
{



     
?>
   
                    <div class="col-md-6 col-sm-6">
                         <!-- BLOG THUMB -->
                         <div class="media blog-thumb">
                              <div class="media-object media-left">
                                   <a href=<?php echo '"'.$data['nom'].'.php?id="'.$data['id'].'"' ; ?> ><img src=<?php echo '"'.$data['media'].'"' ; ?> class="img-responsive" alt=""></a>
                              </div>
                              <div class="media-body blog-info">
                                   <h3><a href=<?php echo '"'.$data['nom'].'.php?id='.$data['id'].'"' ; ?>><?php echo $data['nom']  ?><br /></a></h3>
                                   <p><?php echo $data['description']  ?>.</p>
                                   <a href=<?php echo '"'.$data['nom'].'.php?id='.$data['id'].'"' ; ?> class="btn section-btn">Read article</a>
                              </div>
                         </div>
                    </div> 
                    <?php 

}
                         
                    ?>
                    
                    
                  
                    
               </div>
          </div>
     </section>


     <!-- WORK -->
     <section id="work" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Prise de rendez vous</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/1.jpg" class="image-popup">
                                   <img src="images/1.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3><a href="views/addRdvWind.php">Prise&amp;de&amp;Rendez&amp;vous</h3>
                                        
                                   </div>
                              </a>
                         </div>
                    </div>

                   

               </div>
          </div>
     </section>

     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Contact us</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                        
                         <!-- CONTACT FORM HERE -->
                         <form id="contact-form" role="form" action="#" method="post">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" placeholder="Full Name" id="cf-name" name="cf-name" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" placeholder="Your Email" id="cf-email" name="cf-email" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number" name="cf-number" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <select class="form-control" id="cf-budgets" name="cf-budgets">
                                        <option>Budget Level</option>
                                        <option>$500 to $1,000</option>
                                        <option>$1,000 to $2,200</option>
                                        <option>$2,200 to $4,500</option>
                                        <option>$4,500 to $7,500</option>
                                        <option>$7,500 to $12,000</option>
                                        <option>$12,000 or more</option>
                                   </select>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf-message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="google-map">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>Dewini</h2>
                              <p>Votre santé notre priorité</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Company</h2>
                              <ul class="footer-link">
                                   <li><a href="#">About Us</a></li>
                                   <li><a href="#">Join our team</a></li>
                                   <li><a href="#">Read Blog</a></li>
                                   <li><a href="#">Press</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Services</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Pricing</a></li>
                                   <li><a href="#">Documentation</a></li>
                                   <li><a href="#">Support</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Find us</h2>
                              <p>Tunisia ,<br> Tunis</p>
                         </div>
                    </div>                    

                    <div class="col-md-12 col-sm-12">
                         <div class="footer-bottom">
                              <div class="col-md-6 col-sm-7">
                                   <div class="phone-contact"> 
                                        <p>Call us <span>(+216) 54 423 277</span></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                 <form   method="get"   accept-charset="utf-8" autocomplete="on"  action="views/ajoutPatient.php">
  
  <div role="main" >
    <ul class="form-section page-section">
      <li  class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Left">
           
            <div class="header-text httal htvam">
              <h1 >
                
                Patient
              </h1>
            </div>
          </div>
        </div>
      </li>
      <li  data-type="control_fullname" >
        <label class="form-label form-label-left form-label-auto">
          Nom <br>
        </label>
        <div>
          <div data-wrapper-react="true">
         
              <input name="Prénom" type="text"  />
              <label> 
    <br>Prénom   <br></label>
         
            
              <input name="Nom_de_famille" type="text" />
              <label> 
      Nom de famille </label>
         
          </div>
        </div>
      </li>
      <li data-type="control_email">
        <label > 
    Email </label>
        <div  class="form-input">
          <span >
            <input   name="Email"  size="30" value="" data-component="email"/>
            <label> 
      exemple@exemple.com </label>
          </span>
        </div>
      </li>
     
      <li class="form-line" data-type="control_divider" id="id_22">
        <div id="cid_22" class="form-input-wide">
          <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_43">
        <label class="form-label form-label-left form-label-auto" id="label_43" for="input_43_addr_line1"> 
    Adresse </label>
        <div id="cid_43" class="form-input">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_43_addr_line1" name="Numéro_de_rue" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_43 sublabel_43_addr_line1" required="" size="1" tabindex="25" />
                  <label class="form-sub-label" for="input_43_addr_line1" id="sublabel_43_addr_line1" style="min-height:13px" aria-hidden="false"> 
        Numéro et rue </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_43_addr_line2" name="Complément_dadresse" class="form-textbox form-address-line" value="" data-component="address_line_2" aria-labelledby="label_43 sublabel_43_addr_line2" size="1" tabindex="25" />
                  <label class="form-sub-label" for="input_43_addr_line2" id="sublabel_43_addr_line2" style="min-height:13px" aria-hidden="false"> 
        Complément d&#39;adresse </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_43_city" name="Ville" class="form-textbox form-address-city" value="" data-component="city" aria-labelledby="label_43 sublabel_43_city" required="" size="1" tabindex="25" />
                  <label class="form-sub-label" for="input_43_city" id="sublabel_43_city" style="min-height:13px" aria-hidden="false"> 
        Ville </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_43_state" name="Région" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_43 sublabel_43_state" required="" size="1" tabindex="25" />
                  <label class="form-sub-label" for="input_43_state" id="sublabel_43_state" style="min-height:13px" aria-hidden="false"> 
        État/Région </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_43_postal" name="Code_Postal" class="form-textbox form-address-postal" value="" data-component="zip" aria-labelledby="label_43 sublabel_43_postal" required="" size="1" tabindex="25" />
                  <label class="form-sub-label" for="input_43_postal" id="sublabel_43_postal" style="min-height:13px" aria-hidden="false"> 
        Code Postal </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_44">
        
        <div id="cid_44" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
              <input type="tel" id="input_44_area" name="Indicatif_régional" class="form-textbox" value="" data-component="areaCode" aria-labelledby="label_44 sublabel_44_area" size="1" tabindex="25" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_44_area" id="sublabel_44_area" style="min-height:13px" aria-hidden="false"> 
      Indicatif régional </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="input_44_phone" name="Numéro_de_téléphone" class="form-textbox" value="" data-component="phone" aria-labelledby="label_44 sublabel_44_phone" size="1" tabindex="25" />
              <label class="form-sub-label" for="input_44_phone" id="sublabel_44_phone" style="min-height:13px" aria-hidden="false"> 
      Numéro de téléphone </label>
            </span>
          </div>
        </div>
      </li>
      
      <li class="form-line" data-type="control_button" id="id_20">
        <div id="cid_20" class="form-input-wide">
          <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_20" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Créer votre compte
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
 
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="203417693393562" />
 
  <div class="formFooter f6">
    <div class="formFooter-wrapper formFooter-leftSide">
      &nbsp;</div>
    <div class="formFooter-wrapper formFooter-rightSide">
      &nbsp;</div>
  </div>
</form>
                                             </div>

                                             <div role="tabpanel" class="tab-pane fade in" id="sign_in">


 


    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($prenom_err)) ? 'has-error' : ''; ?>">
                <label>prenom</label>
                <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>">
                
            </div>    
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
           
        </form>
    </div>



                                                  
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>