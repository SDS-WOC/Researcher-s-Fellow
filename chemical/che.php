<!DOCTYPE html>
<html>
<head>
	<title>CHEMICAL</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Chemical Engineering</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table cheprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from cheprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="che_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vijay Kumar Agarwal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Modelling and Simulation,CAD,process control and heat transfer, Process Modelling & Simulation, CAD, Process Control & Heat Transfer</span></li>
       <li><span id="he">Contact:</span><span>01332-285718</span></li>
       <li><a href="vijay-kumar-agarwal.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>Anshu Anand</span></li>
       <li><span id="he">Areas of Interest:</span><span>Particle Technology, Modeling the dynamics of particulate and powder systems, Multiphase flows, Fluidization</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="anshu-anand.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="che_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Chandrajit Balomajumder</span></li>
       <li><span id="he">Areas of Interest:</span><span>Modelling and Design, Chemical Process Industry, Environmental Engineering, Industrial Pollution Abatement, Biochemical Engineering, Biological Waste Treatment, Bio Fuels, Bio conversion of Organic Materials</span></li>
       <li><span id="he">Contact:</span><span>01332-285321</span></li>
       <li><a href="chandrajit-Balomajumder.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ram Prakash Bharti</span></li>
       <li><span id="he">Areas of Interest:</span><span>Computational Fluid Dynamics (CFD):, Convective Hydrodynamics of Non-Newtonian Fluids and Bluff Bodies Flows, Microfluidics:, Electrokinetic flow in microchannels, Development of Computational Complex Flow Solvers:, FVM, FEM and LBM</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-28 5304</span></li>
       <li><a href="ram-prakash-bharti.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="che_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Prakash Biswas</span></li>
       <li><span id="he">Areas of Interest:</span>Biofuels and bioenergy, Green catalytic process, Reactor / Kinetic modeling, Design and synthesis of nanostructured materials as shape and size selective catalyst, CO2 utilization, Selective hydrogenation and hydrogenolysis over supported nano-particle catalysts, Selective oxidation and ammoxidation of normal alkanes<span></span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285820</span></li>
       <li><a href="prakash-biswas.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>Taraknath Das</span></li>
       <li><span id="he">Areas of Interest:</span>Heterogeneous catalysis and spectroscopy, Supported metal/metal oxide catalysis: synthesis, characterization and activity;, Nano-materials:, Nano-material synthesis and applications in catalysis, Hydrogenation reaction, Oxidation reaction:, CO2 methanation, Also interested on reforming reaction of hydrocarbons, In situ Spectroscopy (FTIR):, In situ adsorption and reaction studies (Operando spectroscopy), Hydrogen Energy:, Generation and storage<span></span></li>
       <li><span id="he">Contact:</span><span> +91-1332-28-4828 (O)</span></li>
       <li><a href="taraknath-das.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="che_prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>Amit Kumar Dhiman</span></li>
       <li><span id="he">Areas of Interest:</span><span>Fluid Mechanics, CFD, Non-Newtonian Fluids, Bluff Body Flow and Heat Transfer, FVM and FDM Solvers
 </span></li>
       <li><span id="he">Contact:</span><span>01332-285890</span></li>
       <li><a href="amit-kumar-dhiman.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sumana Ghosh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Two-phase flow, Hydrodynamic Cavitation, Proton exchange membrane fuel cell, Vortex tube</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="Sumana-ghosh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="che_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Prateek Kumar Jha</span></li>
       <li><span id="he">Areas of Interest:</span><span>Molecular Simulations, Polymer Physics, Drug Delivery, Charged systems
 </span></li>
       <li><span id="he">Contact:</span><span>91-1332-284810 (O)</span></li>
       <li><a href="prateek-kumar-jha.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Shabina Khanam</span></li>
       <li><span id="he">Areas of Interest:</span><span></span></li>
       <li><span id="he">Contact:</span><span>01332-285157</span></li>
       <li><a href="shabina-khanam.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="che_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vimal Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Heat Transfer, Single and Multiphase flow, Computational Fluid Dynamics, Bio-oil from renewable feedstocks
 </span></li>
       <li><span id="he">Contact:</span><span>01332-285694</span></li>
       <li><a href="vimal-kumar.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>Patit Paban Kundu</span></li>
       <li><span id="he">Areas of Interest:</span><span>Fuel cells (Direct methanol fuel cell, microbial fuel cell), Waste management, Protein delivery, Catalaysts for fuel cells, Membranes for fuel cell,Polymer recycling and biodegradation, Tissue Engg
 </span></li>
       <li><span id="he">Contact:</span><span>7251040403</span></li>
       <li><a href="patit-paban-kundu.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="che_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>Bikash Mohanty</span></li>
       <li><span id="he">Areas of Interest:</span><span>Control Instrumentation andModelling and Simulation, Heat Transfer, Process Integration Simulation, Process Int. & Control</span></li>
       <li><span id="he">Contact:</span><span>1332-5710</span></li>
       <li><a href="bikash-mohanty.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>Parsenjit Mondal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Energy and environmental engineering, wastewater treatment, environmental biotechnology, energy from wastes, separation processes</span></li>
       <li><span id="he">Contact:</span><span>911332285181</span></li>
       <li><a href="parsenjit-mondal.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="che_prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Basheshwer Prasad</span></li>
       <li><span id="he">Areas of Interest:</span><span>Biomass Energy, Pyrolysis and gasification, Integrated Energy Systems, Hybrid energy systems with biomass as base, Industrial Wastewater Treatment, Petrochemical, dairy and resin industries, Biochemical Energy Conversion, Fuel alcohol production and usage in IC engine
 </span></li>
       <li><span id="he">Contact:</span><span>01332-285323</span></li>
       <li><a href="basheshwer-prasad.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>N.Siva Mohan Reddy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Biomass Conversions- Biofuels, Gasification/Partial oxidation of biomass, Green Synthesis of Catalysts for Energy and Environment Applications, Extracts from food and agriculture wastes will applied to synthesize different nanocatalysts, Supercritical Fluid Technology, Adsorption/Extractions of Nutraceuticals in SCCO2, Hydrothermal Flame Oxidation of complex molecuels
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284833</span></li>
       <li><a href="nsiva-mohan-reedy.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="che_prof17.jpg" > <ul>
       <li><span id="he">Name:</span><span>Gaurav Sharma</span></li>
       <li><span id="he">Areas of Interest:</span><span>Fluid Mechanics, Hydrodynamic instability, interfacial flows, microfluidics</span></li>
       <li><span id="he">Contact:</span><span>91-1332 28 5427</span></li>
       <li><a href="gaurav-sharma.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof18.jpg" > <ul>
       <li><span id="he">Name:</span><span>Shashi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Modelling and Simulation of Chemical Processes, Membrane Reactors, Fuel Cells, Wastewater Treatment, Physiological and Biological Treatment of Wastewater, Transfer Processes, Membrane separation process</span></li>
       <li><span id="he">Contact:</span><span>  01332-285672</span></li>
       <li><a href="shashi.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="che_prof19.jpg" > <ul>
       <li><span id="he">Name:</span><span>Shishir Sinha</span></li>
       <li><span id="he">Areas of Interest:</span><span>Blended Polymer Composits, Polymer Surface Modification, :Polymer Composites,, Nano Composites, : Ion Exchanger, Ion Exchangers</span></li>
       <li><span id="he">Contact:</span><span>01332-285648</span></li>
       <li><a href="shishir-sinha.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="che_prof20.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vimal Chandra Srivastava</span></li>
       <li><span id="he">Areas of Interest:</span><span>Chemical Engineering, Environmental Engineering, Energy & Fuels., Separation, Catalysis, Pollution Abatement, CO2 utilization, Fuels, Nano-materials, Desulfurization.</span></li>
       <li><span id="he">Contact:</span><span>01332-285889</span></li>
       <li><a href="vimal-chandra-srivastava.php">PROJECTS</a></li>
     </ul></p></div>
      </div>
      <div id="wht">
      <div id="left"><p><img src="che_prof21.jpg" > <ul>
       <li><span id="he">Name:</span><span>C.Veeramani</span></li>
       <li><span id="he">Areas of Interest:</span><span>Multiphase Flow Simulations, Circulating Fluidized Bed Reactor, Electrokinetic Phenonema, Electro-coagulation</span></li>
       <li><span id="he">Contact:</span><span>01332-285671</span></li>
       <li><a href="c-veeramani.php">PROJECTS</a></li>
     </ul></p></div>
        
        
   </div>
   
</body>
</html>