<!DOCTYPE html>
<html>
<head>
	<title>ES</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Earth Sciences</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table esprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from esprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="earthsc_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Joshi Anand</span></li>
       <li><span id="he">Areas of Interest:</span><span>Strong motion Seismology, Attenuation tomography, Simulation of strong ground motion</span></li>
       <li><span id="he">Contact:</span><span>091-1332-285887</span></li>
       <li><a href="joshi-anand.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>Rathinam Anbalagan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Engineering Geology and Rock Mechanics, Landslide analysis and slope stability, design of retaining walls, Disaster Management, Water resources, Site selection & stability studies of dams, tunnels, reservoir rim stability & small hydel projects, Geo-environmental studies, Route location in hilly terrain, cut slope evaluation and control measures</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285562</span></li>
       <li><a href="Rathinam-anbalagan.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="earthsc_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sunil Bajpai</span></li>
       <li><span id="he">Areas of Interest:</span><span>Paleontology and Stratigraphy, Paleontology, Biostratigraphy, Paleobiogeography, integration of fossil data with stable isotopes,</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285079</span></li>
       <li><a href="sunil-bajpai.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Biplab Bhattacharya</span></li>
       <li><span id="he">Areas of Interest:</span><span>Clastic sedimentology, Ichnology, Sequence Stratigraphy, Coal Geology, paleogeography-paleoclimatology of Archaean, Proterozoic and Phanerozoic successions</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285434</span></li>
       <li><a href="biplab-bhattacharya.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="earthsc_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Govind J Chakrpani</span></li>
       <li><span id="he">Areas of Interest:</span>Water and Land Environmental Earth Science, Surface and Groundwater Hydrogeology, Organic Geochemistry, Chemical Sedimentology<span></span></li>
       <li><span id="he">Contact:</span><span>91-1332-285080</span></li>
       <li><a href="govind-j-chakrpani.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ashutosh Chamoli</span></li>
       <li><span id="he">Areas of Interest:</span>Geophysical Signal Processing and Modeling, Spectral analysis and Wavelets' applications, Fractals, Potential field data: modeling and interpretation, Source identification using Scaling approaches, Transient Deformation modeling, Hydrological Loading effects<span></span></li>
       <li><span id="he">Contact:</span><span>01332-284790</span></li>
       <li><a href="ashutosh-chamoli.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="earthsc_prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pallavi Chattopadhyay</span></li>
       <li><span id="he">Areas of Interest:</span><span>Application of Near Surface Geophysics to explore subsurface geological controls, Study of physical processes controlling fluid flow and mass transport in porous media, Integration of geophysical imaging and numerical model, Establishing field-scale relations between geophysical and hydro-geological parameters
 </span></li>
       <li><span id="he">Contact:</span><span>+91 8126481088</span></li>
       <li><a href="pallavi-chattopadhyay.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ajanta Goswami</span></li>
       <li><span id="he">Areas of Interest:</span><span>APPLICATION OF REMOTE SENSING, FOR GEOLOGICAL & GEOHAZARDS STUDY, CRYOSPHERIC STUDY, USING EARTH OBSERVATION & GROUND BASED STUDY, LANDSLIDE, , URBAN HEAT ISLAND, CHARACTERIZATION USING EARTH OBSERVATION & GROUND BASED STUDY</span></li>
       <li><span id="he">Contact:</span><span>8954888815</span></li>
       <li><a href="ajanta-goswami.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="earthsc_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pravin K Gupta</span></li>
       <li><span id="he">Areas of Interest:</span><span>Numerical Simulation of large systems, Modelling and inversion of geophysical data, Numerical Simulation of large systems, Modelling and inversion of geophysical data
 </span></li>
       <li><span id="he">Contact:</span><span>91-1332-285552</span></li>
       <li><a href="pravin-k-gupta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Mohammad Israil</span></li>
       <li><span id="he">Areas of Interest:</span><span>Geoelectromagnetism, Modelling, Inversion, Geoelectromagnetism, Forward & Inverse Modelling</span></li>
       <li><span id="he">Contact:</span><span>1332 285078</span></li>
       <li><a href="mohammad-israil.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="earthsc_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>Kamal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Seismology, Seismic Hazard Assessment, Earthquake Triggering, Fractals
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285526</span></li>
       <li><a href="Kamal.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>R.Krishnamurthy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Ore Geology, Fluid inclusion in Mineral Deposits, Gold mineralization in Precambrian Terrains, Ore Geology, Fluid inclusion in Mineral Deposits, Gold mineralization in Precambrian Terrains
 </span></li>
       <li><span id="he">Contact:</span><span>91-1332-285416</span></li>
       <li><a href="r-krishnamurthy.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="earthsc_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>Saha Lopamundra</span></li>
       <li><span id="he">Areas of Interest:</span><span>Petrology, Geochemistry, Tectonics, Metamorphic Petrology including pseudosection analyses, Mineralogy, Geochemistry, Archaean tectonics</span></li>
       <li><span id="he">Contact:</span><span>01332285343</span></li>
       <li><a href="saha-lopamundra.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>Dilip K Mukhopadhyay</span></li>
       <li><span id="he">Areas of Interest:</span><span>Structural Geology, Metamorphic Petrology, Structural Geology, Metamorphic Petrology</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285564</span></li>
       <li><a href="dilip-k-mukhopadhyay.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="earthsc_prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sagarika Mukho</span></li>
       <li><span id="he">Areas of Interest:</span><span>Tomography, Tomography, Seismotectonics, Seismotectonics, Seismic hazard micro, Seismic hazard microzonation
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285563</span></li>
       <li><a href="sagarika-mukho.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pitambar Patil</span></li>
       <li><span id="he">Areas of Interest:</span><span>Quaternary Geology, Sedimentology, Basin Development, Geomorphology, Remote Sensing, Neotectonics,
 </span></li>
       <li><span id="he">Contact:</span><span>01332 285237</span></li>
       <li><a href="pitambar-patil.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="earthsc_prof17.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pradhan Sarada Prasad</span></li>
       <li><span id="he">Areas of Interest:</span><span>Engineering Geology & Rock Mechanics, Slope stability, Reservoir Geomechanics & Petroleum Geo-sciences, Reservoir Geo-mechanics, Well bore stability, Carbon Dioxide Sequestration, Geo-mechanical aspects of storage sites</span></li>
       <li><span id="he">Contact:</span><span>12345566</span></li>
       <li><a href="pradhan-sarda-prasad.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof18.jpg" > <ul>
       <li><span id="he">Name:</span><span>Nachiketa Rai</span></li>
       <li><span id="he">Areas of Interest:</span><span></span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="Nachiketa-rai.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="earthsc_prof19.jpg" > <ul>
       <li><span id="he">Name:</span><span>S.N.Rai</span></li>
       <li><span id="he">Areas of Interest:</span><span>Gephysical Prospecting, Hydrogeology, Ground Water Exploration and Management</span></li>
       <li><span id="he">Contact:</span><span>+91-9908298785</span></li>
       <li><a href="s-n-rai.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof20.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sastry G Rambhatla</span></li>
       <li><span id="he">Areas of Interest:</span><span>Exploration Geophysics, Geophysical Inversion, Gravity & Magnetics, Geoelectric methods</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285553</span></li>
       <li><a href="Sastry-g-rambhatla.php">PROJECTS</a></li>
     </ul></p></div>
      </div>
      <div id="wht">
      <div id="left"><p><img src="earthsc_prof21.jpg" > <ul>
       <li><span id="he">Name:</span><span>Arun K Saraf</span></li>
       <li><span id="he">Areas of Interest:</span><span>Remote Sensing, GIS & GPS and their applications in earthquakes & water resources</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285549</span></li>
       <li><a href="arun-k-saraf.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof22.jpg" > <ul>
       <li><span id="he">Name:</span><span>Amit K Sen</span></li>
       <li><span id="he">Areas of Interest:</span><span>Mineral Exploration, Economic Geology, Mineral Exploration, Economic Geology, Igneous Petrology Geochemistry</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285557</span></li>
       <li><a href="amit-k-sen.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="earthsc_prof23.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ravi Sharma</span></li>
       <li><span id="he">Areas of Interest:</span><span>Reservoir Characterization:, Rock Physics, Petrophysics, Petroleum Engineering and Petroleum Geology, Rock Property Investigations:, Experimental and Modeling Methods in Storage, Flow and Elastic-Viscoelastic Properties, Formation Evaluation:, Clastics & Carbonates, Organic Rich Shale resources, Tight Gas Sands, Heavy Oil, Low Perm reservoirs, Seismic Exploration:, Seismic Interpretation, Seismic Inversion and AVO Modeling</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284867</span></li>
       <li><a href="ravi-sharma.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof24.jpg" > <ul>
       <li><span id="he">Name:</span><span>Maurya Abhayanand Singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Marine Micropaleontology, Paleoceanography, Mass Spectrometry, Isotope Hydrology</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285610</span></li>
       <li><a href="maurya-abhayanand-singh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="earthsc_prof25.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sandeep Singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Himalayan Tectonics, Igneous Petrology, Geochronology and Isotope Geology of Rocks and Water, Tectonics, Igneous Petrology, Geochronology</span></li>
       <li><span id="he">Contact:</span><span>1332285559</span></li>
       <li><a href="sandeep-singh.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="earthsc_prof26.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vir N Singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Siesmology, Seismology, Exploration Geophysics</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285232</span></li>
       <li><a href="vir-n-singh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="earthsc_prof27.jpg" > <ul>
       <li><span id="he">Name:</span><span>Deepak C. Srivastava</span></li>
       <li><span id="he">Areas of Interest:</span><span>Structural Geology, Structural Geometry of deformed terrains, Structural Geology, Fluid Inclusions, Stress and Strain estimation in rocks</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285558</span></li>
       <li><a href="deepak-c-srivastava.php">PROJECTS</a></li>
     </ul></p></div>
        
   </div>
   
</body>
</html>