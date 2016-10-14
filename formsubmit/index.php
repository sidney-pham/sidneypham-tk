<?php 
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/header.html";
include ($path);

$connect = mysqli_connect("localhost", "root", "admin", "users");
$username = mysqli_real_escape_string($connect, $_POST["username"]);
$password = md5(mysqli_real_escape_string($connect, $_POST["password"]));
$plainpassword = mysqli_real_escape_string($connect, $_POST["password"]);
$firstname = mysqli_real_escape_string($connect, $_POST["firstname"]);
$lastname = mysqli_real_escape_string($connect, $_POST["lastname"]);
$email = mysqli_real_escape_string($connect, $_POST["email"]);
$message = mysqli_real_escape_string($connect, $_POST["message"]);
		
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($connect, "INSERT INTO users (firstname, lastname, email, username, password, message)
VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$message')");

mysqli_close($connect);
?>

<script>
var plainpassword = "<?php echo $plainpassword; ?>";

$(document).ready(function() {
	var a = 2;
	var pw = plainpassword;
	//even is hidden
	$("#showpassword").click(function() {
		
		console.log(a%2);
		if (a % 2 == 0) {
			$("#showpass").hide();
			$("#second").html(pw);
		}

		else {
			$("#showpass").show();
			$("#second").hide();
		}
		a += 1;
	});
});
</script>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/nav.html";
include ($path);
?>

	<h1>Confirmation</h1>

	<p>Hello, <?php echo "$firstname "."$lastname";?>!</p>
	<p>Your username is: <?php echo "$username";?>
	<br>
	Your password is: <span id="second"></span><span id="showpass">Click button to show password</span>
	</p>
	<a id="showpassword" class="button">Show password</a>		

	<br>
	<a href="../" class="button">Back to homepage</a>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.html";
include ($path);
?>