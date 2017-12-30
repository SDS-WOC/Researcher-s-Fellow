<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="sign_up.css"> 
</head>
<body>
      	<?php
     $mailerr=$mail="";
         if ($_SERVER["REQUEST_METHOD"] === "POST"){
         if (empty($_POST["mail"]))
            $mailerr = "This is required";
            else {
              if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)&& preg_match('/@iitr.ac.in/',$_POST["mail"])){
                $mail=$_POST["mail"];
              }
              else $mailerr="Enter a valid mail";
            }
    }
     ?>
     <div id="register">
      <h1>Register</h1>
   	<form id="form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
   		Enter your iitr mail-id:<br>
        <input type="text" name="mail" class="input" placeholder="Email"><br><br>
        <input type="submit" value="Sign Up" name="submit">
   	</form>
    </div>
    <?php
        if (isset($_POST["submit"])) {
          if(!empty($mailerr))
           echo  "<script type='text/javascript'>alert('Enter a valid email address');</script>";
        }
        if(!empty($mail)){
          include 'mail.php';  
        }
        
        
     ?>
   

   	
</body>
</html>
