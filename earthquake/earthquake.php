<!DOCTYPE html>
<html>
<head>
  <title>Earthquake</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Earthquake Engineering</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table eqprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from eqprofs where aoi like '%".$text."%'";
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
   
   
</body>
</html>
   <div id="wht">
      <div id="left"><p><img src="eq_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pankaj Agrawal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Earthquake Resistant Design of Structures, Low-strength masonry buildings, Repair and retrofitting of masonry and reinforced concrete buildings</span></li>
       <li><span id="he">Contact:</span><span> +91-01332-285317</span></li>
       <li><a href="pankaj-agrawal.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="eq_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>Josodhir Das</span></li>
       <li><span id="he">Areas of Interest:</span><span>Seismo-Tectonics, Remote Sensing, GIS, Seismic Hazards, Related to these areas</span></li>
       <li><span id="he">Contact:</span><span> +91-01332-285264</span></li>
       <li><a href="josodhir-das.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="eq_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>S.C.Gupta</span></li>
       <li><span id="he">Areas of Interest:</span>Observational Seismology, seismological arrays and networks, Observational Seismology, seismological arrays and networks<span></span></li>
       <li><span id="he">Contact:</span><span>91-01332-285592</span></li>
       <li><a href="sc-gupta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="eq_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ravi S Jakka</span></li>
       <li><span id="he">Areas of Interest:</span><span>Geotechnical Earthquake Engineering, Foundation Design, Slope Stability, Landslides, Dynamic Site Characterization & Soil Liquefaction;, Seismic Hazard Assessment, Local Site Effects, & Earthquake Early Warning;, Ground Improvement Techniques, Geosynthetics & Reinforced Slopes;, Machine Foundations, & Earthquake Resistant Design of Foundations;</span></li>
       <li><span id="he">Contact:</span><span>01332-28 5591</span></li>
       <li><a href="ravi-s-jakka.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="eq_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ashok Kumar</span></li>
       <li><span id="he">Areas of Interest:</span>Processing and interpretation of strong motion data, system identification studies, Studies based on, Processing and interpretation of strong motion data, system identification studies, Studies based on<span></span></li>
       <li><span id="he">Contact:</span><span>91-01332-285527</span></li>
       <li><a href="ashok-kumar.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="eq_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ashwani Kumar</span></li>
       <li><span id="he">Areas of Interest:</span>Engineering Seismology, Study of Microearthquake Activity at Engineering Project Sites Employing Loc, Engineering Seismology, Study of Microearthquake Activity at Engineering Project Sites Employing Loc<span></span></li>
       <li><span id="he">Contact:</span><span>+91-01332-285529</span></li>
       <li><a href="ashwani-kumar.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="eq_prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>B.K.Maheshwari</span></li>
       <li><span id="he">Areas of Interest:</span><span>Geotechnical Earthquake Engineering, Soil Dynamics, Finite Element Method, Seismic Soil-Structure Interaction, Liquefaction, Dynamic Soil Properties, Landslide Hazard, Slopes
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285450</span></li>
       <li><a href="bk-maheshwari.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="eq_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>J.P.Narayan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Earthquake Ground Motion Simulation, Development of viscoelastic Finite-difference Algorithms, ., Site and site-city interaction effects on groung motion, Seismic Microzonation, Macroseismic field observation</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285127</span></li>
       <li><a href="jp-narayan.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="eq_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Kirat Pal</span></li>
       <li><span id="he">Areas of Interest:</span><span>nstrumentation, Instrumentation
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285539</span></li>
       <li><a href="kirat-pal.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="eq_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ashok D Pandey</span></li>
       <li><span id="he">Areas of Interest:</span><span>response of buildings, dams, power house structures, offshore structures, Simulation of environmenta, response of buildings, dams, power house structures, offshore structures, Simulation of environmenta</span></li>
       <li><span id="he">Contact:</span><span> 91-1332-285531</span></li>
       <li><a href="ashok-d-pandey.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="eq_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>D.K.Paul</span></li>
       <li><span id="he">Areas of Interest:</span><span>Seismic analysis and design of structures, Nonlinear dynamics, Earthquake resistant design, Impact a, Seismic analysis and design of structures, nonlinear dynamics, Earthquake resistant design, Impact a
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285522</span></li>
       <li><a href="dk-paul.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="eq_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>D.Shankey</span></li>
       <li><span id="he">Areas of Interest:</span><span>Engineering Seismology and Seismotectonics, Seismotectonic of Himalaya, Seismology and Seismotectonics,, Seismology and Seismotectonics, Sesimic risk analysis, Earthquake data analysis, Statistical seismol, Seismic hazard and Earthquake prediction / Earthquake Disaster Management, Earthquake prediction in Himalaya, NE India, Prediction of Ground Motion studies and seismic Microzonation, Microzonation of Kochi City India, Applied Geophysics/ Theoretical seismology, Gravity and Magnity Survey In Mandala Na Jabalpur IndiaIndia, Geophysical application in Civil Engineeing and tunneling Technology, In situ stress estimatiom, Landslide/Earthquake Control and Hill development, Ladslide hazard estimation, Marine geophysics/Tsunami study, Tsunami Survey and hazard estudies
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285128</span></li>
       <li><a href="d-shankey.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="eq_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>M.L.Sharma</span></li>
       <li><span id="he">Areas of Interest:</span><span>Engineering Seismology, Seismotectonics, Seismic hazard analysis,Digital telemetered seismic arrays, SAR Interferometry, Strong ground motion prediction, Seismic Microzonation</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285536</span></li>
       <li><a href="ml-sharma.php">PROJECTS</a></li>
     </ul></p></div>
      <div id="right"><p><img src="eq_prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>Manish Shrikhande</span></li>
       <li><span id="he">Areas of Interest:</span><span>Computational mechanics, Random vibrations, Structural Reliability, Strong Motion Studies, Soil-Structure Interaction, Vibration Control, Probabilistic mechanics
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285437</span></li>
       <li><a href="manish-shrikhande.php">PROJECTS</a></li>
     </ul></p></div>
         </div>
         <div id="blk">
      <div id="left"><p><img src="eq_prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Yogendra Singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Performance Based Seismic Design, Performance Based Design of Buildings and Bridges, Seismic Response Evaluation of Structures, Non-Linear Modelling and Analysis of RC Structures, Seismic Evaluation and Retrofitting of Structures, Seismic Evaluation and Retrofit of Hospitals and Schools, Seismic Vulnerability and Risk Evaluation, Seismic Vulnerability ans Risk Analysis of Indian Housing Stock, Dynamic Soil-Structure Interaction, Effect of Soil on Seismic Performance of Buildings, Towers, and Bridges, Seismic Risk In Hilly Areas, Sesimic Fragility Analysis of Hill Buildings, Seismic Risk In Hilly Areas, Slope-Building Interaction under Seismic Action</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285534</span></li>
       <li><a href="Yogendra-singh.php">PROJECTS</a></li>
     </ul></p></div>
      <div id="right"><p><img src="eq_prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>Amita Sinval</span></li>
       <li><span id="he">Areas of Interest:</span><span>Engineering Seismology and Seismoteetomics,Engineering Geophysics,Seismic Exploration., Engineering Seismology and Seismoteetomics,Engineering Geophysics,Seismic Exploration.
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285517</span></li>
       <li><a href="amita-sinval.php">PROJECTS</a></li>
     </ul></p></div>
         </div>
   
</body>
</html>