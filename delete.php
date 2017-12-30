<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="hidden" name="name" value="<?php echo $rowintern['projectname']; ?>">
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>