<?php
	require_once(__DIR__ . "/../model/config.php");
	//inserted php to form.php
	//not have access to config path
	require_once(__DIR__ . "/../controller/login-verify.php");

	if (!authenticateUser()) {
		header("location: " . $path . "index.php");
		//sending header to the web browser and ocntain 
		//information about a location and to access index.php
		die();
	}
?>

<h1>Create Blog Post</h1>
<!--says what you;re about to see-->

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
<!-- " post " tells it to send information-->
<!-- " action " tells path of information-->
	<div>
		<label for="title">Title: </label>
		<!--labeling posts-->
		<input type="text" name="title" />
	</div>

	<div>
		<label for="post">Post: </label>
		<!--going to appear in front of input box-->
		<textarea name="post"></textarea>
		<!--lets you have as much text as you want-->
	</div>

	<div>
		<button type="submit">Submit</button>
		<!--making submit button-->
		<!--needs to submit to actual database 
		does really nothing but refresh page-->
	</div>

</form>
