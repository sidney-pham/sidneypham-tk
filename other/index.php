<?php 
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/header.html";
include ($path);
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/nav.html";
include ($path);
?>
	<h2>This is an experimental page.</h2>

	<h2>Testing Form (NOW WORKING!)</h2>
	<h6>btw ur pwd is sort of secured (md5)</h6>
		<p id="error"></p>
		<form onsubmit="return validateForm()" method="POST" action="/formsubmit/index.php"> <!--action="../formsubmit/index.php"> -->
		<ul>
			<li>
				<label for="firstname">First Name</label>
				<input type="text" id="firstname" name="firstname" autofocus="autofocus">
			</li>
			<li>
				<label for="lastname">Last Name</label>
				<input type="text" id="lastname" name="lastname">
			</li>
			<li>
				<label for="email">Email Address</label>
				<input type="text" id="email" name="email"></input>
			</li>
			<li>	
				<label for="username">Choose a username</label>
				<input type="text" id="username" name="username">
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" id="password" name="password">
			</li>
			<li>
				<label for="message" class="textarealabel">Send me a message!</label>
				<textarea name="message" id="message" placeholder="Optional"></textarea>
			</li>	
			<br>
			<li>
				<input type="submit" value="Submit!" name="submit" class="button">		
			</li>
		</ul>		
	</form>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.html";
include ($path);
?>