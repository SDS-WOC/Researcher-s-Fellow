<!DOCTYPE html>
<html>
<head>
	<title>ARCHI</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Architecture and Planning</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table archiprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from archiprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="archi_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Avlokita Aggarwal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Energy Efficiency in Buildings, Sustainability in Built Environment, Passive Design,, Sustainability Audits, Traditional Architecture, Thermal comfort , Life Cycle Analysis, Thermal comfort through passive features</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="avlokita-aggarwal.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof2.jpg" > <ul>
       <li><span id="he">Name:</span>Rita Ahuja<span></span></li>
       <li><span id="he">Areas of Interest:</span><span>Architectural Design, Building Design, Architectural Design, Building Design</span></li>
       <li><span id="he">Contact:</span><span>01332-285129</span></li>
       <li><a href="rita-ahuja.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="archi_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sonal Atreya</span></li>
       <li><span id="he">Areas of Interest:</span><span>Architectural Design, Human Factor and Ergonomics, Industrial Design, Product Innovation and Visual Communication, Biomecahnics, Biomedical Product Design and Assistive Technologies, Design for disabled, children and elderly, Design for Disaster Management</span></li>
       <li><span id="he">Contact:</span><span>911332284882</span></li>
       <li><a href="sonal-atreya.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Arindam Biswas</span></li>
       <li><span id="he">Areas of Interest:</span><span>Smart City, Network, Analysis and Planning, Urban & Regional Policy, International City Planning, Creative Economy, Creative Industries, Knowledge Economy, Urban Governance, Metropolitan & Regional Governance, Urban Informal Sector (Informal Economy & Housing), Slum Free City, Ethics, Justice, Capability Approach, Resilient City, Urban Risk & Disaster Mitigation</span></li>
       <li><span id="he">Contact:</span><span>+91 13 32284785</span></li>
       <li><a href="arindam-biswas.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="archi_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>P. S. Chani</span></li>
       <li><span id="he">Areas of Interest:</span>Embodied Energy, Embodied Energy in Housing, Energy Assessment, Comprehensive Embodied Energy Assessments in Housing Developments, Contemporary Architecture, Contemporary Trends in World & Indian Architecture, Futuristic Architecture, Architecture of Future<span></span></li>
       <li><span id="he">Contact:</span><span>01332-284314</span></li>
       <li><a href="ps-chani.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>V.Devadas</span></li>
       <li><span id="he">Areas of Interest:</span><span>Urban and Rual Development Planning, , Urban Dynamics, Rural Dynamics, Regional Dynamics, Infrastructure Development Planning, ( Physical Infra., Economics Infra., and Social Infra. ), Sustainable Development Planning, Integrated Development Planning, Financial Management, Resource Management, etc.</span></li>
       <li><span id="he">Contact:</span><span> 01332-285298</span></li>
       <li><a href="v-devadas.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ila Gupta</span></li>
       <li><span id="he">Areas of Interest:</span><span>Aesthetics in Architecture, Visual Communication and Design, Architectural and Cultural History of, Colour applications, Public Signage System, Folk Art/ Craft and Technology, Terracotta Narratives, P
 </span></li>
       <li><span id="he">Contact:</span><span>  01332-285381</span></li>
       <li><a href="ila-gupta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Saptarshi Kolay</span></li>
       <li><span id="he">Areas of Interest:</span><span>Visual Communication Design, User Experience Design, Industrial Design, Industrial Design</span></li>
       <li><span id="he">Contact:</span><span>1332 28 5732</span></li>
       <li><a href="Saptarshi-kolay.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="archi_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Mahua Mukherjee</span></li>
       <li><span id="he">Areas of Interest:</span><span>
 </span></li>
       <li><span id="he">Contact:</span><span>01332-285334/285036</span></li>
       <li><a href="mahua-mukherjee.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ram Sateesh Pasupuleti</span></li>
       <li><span id="he">Areas of Interest:</span><span>Culturally Responsive Built Environments, Disasters ,Culture, Development and Attarctive Winter cities, Design for All in All Climatic condition</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="Ram-sateesh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="archi_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>Tina Pujara</span></li>
       <li><span id="he">Areas of Interest:</span><span>Urban Design, Sustainable urban form, Sustainable Urban Development, Urban Social Sustainability, Architectural Journalism
 </span></li>
       <li><span id="he">Contact:</span><span>  0091-1332-285486</span></li>
       <li><a href="Tina-pujara.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pushplata</span></li>
       <li><span id="he">Areas of Interest:</span><span>Architechtural Design, Urban Design, Urban Environment Design, Sustainable Development of Hill Settlements, Hill Arch., Public Realm
 </span></li>
       <li><span id="he">Contact:</span><span>01332-285143</span></li>
       <li><a href="Pushplata.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="archi_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>Gaurav Raheja</span></li>
       <li><span id="he">Areas of Interest:</span><span>Universal Design, Visual Communication, Design Pedagogy, Sustainable Design</span></li>
       <li><span id="he">Contact:</span><span>+91 - 1332 - 285709</span></li>
       <li><a href="gaurav-raheja.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>E. Rajasekar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Thermal comfort, Energy efficiency and Carbon foot print of built environment, , Architectural Acoustics and Lighting Design, , Building Information Modeling and Simulation, , GIS Integration for Sustainable Development, , GIS Based Noise Mapping and Mitigation, , Emergy Synthesis, Emergy and Exergy analysis</span></li>
       <li><span id="he">Contact:</span><span> +91 1332 284838</span></li>
       <li><a href="e-Rajasekar.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="archi_prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Uttam Kumar Roy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Housing Policy, Housing Planning, Design & Technology systems, Spatial Urban Planning, and Land Management, NMT based accessibility, & Area planning
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284766</span></li>
       <li><a href="Uttam-kumar-roy.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="archi_prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>Smriti Saraswat</span></li>
       <li><span id="he">Areas of Interest:</span><span>Cultural Heritage; Visual Narratives; Design Research and Writing; and Pedagogy, Interior-Architecture; Craft and Technology; Traditional Knowledge Systems; Indigenous Communities;
 </span></li>
       <li><span id="he">Contact:</span><span>01332 - 284770</span></li>
       <li><a href="smriti-saraswat.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="archi_prof17.jpg" > <ul>
       <li><span id="he">Name:</span><span>Lakra Harshit Sosan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Culture Based Planning, Public Realm and cultural reproduction and socio-economic development of ethnic communities, Vernacular Architecture, Tribal Architecture and Technology, Housing, Low cost and affordable housing</span></li>
       <li><span id="he">Contact:</span><span>12345566</span></li>
       <li><a href="Lakra-Harshit-sosan.php">PROJECTS</a></li>
     </ul></p></div>
        
   </div>

   
</body>
</html>