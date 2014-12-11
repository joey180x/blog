<?php
require_once(__DIR__ . "/../model/config.php");
//purpose is to access path file in config to link to the proper controller
?>

<h1>Login</h1>
<!--title for page-->

<form method="post" action="<?php echo $path . "controller/login-user.php";?>">
<!--this is how we are sending the information via php and php is going to store thisvariable and that is how were gonna access it-->
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username">
		<!--Username for blog-->
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
		<!--Password for blog-->
	</div>

	<div>
		<button type="submit">Submit</button>
		<!--Submit button-->
	</div>
</form>


