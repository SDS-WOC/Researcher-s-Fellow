<!DOCTYPE html>
<html>
<head>
  <title>Projects</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 <h1>Projects</h1>
  <?php 
     include 'conn.php';
     //$table1="create table nppadhy_project (projectname varchar(255),projectdesc varchar(255))";
     //$instable1=$conn->query($table1);
     //$table2="create table nppadhy_intern  (projectname varchar(255),interndesc varchar(255))";
     //$instable2=$conn->query($table2);
     $passs=$email="";
     $projname=$aboutproj=$aboutintern="";
     if ($_SERVER["REQUEST_METHOD"] === "POST"){
     if(isset($_POST["login"])){
     if(!empty($_POST["email"])&&filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)&& preg_match('/@iitr.ac.in/',$_POST["email"]))
        $email=$_POST["email"];
    if(!empty($email))
           { $check="select password from prof_data where mail='$email'";
             $result=$conn->query($check);
             $check_result=$result->fetch_assoc();
             if ($check_result["password"]==$_POST["pass"])
               $passs="Correct";
             }
           if($email!=$_POST["email"]||$passs!=="Correct"){
   echo "<script>alert('Incorrect Email or Password');</script>";
              }
              if($email==$_POST["email"]&&$passs==="Correct")
                include 'afterlogin.php';    
            }
            if (isset($_POST["post"])) {
                 $projname=$_POST["projname"];
          $aboutproj=$_POST["aboutproj"];
          $aboutintern=$_POST["aboutintern"];
            if ((!empty($projname) && !empty($aboutproj))||(empty($projname) && empty($aboutintern))) {
            echo "<script> alert('Successfully Posted');</script>";
           }
            }
             if(isset($_POST["delete"])){
             $variable=$_POST['name'];
             $del="delete from nppadhy_intern where projectname ='$variable'";
             $final=$conn->query($del);
           }
           }
          if(!empty($projname) && !empty($aboutproj!=null)){
                  $insrt_project="insert into nppadhy_project values ('$projname','$aboutproj')";
                  $check_project=$conn->query($insrt_project);
                 }
                 if(!empty($projname) && !empty($aboutintern)){
                  $insrt_intern="insert into nppadhy_intern values ('$projname','$aboutintern')";
                  $check_intern=$conn->query($insrt_intern);
                 }
            ?>

      <div id="Login">
 <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  Email<input type="text" name="email" id="email"><br>
  Password<input type="password" name="pass" id="password"><br>
  <input type="submit" value="LOGIN" name="login" id="login">
 </form>
   </div>
   <p>You must login first to update your projects</p>
   <div id="block">
   <div id="left">
    <h1>Project-s-Description</h1>
<?php 
    $display_project="select* from nppadhy_project";
    $display_table_project=$conn->query($display_project);
      for($i=1;$rowproj=$display_table_project->fetch_assoc();$i++){
      echo "<span id='bold'>".$i.". ".$rowproj["projectname"].": "."</span>"."<span id='light'>".$rowproj["projectdesc"]."</span>"."<br>";}
      ?></div>
      <div id="right">
        <h1>Intern Needed</h1>
<?php 
    $display_intern="select* from nppadhy_intern";
    $display_table_intern=$conn->query($display_intern);
      for($i=1;$rowintern=$display_table_intern->fetch_assoc();$i++){
      echo "<span id='bold'>".$i.". ".$rowintern["projectname"].": "."</span>"."<span id='light'>".$rowintern["interndesc"]."</span>";
      if($email==$_POST["email"] && $passs==="Correct")
      {
       include 'delete.php';
      }
      echo "<br>";
  }
      ?></div><div>
        
  
</body>
</html>