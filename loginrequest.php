<?php 

$servername = "fdb23.biz.nf";
$username = "2826467_nonsense";
$password = "JG98zapx7!";
$dbname = "2826467_nonsense";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username FROM logins";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($_GET["name"] == $row["username"]){
			$_SESSION["loggedin"] = true;
			header("location:profile.php");
		} else{
			
		}
    }
} else {
    echo "0 results";
}
$conn->close();
	
?>