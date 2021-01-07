<?php
// Initialize the session

 
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
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
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
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>