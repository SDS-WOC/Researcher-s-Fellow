<!DOCTYPE html>
<html>
<head>
	<title>POST HERE</title>
</head>
<body>
	<div id="cmnt">
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  	<h3>Post About Your Projects here:</h3>
  	Project Name<input type="text" name="projname" placeholder="Project Name" id="projname"><br>
  	Description:<textarea placeholder="Project Description" name="aboutproj" rows="20" cols="65" id="text"></textarea><br>
  	Intern:<textarea placeholder="Intern Description" name="aboutintern" rows="10" cols="65" id="text"></textarea><br>
  	<input type="submit" value="Post" id="post" name="post">
  </form>
</div>
</body>
</html>