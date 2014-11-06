<h1>Create Blog Post</h1>
<!--says what you;re about to see-->

<form>
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
		<!--making submit button-->
		<!--needs to submit to actual database 
		does really nothing but refresh page-->
		<button type="submit">Submit</button>
	</div>

</form>