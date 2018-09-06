<!DOCTYPE html>
<html>
<head>
	<title>BIOTECH</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div id="header"><h1>Biotechnology</h1>
<h2>PROFESSORS</h2></div>
   <?php 
    include 'conn.php';
     //$table="create table biotechprofs (name varchar(30), aoi text)";
     //$crtable=$conn->query($table);
     //insert name and corresponding area of interest
       $text="";
       if ($_SERVER["REQUEST_METHOD"] === "POST")
       $text=$_POST["search"];
           if(!empty($text)){
           $search="select name from biotechprofs where aoi like '%".$text."%'";
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
      <div id="left"><p><img src="biotech_prof1.jpg" > <ul>
       <li><span id="he">Name:</span><span>Kiran Ambatipudi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Lipidomics, Mass spectrometry-based identification of bovine milk lipids, Proteomics, Characterization of bovine milk glycoproteins</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284786</span></li>
       <li><a href="kiran-ambatipudi.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof2.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ritu Barthwal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Molecular Biophysics, Structure, Conformation and Interactio of biomolecules by NMR/other techniques</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285807</span></li>
       <li><a href="ritu-barthwal.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="biotech_prof3.jpg" > <ul>
       <li><span id="he">Name:</span><span>Harsh Chauhan</span></li>
       <li><span id="he">Areas of Interest:</span><span>Plant Molecular Biology and Biotechnology, Functional and Comparative Genomics, Response to Biotic and Abiotic Stresses, Transgenic Crops</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284814</span></li>
       <li><a href="harsh-chauhan.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof4.jpg" > <ul>
       <li><span id="he">Name:</span><span>Bijan Choudhury</span></li>
       <li><span id="he">Areas of Interest:</span><span>Biochemical engineering, Biotransformation, Enzyme technology, metabolic modelling, bioenergy</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285297</span></li>
       <li><a href="bijan-choudhary.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="biotech_prof5.jpg" > <ul>
       <li><span id="he">Name:</span><span>Saurav Datta</span></li>
       <li><span id="he">Areas of Interest:</span>Bioseparation: Selective separation of biomolecules using advanced membrane technologies, , Biocatalysis: Engineering efficient enzymatic systems for sustainable products and processes, , Green and SustainableTechnologies: Synthesis & recovery of renewable fuels & chemicals, <span></span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284795</span></li>
       <li><a href="saurav-datta.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof6.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sanjay Ghosh</span></li>
       <li><span id="he">Areas of Interest:</span>Biochemical Engineering, Bioprocess development, Mathematical modelling and computer simulation of b, Biochemical Engineering, Bioprocess development, Mathematical modelling and computer simulation of b<span></span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285424</span></li>
       <li><a href="sanjay-ghosh.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="biotech_prof7.jpg" > <ul>
       <li><span id="he">Name:</span><span>P.Gopinath</span></li>
       <li><span id="he">Areas of Interest:</span><span>Cancer nanotechnology, Drug delivery, Biomaterials, Bioimaging, Tissue engineering, Environmental nanotechnology
 </span></li>
       <li><span id="he">Contact:</span><span>01332285650</span></li>
       <li><a href="p-gopinath.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof8.jpg" > <ul>
       <li><span id="he">Name:</span><span>Saugata Harza</span></li>
       <li><span id="he">Areas of Interest:</span><span>Structural Biology, Protein crystallography, Structure based drug development, Enzymology, Enzyme kinetics, Biophysical & biochemical studies, Structure-function relationship, Computational Biology, MD simulation, Virtual screening, Macromolecular interaction</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284800</span></li>
       <li><a href="saugata-harza.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="biotech_prof9.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pravindra Kumar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Protein-Protein Interactions, Protein Engineering, Structure based drug design, Crystallography, Infectious Diseases, Drug Resistance, Waste degradation, Plant therapeutic proteins
 </span></li>
       <li><span id="he">Contact:</span><span> 91-1332-285072</span></li>
       <li><a href="pravindra-kumar.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof10.jpg" > <ul>
       <li><span id="he">Name:</span><span>Prabhat Kumar Mandal</span></li>
       <li><span id="he">Areas of Interest:</span><span>Human Genetics, Genomics, Proteomics, Next generation sequencing, RNAi, Jumping genes in health and disease.</span></li>
       <li><span id="he">Contact:</span><span>91-1332-284780</span></li>
       <li><a href="prabhat-kumar-mandal.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="biotech_prof11.jpg" > <ul>
       <li><span id="he">Name:</span><span>Sulakshana P.Mukherjee</span></li>
       <li><span id="he">Areas of Interest:</span><span>Structural and Molecular Biology: Protein-protein, Protein-DNA interaction, :-------using NMR, various biophysical and biochemical methods
 </span></li>
       <li><span id="he">Contact:</span><span>+91-133228-4813</span></li>
       <li><a href="Sulakshana-p-mukherjee.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof12.jpg" > <ul>
       <li><span id="he">Name:</span><span>Maya S Nair</span></li>
       <li><span id="he">Areas of Interest:</span><span>Biophysics, Structural Biology, NMR and other spectroscopic techniques, Biomlecular interactions usingspectroscopic techniques and NMR, Biophysics, Structural Biology, NMR and other spectroscopic techniques, DNA-ligand interaction, Protein structure, protein -DNA interaction, Biophysics, Structural Biology, NMR and other spectroscopic techniques, Natural product isolation, characterization, biosynthesis of nanoparticles
 </span></li>
       <li><span id="he">Contact:</span><span>01332-285790</span></li>
       <li><a href="maya-s-nair.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="biotech_prof13.jpg" > <ul>
       <li><span id="he">Name:</span><span>Naveen Kumar Navani</span></li>
       <li><span id="he">Areas of Interest:</span><span>Molecular Biology, Synthetic Biology, Gene regulation, Microbial Biotechnology and Nanobiotechnology, Aptamers and MEMS nanodevices in Diagnostics, Probiotic recombinant enzymes, NanoBiotic Materials, Microbes' mediated bioremediation of polluted environments., Isolation and characterization of microbes from extreme and polluted environments.</span></li>
       <li><span id="he">Contact:</span><span>+91 1332 285677</span></li>
       <li><a href="naveen-kumar-navani.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof14.jpg" > <ul>
       <li><span id="he">Name:</span><span>Ranjana Pathania</span></li>
       <li><span id="he">Areas of Interest:</span><span>Molecular Biology, Bacterial Pathogenesis, Role of Small RNA in Acinetobacter baumannii, Antibacterial Drug Discovery, Chemical Genomics, Mode of Action of Novel Antibacterials in Gram, -negative bacteria, Multiple Drug Resistance in Bacteria, Discovery of Novel Efflux Pump Inhibitors, Antisense RNA based therapeutic strategies against bacterial pathogens, Pathogenesis of A. baumannii, Bioremediation of Pesticide contaminated soil, Characterization of Pesticide degrading Bacteria, Metagenomics</span></li>
       <li><span id="he">Contact:</span><span>01332-285324</span></li>
       <li><a href="ranjana-pathania.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="biotech_prof15.jpg" > <ul>
       <li><span id="he">Name:</span><span>Krishna Mohan Poluri</span></li>
       <li><span id="he">Areas of Interest:</span><span>Biomolecular NMR Spectroscopy, Molecular Biophysics, Structural Biology, Biophysical Chemistry, Protein Evolution-Structure-Stability-Dynamics-Function Paradigm, Biomolecular Interactions, Structure based Drug Design, Structural Immunology, Glycobiology, Structural Virology, Protein Folding
 </span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284779</span></li>
       <li><a href="krishna-mohan-poluri.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof16.jpg" > <ul>
       <li><span id="he">Name:</span><span>R.Prasad</span></li>
       <li><span id="he">Areas of Interest:</span><span>Molecular Biology & Proteomics,Biologically active Plant Products (proteins & Gluco-conjugates), Imm, Molecular Biology & Proteomics,Biologically active Plant Products (proteins & Gluco-conjugates), Imm
 </span></li>
       <li><span id="he">Contact:</span><span>91-01332-285791</span></li>
       <li><a href="r-prasad.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="biotech_prof17.jpg" > <ul>
       <li><span id="he">Name:</span><span>V.Pruthi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Microbiology, Biofilms, Biofuels, Molecular microbiology, Biosurfactants, Biofuels, Nanobiotechnology, Drug delivery systems</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285530</span></li>
       <li><a href="v-pruthi.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof18.jpg" > <ul>
       <li><span id="he">Name:</span><span>G.S.Randhawa</span></li>
       <li><span id="he">Areas of Interest:</span><span>Genetics/Biotechnology, Molecular Genetics of Rhizobium-legume Symbiosis, Plant Molecular Biology, Human Genetics</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-285808</span></li>
       <li><a href="g-s-randhawa.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="biotech_prof19.jpg" > <ul>
       <li><span id="he">Name:</span><span>Soma Rohatgi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Molecular Immunology, B cells and Antibodies, Vaccine Research, Infectious Diseases, Generation and characterization of murine and human monoclonal antibodies (microbial pathogens), Molecular Biology and Immunogenetics, Molecular Analysis of VDJ rearrangements at Single cell level, Antibody Repertoire studies, Clinical and Translational Immunology, Immunological case/control studies in the setting of Infectious Diseases (Fungal and/or Viral)</span></li>
       <li><span id="he">Contact:</span><span>01332-284831</span></li>
       <li><a href="soma-rohatgi.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof20.jpg" > <ul>
       <li><span id="he">Name:</span><span>Partha Roy</span></li>
       <li><span id="he">Areas of Interest:</span><span>Animal Biotechnology, , Molecular Endocrinology, , Mechanism of hormone actions, Stem Cell Biology, Cancer Biology and therapeutics, Tissue Engineering,</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285686</span></li>
       <li><a href="partha-roy.php">PROJECTS</a></li>
     </ul></p></div>
      </div>
      <div id="wht">
      <div id="left"><p><img src="biotech_prof21.jpg" > <ul>
       <li><span id="he">Name:</span><span>Pranita P.Sarangi</span></li>
       <li><span id="he">Areas of Interest:</span><span>Inflammation and cancer biology, sepsis, Cell-matrix interaction, cell migration, Immunomodulatory therapeutics, Cancer immunoediting</span></li>
       <li><span id="he">Contact:</span><span>91-1332-284788</span></li>
       <li><a href="pranita-p-sarangi.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof22.jpg" > <ul>
       <li><span id="he">Name:</span><span>A.K.Sharma</span></li>
       <li><span id="he">Areas of Interest:</span><span>Biochemistry, Biophysics, Macromolecular crystallography, Protein biochemestry and structural biology</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285657</span></li>
       <li><a href="a-k-sharma.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="biotech_prof23.jpg" > <ul>
       <li><span id="he">Name:</span><span>Deepak Sharma</span></li>
       <li><span id="he">Areas of Interest:</span><span>Computational Biology, Translational Bioinformatics, Systems Biology, Regulatory genomics, Pathways/Networks, Motifs, miRNAs, MD simulation, Flaviviruses, Mycobacteria, Metagenomics</span></li>
       <li><span id="he">Contact:</span><span>91-1332-284827</span></li>
       <li><a href="deepak-sharma.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof24.jpg" > <ul>
       <li><span id="he">Name:</span><span>R.P.Sharma</span></li>
       <li><span id="he">Areas of Interest:</span><span>Microbial Biotechnology, Nanobiotechnology, Microbial Enzymes, Molecular Biology, Biofuels, Bioremediation, Drug Delivery Systems</span></li>
       <li><span id="he">Contact:</span><span>91-01332-285792</span></li>
       <li><a href="r-p-sharma.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="wht">
      <div id="left"><p><img src="biotech_prof25.jpg" > <ul>
       <li><span id="he">Name:</span><span>Debabrata Sircar</span></li>
       <li><span id="he">Areas of Interest:</span><span>ROSomics, The use of genetics and genomics resources for the improvement of fruit quality of Rosaceous plant, Metabolic Pathway Engineering, Elucidation & engineering of secondary metabolic pathways in selected medicinal plants</span></li>
       <li><span id="he">Contact:</span><span>(91)-1332 285540</span></li>
       <li><a href="debabrata-sircar.php">PROJECTS</a></li>
     </ul></p></div>
        <div id="right"><p><img src="biotech_prof26.jpg" > <ul>
       <li><span id="he">Name:</span><span>Shailly Tomar</span></li>
       <li><span id="he">Areas of Interest:</span><span>Antiviral research, Discovery of structure based antivirals against RNA arboviruses (Chikungunya), Molecular and Structural Virology, Structural studies (X-ray and Cryo Electron microscopy (CryoEM) of pathogenic virus/viral proteins, Molecular biology and Biochemistry, Studies of potential drug targets (Dengue, Zika, E. histolytica, Bacteria), Molecular diagnostics, Molecular diagnosis of infectious viral diseases epidemic in India and Indian subcontinent</span></li>
       <li><span id="he">Contact:</span><span>01332-285849</span></li>
       <li><a href="shailly-tomar.php">PROJECTS</a></li>
     </ul></p></div>
   </div>
   <div id="blk">
      <div id="left"><p><img src="biotech_prof27.jpg" > <ul>
       <li><span id="he">Name:</span><span>Shri Ram Yadav</span></li>
       <li><span id="he">Areas of Interest:</span><span>Plant Developmental Biology, Functional genomics of root morphology in rice and Arabidopsis: Forward and Reverse Genetics</span></li>
       <li><span id="he">Contact:</span><span>+91-1332-284782</span></li>
       <li><a href="Shri-ram-yadav.php">PROJECTS</a></li>
     </ul></p></div>
        
   </div>
   
</body>
</html>