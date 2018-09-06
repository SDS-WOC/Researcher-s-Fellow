<!DOCTYPE html>
<html>
<head>
	<title>META</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Metallurgical and Materials Engineering</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table metaprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from metaprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="meta_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Mukesh Bhardwaj</span></li>
       <li><span id="he">Areas of Interest:</span><span>Research methodologies, Automation tools like potentiostat programming, Latex and planning tools to do reseach efficiently, Nano grain sized metallic materials, Nano Nickel and Nano copper coatings, Nano composites, Nano ceramic metal matrix coating, Weldments, Corrosion protection of weldments, Electrocatalysis, Synthesis and characterization of an electrocatalyst for hydrogen evolution reaction, Energy materials, Microporous coatings of Nickel for hydrogen evolution, Modelling and simulation, Simulation of iron and steel making processes</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285074</span></li>
       <li><a href="mukesh-bhardwaj.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>G.P.Chaudhri</span></li>
       <li><span id="he">Areas of Interest:</span><span>., Ultrafine grained materials, Solidification processing, Cast MMCs, ., Corrosion, Tribocorrosion, Wear</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285524</span></li>
       <li><a href="gp-chaudhari.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="meta_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vikram V.Dabhade</span></li>
       <li><span id="he">Areas of Interest:</span><span>Metal Matric Composites, Nanocomposites, Machinability, Intermetallics, Sintering Kinetics, Mechanical Alloying, Powder Metallurgy</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285502</span></li>
       <li><a href="vikram-v-dabhade.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>B.S,S.Daniel</span></li>
       <li><span id="he">Areas of Interest:</span><span>Metal Foam, Nanomaterials, Metal Matrix Composites, Metallic Glasses</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285751</span></li>
       <li><a href="bss-daniel.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="meta_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sourav Das</span></li>
       <li><span id="he">Areas of Interest:</span>Steel development for:, 1. Automotive application, 2. Armour, 3. Construction;, Study of phase transformation with the help of:, 1. ThermoCalc, 2. DICTRA, 3. Modelling;, Structure-property correlation of:, 1. Mechanical properties of steel (e.g. tensile, fatigue, impact etc), 2. Heat treatment;, Joining of materials, 1. Ferrous, 2. Non-ferrous joining<span></span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284862</span></li>
       <li><a href="sourav-das.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>Nikhil Dhawan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Mineral Processing, Extractive Metallurgy, Particulate processing, Ore processing, Waste utilization, Electronic scrap, Microwave technology, Fertilizers</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284839</span></li>
       <li><a href="nikhil-dhawan.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="meta_prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>Prakriti K.Ghosh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Welding Metallurgy, Fatigue & Fracture mechanics, Met. matrix composites, Innovation & IP Management, Welding & adhesive joining, Nano filler polymer composite, Life & Safety Analyses of Eng. Structure
 </span></li>
       <li><span id="he">Contact:</span><span>01332285699</span></li>
       <li><a href="prakriti-k-ghosh.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sadhan Ghosh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Alloy development, Designing of steels for automotives, power plants and in general., Phase Transformations, Structure-property-correlation by Thermo_calc, Dictra Simulations and Experiments</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284762</span></li>
       <li><a href="sadhan-ghosh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="meta_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>R.Jayaganthan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Functional Nanomaterials, Structure-Property Correlations in Piezoelectric Nanostructured Thin films, Nano Manufacturing, Development of Bulk Nanostructured Materials for Structural Applications, Ultrafine grained Materials, Fatigue & Fracture Studies of Light Metals & Alloys, Corrosion Engineering, Degradation Behaviour of Bulk and Nanocrystalline Coatings
 </span></li>
       <li><span id="he">Contact:</span><span> 91-1332-285869</span></li>
       <li><a href="r-jayaganthan.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>B.Venkata Manoj Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Ceramics and tribology, Ultra high temperature ceramics, Research and teaching, Structural Ceramcis, Research and teaching, Tribology, Research and teaching, Metal Matrix Composites, Research and teaching, Friction Stir Processing, Research and teaching, Martensitic Stainless Steels</span></li>
       <li><span id="he">Contact:</span><span>91-8755746590</span></li>
       <li><a href="b-venkata-manoj-kumar.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="meta_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sharvan Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Physical Metallurgy, Physical & Industrial Metallurgy
 </span></li>
       <li><span id="he">Contact:</span><span>+91-133228-5723</span></li>
       <li><a href="Sharvan-kumar.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>Debrupa Lahiri</span></li>
       <li><span id="he">Areas of Interest:</span><span>1) Biomaterials:, Developing Material systems for Implants, Tissue Engineering and Degradable Scaffolds, (2) Multiscale Mechanics and Tribology:, (i) For Structural Materials, (ii) Nanomechanics of Biological and 1D/2D Nanomaterials, (3) Composite Material Systems with Nanofillers:, For structural and biomedical applications with specific functionalities
 </span></li>
       <li><span id="he">Contact:</span><span>01332-285137</span></li>
       <li><a href="debrupa-lahiri.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="meta_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>Indranil Lahiri</span></li>
       <li><span id="he">Areas of Interest:</span><span>Synthesis of Nanomaterials, Carbon Nanotubes, Graphene and other nanomaterials and thin films, Electronic Applications of Nanomaterials, Field Emission - application of interface engineering and novel geometry, Energy Related Application of Nanomaterials, Carbon nanotubes and other nanomaterials as Li-ion battery electrode</span></li>
       <li><span id="he">Contact:</span><span>+91 1332 285261</span></li>
       <li><a href="indranil-lahiri.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>Suhrit Mula</span></li>
       <li><span id="he">Areas of Interest:</span><span>Preparation of Bulk Nanostructured metals and alloys and nanocomposites, Low stacking fault energy materials (Copper based alloys), Development of High strength steel by controlled Thermo-mechanical processing, Thermomechanical simulation, multiaxial forging, controlled rolling of IF steels, Microalloyed steel, Thermodynamics, kinetics and thermal stability of nanostructured materials, Iron based and aluminium-based nanostructured alloys, Mechanical alloying and spark plasma sintering, Wear and Corrosion resistance</span></li>
       <li><span id="he">Contact:</span><span>01332-285763</span></li>
       <li><a href="suhrit-mula.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="meta_prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sumeer K.Nath</span></li>
       <li><span id="he">Areas of Interest:</span><span>Physical metallurgy, Alloy design and development, Tribology, Physical metallurgy, Alloy design and development, Tribology
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285722</span></li>
       <li><a href="sumeer-k-nath.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vivek Pancholi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Friction Stir Processing, FSP of Al and Mg alloys, Superplastic forming, SPF of Al Alloys, Crystallographic Texture, Micro and Macro texture
 </span></li>
       <li><span id="he">Contact:</span><span>91-01332-285426</span></li>
       <li><a href="vivek-pancholi.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="meta_prof17.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ujjwal Prakash</span></li>
       <li><span id="he">Areas of Interest:</span><span>Metallurgical Engineering, Powder metallurgy, steels, high temperature structural materials, intermetallics.</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285574</span></li>
       <li><a href="ujjwal-prakash.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof18.jpg" > <ul>
       <li><span id="he">Name:</span><span>Devendra Puri</span></li>
       <li><span id="he">Areas of Interest:</span><span>Extractive Metallurgy, High Temperature Oxidation & Corrosion, Extractive Metallurgy, High Temperature Oxidation & Corrosion</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285345</span></li>
       <li><a href="devendra-puri.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="meta_prof19.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ramudu Meka Sai</span></li>
       <li><span id="he">Areas of Interest:</span><span>Surface Engineering, Thermochemical surface treatments for steels, powder metallurgy, second-phase dispersion strengthened metal alloys, Solid State Phase Transformation, internal precipitation in solids</span></li>
       <li><span id="he">Contact:</span><span>7060933840</span></li>
       <li><a href="ramudu-meka-sai.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof20.jpg" > <ul>
       <li><span id="he">Name:</span><span>Anjan Sil</span></li>
       <li><span id="he">Areas of Interest:</span><span>(1) Functional Ceramics, (2) Energy Storage Materials, Nanostructured carbon materials, High energy density lithium ion battery, Electroceramic thin films</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285073</span></li>
       <li><a href="anjan-sai.php">PROJECTS</a></li>
     </ul></p></div>
      </div>
      <div id="wht">
      <div id="left"><p><img src="meta_prof21.jpg" > <ul>
       <li><span id="he">Name:</span><span>Devendra Singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Injection Metallurgy, Gas dynamics, Powder Metallurgy, Modelling, Injection Metallurgy, Gas Dynamics, Powder Metallurgy, Modelling</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285580</span></li>
       <li><a href="devendra-singh.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="meta_prof22.jpg" > <ul>
       <li><span id="he">Name:</span><span>K.S.Suresh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Structure - property correlations, Electron Microscopy, Crystallographic Texture, Thermo-mechanical processing, Plasticity, Annealing, Advanced Manufacturing methods, Additive Manufacturing, Smart Materials, Shape memory alloys, Strutural Materials, Metallic multilayers, Ti alloys, Ni base superalloys, Al alloys</span></li>
       <li><span id="he">Contact:</span><span>91-01332-284868</span></li>
       <li><a href="ks-suresh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   
</body>
</html>