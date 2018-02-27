<?php 
include "../inc/dbinfo.inc";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, "Rota");

// Check connection
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

if (filter_has_var(INPUT_POST, 'signUp')) {
$sql = "INSERT INTO SecurityTest2 (UN, PW, Role)
VALUES ('".filter_input(INPUT_POST, "username")."', '".password_hash(filter_input(INPUT_POST, "password"), PASSWORD_BCRYPT)."','User')";

if ($conn->query($sql) === TRUE) {
	$to = 5000;
    echo "Login Added";
} 
elseif ($conn->error == "Duplicate entry '".filter_input(INPUT_POST, "username")."' for key 'UN'") {
	$to = 5000;
	echo "Login already exists, try logging in";
}
else {
	$to = 15000;
    echo "Error: ".$conn->error."<br>";
}
}

elseif (filter_has_var(INPUT_POST, "logIn")) {
$sql = "SELECT PW, Role FROM SecurityTest2 where UN = '".filter_input(INPUT_POST, "username")."'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    while($row = $result->fetch_assoc()) {
        $hashed = $row["PW"];
		$role = $row["Role"];
		if(password_verify(filter_input(INPUT_POST, "password"), $hashed)) {
			$to = 0;
			session_start();
			setcookie("user", filter_input(INPUT_POST, "username"), strtotime(date("Y-m-d 23:59:59")), "/");
			$_SESSION["username"] = filter_input(INPUT_POST, "username");
			if ($role === "Admin") {
				$_SESSION["Admin"] = "true";
			}
			else {$_SESSION["Admin"] = "false";}
                        echo "ok";
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

$conn->close();
