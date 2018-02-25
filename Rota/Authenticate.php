<?php 
include "../inc/dbinfo.inc";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, "Rota");

// Check connection
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

if (filter_has_var(INPUT_POST, 'signUp')) {
$sql = "INSERT INTO SecurityTest2 (UN, PW, Role)
VALUES ('".filter_input(INPUT_POST, "name")."', '".password_hash(filter_input(INPUT_POST, "password"), PASSWORD_BCRYPT)."','User')";

if ($conn->query($sql) === TRUE) {
	$to = 5000;
    echo "Login Added<br>";
} 
elseif ($conn->error == "Duplicate entry '".filter_input(INPUT_POST, "name")."' for key 'UN'") {
	$to = 5000;
	echo "Login already exists, try logging in";
}
else {
	$to = 15000;
    echo "Error: ".$conn->error."<br>";
}
}


elseif (filter_has_var(INPUT_POST, "logIn")) {
$sql = "SELECT PW, Role FROM SecurityTest2 where UN = '".filter_input(INPUT_POST, "name")."'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    while($row = $result->fetch_assoc()) {
        $hashed = $row["PW"];
		$role = $row["Role"];
		if(password_verify(filter_input(INPUT_POST, "password"), $hashed)) {
			$to = 0;
			session_start();
			setcookie("user", filter_input(INPUT_POST, "name"), strtotime(date("Y-m-d 23:59:59")), "/");
			$_SESSION["username"] = filter_input(INPUT_POST, "name");
			if ($role === "Admin") {
				$_SESSION["Admin"] = "true";
			}
			else {$_SESSION["Admin"] = "false";}
		}
		else {
			$to = 5000;
			echo "Password Incorrect.";
			
		}
    }
} else {
	$to = 5000;
    echo "Login Not Found";
}
}

elseif (filter_has_var(INPUT_POST, 'logOut')) {
	$to = 0;
	session_start();
	setcookie("user", "", time() - 3600, "/");
	session_destroy();
}
$conn->close();
?>
<br>
<div id="redirectText"></div>
<script>
var RQ = "<?php echo filter_input(INPUT_SERVER, 'HTTP_REFERER') ?>";
var TO = "<?php echo $to ?>";
if (RQ === "/Authenticate.php") {
	RQ = "/Rota.php";
}
setTimeout(function(){window.location.href=RQ;},TO);
var TO = TO/1000;
if (TO === 0) {
}
else {
	document.getElementById('redirectText').innerHTML = 'You will be redirected back in '+TO+' Seconds.';
}
</script>
