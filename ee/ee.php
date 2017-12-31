<!DOCTYPE html>
<html>
<head>
	<title>EE</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Electrical Engineering</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table eeprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from eeprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="ee_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pramod Agarwal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Electrical Machines, Power Electronics, Microprocessors, Microcomputers Controlled Electric Drives, Electrical Machines, Power Electronics, Microprocessors, Microcomputers Controlled Electric Drives</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="pramod-agarwal.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>R.S.Anand</span></li>
       <li><span id="he">Areas of Interest:</span><span>Microprocessor and Computer Based Instrumentation, Ultrasonic Imaging in NDE and Medical Diagnosis, Instrumentation and Signal Processing, Biomedical Signal and Image Processing, Biomedical Instrumentation, Digital Signal and Image Processing, Microprocessor and Computer Based I, Biomedical Instrumentation, Digital Signal and Image Processing</span></li>
       <li><span id="he">Contact:</span><span>01332-285590</span></li>
       <li><a href="rs-anand.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Bhavesh Bhalja</span></li>
       <li><span id="he">Areas of Interest:</span><span>Protection and Switchgear, Energy Conservation, Power System Analysis, Digital Protection, Distributed Generation, Smart Grid Technology, Wide Area Measurement & Control, Power Quality Improvement, Microgrid, Application of Artificial Intelligence Techniques to Power System, Fault Detection & Classification, Power System Planning and Design, Substation Automation and Control, Condition Monitoring of Electrical Equipments</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="bhavesh-bhalja.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Avik Bhattacharya</span></li>
       <li><span id="he">Areas of Interest:</span><span>DC micro grid, source disturbance in DC micro grid and Stability, Electric vehicle, power electroincs, Flexible AC Transmission System, Shunt Active Power Filter/UPQC, Advance Electric Drive, investigation on multilevel inveter and its control, Renewable energy, Application of SST in WECS, Renewable Energy, Solar inverter topology</span></li>
       <li><span id="he">Contact:</span><span>91-1331285375</span></li>
       <li><a href="avik-bhattacharya.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="ee_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sohom Chakrabarty</span></li>
       <li><span id="he">Areas of Interest:</span>Control Systems, Sliding Mode Control, Integrated Systems Solutions, Control of Multicopters and UAVs (Projects Open), Modelling and Simulation, Biological System Modelling and Analysis (Projects Open)<span></span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="sohom-chakrbarty.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sumit Ghatak Choudhuri</span></li>
       <li><span id="he">Areas of Interest:</span>Power Electronics and Electric Drives, Analysis, DSP based control, Power Quality,Uni-modular and Multi-Modular UPS Inverters Systems<span></span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285034,5047</span></li>
       <li><a href="sumit-ghatak-choudhuri.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>B.Das</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power Distribution Automation , Facts, Power System Harmonics, Power Distribution Automation , Facts, Power System Harmonics
 </span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="b-das.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sharmili Das</span></li>
       <li><span id="he">Areas of Interest:</span><span></span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="sharmili-das.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="ee_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Anubrata Dey</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power Electronics and Variable speed Drives, Electric Drives & Control, PWM techniques, Multilevel Inverter, DC/DC converter, Electric Vehicle, DC/AC and AC/DC converter, Topologies and control methods using Microcontrollers/DSP/FPGA, Control techniques for integration of Energy storage Devices, Optimization techniques
 </span></li>
       <li><span id="he">Contact:</span><span> 91-1332-284836</span></li>
       <li><a href="anubrata-dey.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Eugene Fernandez</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power System Engineering, Power System Engineering</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="eugene-fernandez.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>C.P.Gupta</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power Quality, Voltage sag analysis, Application of Wavelet Transforms, Reliability evaluation of po
 </span></li>
       <li><span id="he">Contact:</span><span>+91-133228-5594</span></li>
       <li><a href="c-p-gupta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>Indra Gupta</span></li>
       <li><span id="he">Areas of Interest:</span><span>Process Control Applications, Microprocessor Applications, ANN, Online Control Applications, Simulation, Process Control Applications, Microprocessor Applications, ANN, Online Control Applicati, Simulation
 </span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="indra-gupta.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="ee_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>S.P.Gupta</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power Electronics Condition Monitoring Of Electric Device, Power Electronics Condition Monitoring Of Electric Device.</span></li>
       <li><span id="he">Contact:</span><span>9837074284</span></li>
       <li><a href="sp-gupta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>Yogesh Vijay Hote</span></li>
       <li><span id="he">Areas of Interest:</span><span>Control Systems, Kharitonov's theorem,PID Control, IMC Control, Fractional order Control, LQR Control, NMP Control, Robust Controller Design, Applications in Load Frequency Control, Inverted Pendulum, Servo Systems, DC-DC Converters, Model order Reduction Techniques, Linear and Interval system modelling, Applications in Power Systems</span></li>
       <li><span id="he">Contact:</span><span>01332-285134</span></li>
       <li><a href="yogesh-vijay-hote.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Premalata Jena</span></li>
       <li><span id="he">Areas of Interest:</span><span>Smart Grid, Smart grid technology and protection, Microgrid, Microgrid Protection, Signal processing apllication to power system relaying, Power system Protection, Protection Issues with FACTS Devices, Protection Scheme Development for a line with FACTS devices, Disturbance localization, Signal processing application for disturbance localization
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284757</span></li>
       <li><a href="premalata-jena.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>Dheeraj K Khatod</span></li>
       <li><span id="he">Areas of Interest:</span><span>Distributed Generation Systems, Hybrid and Integrated Renewable Energy System, Variable Frequency Transformer
 </span></li>
       <li><span id="he">Contact:</span><span>91-01332-285690</span></li>
       <li><a href="dheeraj-k-khatod.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="ee_prof17.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vishal Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Distributed Generation, Power System Automation, Power System Restoration, Smart Power Networks, Digital System Design, Embedded System Development</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285897</span></li>
       <li><a href="vishal-kumar.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof18.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ganesh Kumbhar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Distributed Generation Planning and Analysis, Distributed generation planning, Smart Grid Technologies and Applications, Smart Grid Technologies and Applications, Power and Distribution Transformers, Modeling and simulation, design and analysis, Finite Element Analysis of Power Apparatus, Finite Element Analysis of electrical machines and transformers, Electromagnetics and Coupled Field Analysis, Applications of coupled field formulations for analysis electrical machines</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284752</span></li>
       <li><a href="ganesh-kumbhar.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof19.jpg" > <ul>
       <li><span id="he">Name:</span><span>R.P.Maheshwari</span></li>
       <li><span id="he">Areas of Interest:</span><span>Digital Instrumentation/Real-time Control/Digital Protective Relays/AI Application in Protective Rel, Digital Protective Relays , Power System Monitoring and Control, Digital Instrumentation, Traction S</span></li>
       <li><span id="he">Contact:</span><span>01332-285596</span></li>
       <li><a href="rp-maheshwari.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof20.jpg" > <ul>
       <li><span id="he">Name:</span><span>M.Felix Orlando</span></li>
       <li><span id="he">Areas of Interest:</span><span>Medical Robotics:, Real-Time Control of Active Flexible Needle for Percutaneous Intervention, Rehabilitation Robotics:, Design and Control of Hand and Leg Exoskeletons using EMG/EEG signal with Touch/Force/Angular sensor, Human Hand Biomechanics:, Redundancy Resolution of Human Fingers while performing Activities of Daily Living, Visual Servoing:, Ball Plate Balancing System using Realtime Vision Feedback, Virtual Instrumentation:, Signal Processing and Manipulation</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="m-felix-orlando.php">PROJECTS</a></li>
     </ul></p></div>
      </div>
      <div id="wht">
      <div id="left"><p><img src="ee_prof21.jpg" > <ul>
       <li><span id="he">Name:</span><span>N.P.Padhy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power System Engineering, Transmission and Distribution System Analysis, Energy Market, Network Pricing and AC-DC Smart Grid</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285587</span></li>
       <li><a href="np-padhy.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof22.jpg" > <ul>
       <li><span id="he">Name:</span><span>Vinay Pant</span></li>
       <li><span id="he">Areas of Interest:</span><span></span></li>
       <li><span id="he">Contact:</span><span>91-01332-285396</span></li>
       <li><a href="vinay-pant.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof23.jpg" > <ul>
       <li><span id="he">Name:</span><span>M.K.Pathak</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power Electronics, variable-speed drives, analysis of electrical machines and renewable energy.</span></li>
       <li><span id="he">Contact:</span><span>91-1332-285220</span></li>
       <li><a href="mk-pathak.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof24.jpg" > <ul>
       <li><span id="he">Name:</span><span>G.N.Pillai</span></li>
       <li><span id="he">Areas of Interest:</span><span>Control Systems, System Engineering, Soft Computing Techniques, FACTS</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285198</span></li>
       <li><a href="gn-pillai.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="ee_prof25.jpg" > <ul>
       <li><span id="he">Name:</span><span>Rajendra Prasad</span></li>
       <li><span id="he">Areas of Interest:</span><span>Control Optimization, System Engineering And Model Order Reduction Of Large Scale Systems, Control Optimization, System Engineering And Model Order Reduction Of Large Scale Systems</span></li>
       <li><span id="he">Contact:</span><span>(91)-1332 285068</span></li>
       <li><a href="rajendra-prasad.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof26.jpg" > <ul>
       <li><span id="he">Name:</span><span>Jeevanand Seshadrinath</span></li>
       <li><span id="he">Areas of Interest:</span><span>Electrical systems condition monitoring, Diagnosis and prognosis of electrical machines and drives (Model based and data driven), Power electronic drives, electrical machines and electrical systems, Application of advanced signal analysis and machine learning in power electronic drives and machines</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="jeevanand-seshadrinath.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof27.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ambalika Sharma</span></li>
       <li><span id="he">Areas of Interest:</span><span>Biomedical Engineering, Signal Processing, Neural Networks, Biomedical Engineering, Signal Processing, Neural Networks</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284782</span></li>
       <li><a href="ambalika-sharma.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof28.jpg" > <ul>
       <li><span id="he">Name:</span><span>Girish K singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Electrical Machines and Drives, Power System Harmonics, Biomedical Signal Processing, Renewable Energy Generation, Multirate Filter, Remote Image Signal Processing</span></li>
       <li><span id="he">Contact:</span><span></span></li>
       <li><a href="girish-k-singh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="ee_prof29.jpg" > <ul>
       <li><span id="he">Name:</span><span>S.P.Singh</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power Apparatus, Electric Device, Power Apparatus and Electric Drives</span></li>
       <li><span id="he">Contact:</span><span>(91)-1332 285827</span></li>
       <li><a href="sp-singh.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof30.jpg" > <ul>
       <li><span id="he">Name:</span><span>Satya P.Srivastava</span></li>
       <li><span id="he">Areas of Interest:</span><span>Electric Machines and Drives, Electric Machines and Drives</span></li>
       <li><span id="he">Contact:</span><span>01332285583</span></li>
       <li><a href="satya-p-srivastava.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="ee_prof31.jpg" > <ul>
       <li><span id="he">Name:</span><span>P.Sumathi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Control and signal processing, phase locking schemes, sliding DFT filters, multi-component decomposition, Parameter esitmation, on-line estimation of sinusoidal and exponentially decaying sinusoidal signal parameters, Instrumentation, vibration measurement, capacitance measurement,ultrasonics</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285259</span></li>
       <li><a href="p-sumanthi.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="ee_prof32.jpg" > <ul>
       <li><span id="he">Name:</span><span>Manoj Tripathy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Testing of Electrical Equipment, Calibration of meters, Power System Automation,Protection Scheme Development for a line with FACTS devices, Power System Protection, Application of AI in Development of Digital Relays, Relay Testing,, Smart Grid Protection, Microgrid Protection,Speech Signal Enhancement,Smart Metering System, Digital Signal and Image Processing, signal and image processing problems, Applying meaching learning to inverse problems</span></li>
       <li><span id="he">Contact:</span><span>013332285431</span></li>
       <li><a href="manoj-tripathy.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="ee_prof33.jpg" > <ul>
       <li><span id="he">Name:</span><span>Barjeev Tyagi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Power System, Wide Area System Monitiring and Control, Power System, Control system, Wide Area System Monitiring and Control, Power System, Power System Deregulation, Power System, Power system Operation and Control, Control System, Controller Design</span></li>
       <li><span id="he">Contact:</span><span>(91)-1332 285894</span></li>
       <li><a href="barjeev-tyagi.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
</body>
</html>