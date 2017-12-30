<!DOCTYPE html>
<html>
<head>
	<title>APPSC</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Applied Science and Engineering</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table appscprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from appscprofs where aoi like '%".$text."%'";
           $searchpic=$conn->query($search);
         }
     ?>   
     <div id=nav> 
       <span id="inv">vtg</span> 
	  	<div id="search">
	  		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <input type="text" name="search" placeholder="Search Your Area of Interest">
      <input type="submit" name="submit" value="SEARCH">
    </form>
	  	</div></div>
      <div id="box">
        <?php if(!empty($text)){
          if($searchpic->num_rows>0){
        echo "<h2>Your Area Of Interest Matches with:</h2>";
         while($srch=$searchpic->fetch_assoc()){
          echo $srch["name"];
          echo "<br>";
         }}
         else echo "<script>alert('No Match Found');</script>";
         }?>
      </div>
      <div id="wht">
      <div id="left"><p><img src="appsc_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Rajan Arora</span></li>
       <li><span id="he">Areas of Interest:</span><span>Applied Mathematics, Partial Differential Equations, Different Solutions Methods of Partial Differential Equations</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="rajan-arora.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="appsc_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>Jaydev</span></li>
       <li><span id="he">Areas of Interest:</span><span>Abstract Differential Equations, Initial and Boundary Value Problems, Fractional Differential Equations, Approximations of Solutions, Method of Lines, Inverse and Ill-posed Problems, Inverse problems in PDE</span></li>
       <li><span id="he">Contact:</span><span>01322714396</span></li>
       <li><a href="jaydev.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="appsc_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pant Mili</span></li>
       <li><span id="he">Areas of Interest:</span><span>Numerical Optimization, Evolutionary Algorithms, Swarm Intelligence, Global Optimization, Nature Inspired Algorithms, Supply Chain Management</span></li>
       <li><span id="he">Contact:</span><span>9759561464</span></li>
       <li><a href="pant-mili.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="appsc_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sanjit Kumar Mishra</span></li>
       <li><span id="he">Areas of Interest:</span><span>Twentieth Century British Literature, Post colonial Literature, Contemporary Critical Theories, Indian Writing in English</span></li>
       <li><span id="he">Contact:</span><span>9548774358</span></li>
       <li><a href="sanjit-kumar-mishra.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="appsc_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Yuvraj Singh Negi</span></li>
       <li><span id="he">Areas of Interest:</span>Polymer Science, Technology, Engineering/Materials Science, Synthesis, Characterization and Application of Polymers: High Performance Polymers, PEEK based Nanoc<span></span></li>
       <li><span id="he">Contact:</span><span>01322714328</span></li>
       <li><a href="yuvraj-singh-negi.php">PROJECTS</a></li>
     </ul></p></div>
        
   </div>
   
</body>
</html>
