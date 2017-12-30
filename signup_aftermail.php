<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="signup_aftermail.css">
</head>
<body>
  <h1>SIGN UP</h1>
  <?php
   include 'conn.php';
            /*$table="create table prof_data(name varchar(60),mail varchar(60) primary key,password varchar(60),department varchar(60));";
            $table_created=$conn->query($table);*/
   $nameerr=$passowrderr=$repassworderr=$name=$password=$departmenterr=$department=$mail=$mailerr=$enqr="";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["name"]))
            $nameerr="Name is required";
        else $name=$_POST["name"];
        if (empty($_POST["department"])) 
            $departmenterr="Department is required";
         else
            $department=$_POST["department"];
        
        if (empty($_POST["password"])||empty($_POST["re-password"])) {
            $passworderr="Password is required";
            $repassworderr="Re Type the password for confirmation";
        } else {
            if ($_POST["password"]!==$_POST["re-password"])
                $repassworderr="Password you entered do not match";
                 else 
                $password=$_POST["password"];}
        if(empty($_POST["mail"])){$mailerr="Email is required";}
        else{
        if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)&& preg_match('/@iitr.ac.in/',$_POST["mail"])){
            $enqr=$_POST["mail"];
            $inqur="select * from prof_data where mail='$enqr'";
            $var=$conn->query($inqur);
             if($var->num_rows>0)
             $mailerr="The username already exists";
          else $mail=$_POST["mail"];
        }
        else $mailerr="Enter a valid Email address";
        }
    } 
    
   ?>
   <div id="signup">
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    NAME: <input type="text" name="name" placeholder="Name"><br>
    IITR Email-ID: <input type="text" name="mail" placeholder="E-mail"><br>
    DEPARTMENT:<input list="departments" name="department" placeholder="Department" id="dept">
    <datalist id="departments">
        <option value="Architecture and Planning">
        <option value="Applied Science and Engineering">
        <option value="Biotechnology">
        <option value="Chemical Engineering">
        <option value="Chemistry">
        <option value="Civil Engineering">
        <option value="Computer Science and Engineering">
        <option value="Earthquake Engineering">
        <option value="Earth Sciences">
        <option value="Electrical Engineering">
        <option value="Electronics and Communication Engineering">
        <option value="Humanities and Social Sciences">
        <option value="Hydrology">
        <option value="Management Studies">
        <option value="Mathematics">
        <option value="Mechanical and Industrial Engineering">
        <option value="Metallurgical and Materials Engineering">
        <option value="Paper Technology">
        <option value="Polymer and Process Engineering">
        <option value="Physics">
        <option value="Water Resources Development and Management">
    </datalist>
    <br>
    PASSWORD: <input type="password" name="password" placeholder="Password"><br>
    RE-CONFIRM PASSWORD: <input type="password" name="re-password" placeholder="Retype Password"><br>
    <input type="submit" value="Sign Up" name="submit">
  </form>
</div>
   <?php if(!empty($name) && !empty($mail) && !empty($department) && !empty($password))
        {   echo  "<script type='text/javascript'>alert('Registered Successfully');</script>";

          $sql="insert into prof_data values ('$name','$mail','$password','$department')";
        if ($conn->query($sql) === TRUE) {
            } }
                           
    else if(!empty($nameerr) || !empty($mailerr) || !empty($departmenterr) || !empty($repassworderr))
        echo  "<script type='text/javascript'>alert('Can not Sign Up:'+' '+'$nameerr'+'. '+'$mailerr'+'. '+'$passworderr'+'. '+'$repassworderr');</script>";
                      ?>
     
  
</body>
</html>