<?php 
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/header.html";
include ($path);
?>

	<script src="/js/randomiser.js"></script>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/nav.html";
include ($path);
?>
	<form name="randomiser" onsubmit="return false;">
		<ul>
			<li>
				<label for="list">List of things to randomise (separate with new lines): </label>
				<textarea rows="20" cols="20" type="text" name="list" id="list" class="textarealabel" placeholder="List of things" autofocus="autofocus"></textarea>
			</li>
			<br>
			<li>
				<input type="button" name="submit" value="Randomise!" class="button" onclick="listRandomise()">
			</li>
		</ul>
	</form>

	<p id="randomised"></p>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.html";
include ($path);
?>

