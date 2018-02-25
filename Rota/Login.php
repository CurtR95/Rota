<?php
session_start();
?>

<html>
<link rel="stylesheet" type="text/css" href="Login.css">

<script type="text/javascript">

    var UN = "<?php echo filter_input(INPUT_COOKIE,"user"); ?>";
	
	function hide() {
		document.getElementById('Login').style.display = 'none'; 
		document.getElementById('Logout').style.display = 'none';
	}
	
	function hideLogin() {
		if (document.getElementById('HB').innerHTML === 'Hide Login') {
			hide();
			document.getElementById('HB').innerHTML = 'Show Login';
		}
		else if (document.getElementById('HB').innerHTML === 'Show Login') {
			document.getElementById('HB').innerHTML = 'Hide Login';
			if(UN!=='') {
				document.getElementById('Login').style.display = 'none'; 
				document.getElementById('Logout').style.display = 'inline';
			}	 
			else {
				document.getElementById('Login').style.display = 'inline';
				document.getElementById('Logout').style.display = 'none';
			}
		}
	}
	
</script>
<button id="HB" type="button" name="hideBar" onClick="hideLogin()" class="showlogin">Show Login</button>

<form action="Authenticate.php" method="post" id="Login" style="display:none;">
Name: <input type="text" name="name" required><br>
Password: <input type="password" name="password" required><br>
<button type="submit" name="logIn">Login</button>
<button type="submit" name="signUp">Sign Up</button>
</form>

<form action="Authenticate.php" method="post" id="Logout" style="display:none;">
<?php if (filter_input(INPUT_COOKIE,"user") == "") {} else {echo "Logged in as ".filter_input(INPUT_COOKIE,"user")."<br>"; }?>
<button type="submit" name="logOut">Log Out</button>
</form>
</html>