<?php
require_once(__DIR__ . "/../model/config.php");
//checks if file has already been included
require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
	header("location: " . $path . "index.php");
		//sending header to the web browser and ocntain 
		//information about a location and to access index.php
	die();
	}
?>
<nav>
	<ul>
		<li><a href="<?php echo $path . "posts.php"?>">Blog Post Form</a></li>
		<!-- adds new link to post.php -->
		<!-- echos your blog inside of posts.php -->
	</ul>
</nav>


