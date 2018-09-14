<?php session_start(); 
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    		
		} else{
			header("location:index.php");
		}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	logged in successfully 
</body>
</html>