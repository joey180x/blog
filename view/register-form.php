<?php
require_once(__DIR__ . "/../model/config.php");

?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
<!--register and create posts-->
	<div>
	<label for="email">Email: </label>
	<input type="text" name="email" />
	<!--sign in sheet for blog-->
	</div>

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