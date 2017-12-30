<!DOCTYPE html>
<html>
<head>
	<title>ECE</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Electronics and Communication Engineering</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table eceprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from eceprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Debashish Ghosh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Communication Systems and Signal Processing,Cognitive radio and Sensor Networks,Image and video processing,Computer vision and pattern recognition</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="debashish-ghosh.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>Madhav J.Nigam</span></li>
       <li><span id="he">Areas of Interest:</span><span>Digital lmage Processing, Guidance and Controls in Navigational Systems including high resolution</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285315</span></li>
       <li><a href="madhav-j-nigam.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Anshul Tyagi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Digital Communications, Error Control Coding, UWB Communications</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285688</span></li>
       <li><a href="anshul-tyagi.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vinod Pankajakshan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Image Processing, Digital Watermarking, Image Forensics, Image Perceptual Quality Assessment</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285898</span></li>
       <li><a href="vinod-pankajakshan.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pyari Mohan Pradhan</span></li>
       <li><span id="he">Areas of Interest:</span>Wireless Communication, Cognitive Radio, Wireless Sensor Network, Distributed Data Estimation, Time-Frequency Analysis, S-transform, Fast Time-Frequency Transform<span></span></li>
       <li><span id="he">Contact:</span><span>91-1332-284807</span></li>
       <li><a href="pyari-mohan-pradhan.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>Meenakshi Rawat</span></li>
       <li><span id="he">Areas of Interest:</span>Communication System<span></span></li>
       <li><span id="he">Contact:</span><span>91-1332-284808</span></li>
       <li><a href="meenakshi-rawat.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sudeb Dasgupta</span></li>
       <li><span id="he">Areas of Interest:</span><span>Ultra Low Power, Adiabatic Logic for Portable Applications, Low Power Application, Subthreshold Logic Design, Radiation Effects on ICs, Design and Development of 6T FinFET Based Rad Hard SRAM Cell, Novel Semiconductor Devices, FinFETs, PDSOI, FDSOI, Nanoelectronics, Semiconductor Device Modelling
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285666</span></li>
       <li><a href="subed-dasgupta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sanjeev Manhas</span></li>
       <li><span id="he">Areas of Interest:</span><span>Devices, Nanoscale MOSFET modeling and circuit design, Reliability, MOS device reliability, MEMs, Cantilever based MEMs and applications, Sensors, CNT based sensors, VLSI process, CMOS process and VLSI technologies</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285147</span></li>
       <li><a href="sanjeev-manhas.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Anand Bulusu</span></li>
       <li><span id="he">Areas of Interest:</span><span>Circuit Design, Variation aware VLSI circuit design methodology, Delay Models, Delay and timing models for VLSI circuits, VLSI Devices, Novel device/circuit co-design methodologies
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-245347</span></li>
       <li><a href="anand-bulusu.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Brajesh Kumar Kaushik</span></li>
       <li><span id="he">Areas of Interest:</span><span>Nanotechnology Design, Nanoscale Interconnects and Devices; CNT Based Applications; Organic Electronics; Spintronics</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285662</span></li>
       <li><a href="brajesh-kumar-kaushik.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>Arnab Datta</span></li>
       <li><span id="he">Areas of Interest:</span><span>Micro (Nano) Electronic Devices: Electrical Characterization and Modeling of Semiconductor Devices, Non-Volatile Memories, Advanced MOSFET Reliability, MOS Device Fabrication, MEMS: Electro-mechanical Switches, Device Failure Mechanism, Photonics: Semiconductor Photonic Devices, Novel Photonic Devices
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285464</span></li>
       <li><a href="arnab-dutta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>Brijesh Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Optoelectronics, Quantum Dot-Light Emitting Devices, High efficiency solar cells, Microelectronic Fabrication, Minimizing RF sputtered Al's roughness, Moisture resistant alternative to sapphire Organic Semiconductors, Fabrication and modeling of organic LEDs and Solar cells
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284791</span></li>
       <li><a href="brijesh-kumar.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>Bishnu Prasad Das</span></li>
       <li><span id="he">Areas of Interest:</span><span>On-chip variability characterization, DFM-aware regular standard cell library design, Resilient circuit design, Hardware security, Low power circuit design</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284798</span></li>
       <li><a href="bishnu-prasad-das.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>M.V.Kartikeyan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Millimeter and THz Wave Engineering (Sources and Allied Components), Printed Antennas, and MICs, Gyrotrons, MSA/MICs, Soft-computing in MW-Domain</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285727</span></li>
       <li><a href="mv-kartikeyan.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Dharmendra Singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Polarimetric, Interferometric application of Radar, Electromagnetic wave interaction with various me
 </span></li>
       <li><span id="he">Contact:</span><span>91-1332-285695</span></li>
       <li><a href="Dharmendra-singh.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>Nagendra P. Pathak</span></li>
       <li><span id="he">Areas of Interest:</span><span>Radio Frequency Integrated Circuits and Systems, RFICs, Materials for Intelligent RF Systems, Millimeter wave ICs,Nano-Photonics
 </span></li>
       <li><span id="he">Contact:</span><span>91-1332-285771</span></li>
       <li><a href="nagendra-p-pathak.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="prof17.jpg" > <ul>
       <li><span id="he">Name:</span><span>Amalendu Patnaik</span></li>
       <li><span id="he">Areas of Interest:</span><span>Microstrip Antennas and Arrays, Array Signal Processing, Soft-computing Techniques in Microwave Engineering</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285850</span></li>
       <li><a href="Amalendu-patnaik.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof18.jpg" > <ul>
       <li><span id="he">Name:</span><span>Rajib Kumar Panigrahi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Information extraction from radar images, Radar signal processing,Target detection and estimation, Radar based remote sensing</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284767</span></li>
       <li><a href="rajib-kumar-panigrahi.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="prof19.jpg" > <ul>
       <li><span id="he">Name:</span><span>Karun Rawat</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power Amplifiers:, Broadband, load modulation, Doherty PA, pulse gate modulation, High Efficient PA modes, Transceiver Design:, All-digital transmitters, Transceivers, Digital control of RF circuits, Chip Design:, CMOS and GaN MMIC based power amplifiers design, mixed signal design, Modelling:, RF Power Amplifier Design with Embedding Device Model, RF Circuits:, Multi-port Networks, Modulators , RF Analog Processing, mixers, LNA</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284830</span></li>
       <li><a href="karun-rawat.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="prof20.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vijay Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Control System</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285609</span></li>
       <li><a href="vijay-kumar.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   
</body>
</html>