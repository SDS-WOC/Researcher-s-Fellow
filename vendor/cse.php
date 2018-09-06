<!DOCTYPE html>
<html>
<head>
	<title>CSE</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1> Computer Science and Engineering </h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table cseprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from cseprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="cse_prof1.jpg" ><ul>
       <li><span id="he">Name:</span><span>R.Balasubramanian</span></li>
       <li><span id="he">Areas of Interest:</span><span>Computer Vision- Optical Flow and Video Analytics, Fractional Transform Theory, Wavelet Analysis, Multimedia Security: Encrypted Domain Processing of Big Multimedia Data over Cloud, Biometrics, Content Based Video Retrieval, Video Skimming and Summarization, Medical Imaging, Long-Range Imaging, Hyperspectral Imaging, Machine Learning, Pattern Recognition, Multilingual Text Recognition, EEG based Pattern Analysis, Visualization, Volume Graphics</span></li>
       <li><span id="he">Contact:</span><span>9068680077, 285852</span></li>
       <li><a href="r-balasubramanian.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="cse_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>Biplab Banerjee</span></li>
       <li><span id="he">Areas of Interest:</span><span>Computer Vision, Machine Learning, Action recognition, zero-shot learning, parts based object recognition, target recognition</span></li>
       <li><span id="he">Contact:</span><span> +91-1332-285733</span></li>
       <li><a href="biplab-banerjee.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="cse_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ranita Biswas</span></li>
       <li><span id="he">Areas of Interest:</span><span>Digital Geometry, Computer Graphics, Mathematical Imaging, Discrete Geometry, Algorithms, Image Processing</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284878</span></li>
       <li><a href="ranita-biswas.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="cse_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sugata Gangopadhyay</span></li>
       <li><span id="he">Areas of Interest:</span><span>Cryptology, Cryptographic Boolean functions, Stream Cipher Cryptanalysis.</span></li>
       <li><span id="he">Contact:</span><span>911332-285646</span></li>
       <li><a href="sugata-gangopadhyay.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="cse_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sandeep Kumar Garg</span></li>
       <li><span id="he">Areas of Interest:</span>Software Engineering, Web Services, Software Engineering, Web Services, Exploring Machine learning and soft computing in these areas<span></span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285713</span></li>
       <li><a href="sandeep-kumar-garg.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="cse_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>MV Kartikeyan</span></li>
       <li><span id="he">Areas of Interest:</span>High-power Millimeter/THz Wave Engineering, Sources and Allied Components, Metamaterials and Fractals, Application in Planar Antennas, Filters and Microwave Circuits, Antenna Engineering/MICs, Printed Antennas, Filters and Allied Passive Components, Soft-computing, Soft-computing in Microwave Domain<span></span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285727</span></li>
       <li><a href="mv-kartikeyan.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="cse_prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>P. Sateesh Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Cloud Computing, Energy Efficiency, Resource Management, Load Balancing, Security, Trust, Virtualization, Mobile and Wireless Communications, Ad-hoc Networks, Sensor Networks, Pervasive Computing, Ubiquitous Computing, Cellular Networks, Network Security, Static Analysis, Behavioral Analysis, Anomaly Detection, IDS, DDoS detection, etc
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285647</span></li>
       <li><a href="p-sateesh-kumar.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="cse_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Manoj Mishra</span></li>
       <li><span id="he">Areas of Interest:</span><span>Distributed Computing, Performance Evaluation, Distributed Computing, Performance Evaluation</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285642</span></li>
       <li><a href="manoj-mishra.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="cse_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Rajdeep Niyogi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Automated Planning, Formal Methods, Web services Composition, Cybersecurity, Distributed Systems, Bioinformatics
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285896</span></li>
       <li><a href="rajdeep-niyogi.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="cse_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vaskar Raychoudhary</span></li>
       <li><span id="he">Areas of Interest:</span><span>Computer Networks, Wireless Sensor Networks, Social Networks, Internet of Things, Smart system development (smart city, smart transportation, smart healthcare, etc,), Distributed, Mobile and Pervasive Computing, Smartphone sensing, context-awareness, middleware, Future Internet Architecture, Named Data Networking</span></li>
       <li><span id="he">Contact:</span><span> 91-1332-285848</span></li>
       <li><a href="vaskar-raychoudhary.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="cse_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>Partha Pratim Roy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Pattern Recognition, Multilingual Text Recognition, Biometrics, Bio-Signal Analysis, EEG based Pattern Analysis, Computer Vision, Image Segmentation, Machine Learning, Temporal Data Analysis
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284816</span></li>
       <li><a href="partha-pratim-roy.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="cse_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sudip Roy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Algorithm Design and Computer Architecture, Algorithms for Chip Design, Microfluidic Biochips, Electronic Design Automation (EDA) and CAD for VLSI, High-Level Synthesis and Physical Design, Cyber-Physical System Design, IoT-based Systems, Smart Systems and Automation, Embedded Intelligence
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284815</span></li>
       <li><a href="sudip-roy.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="cse_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>Durga Toshniwal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Data Mining and Databases, Mining Time Series,Data Streams & Social Media Data,Privacy Preserving DM,Soft Computing in DM</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285687</span></li>
       <li><a href="durga-toshniwal.php">PROJECTS</a></li>
     </ul></p></div>
        
   </div>
   
</body>
</html>