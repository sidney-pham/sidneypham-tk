<?php 
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/header.html";
include ($path);
?>

<title>Experimental Page</title>
<script src="/js/experimental.js"></script>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/experimental/nav.html";
include ($path);
?>

<h2>This page is under construction.</h2>
<h3>This is just a random calculator.</h3>
<h4>Enter value in cm to convert to mm.</h4>
<form name="calculator" onsubmit="return false;">
	<ul>
		<li>
			<label for="number">Enter number: </label>
			<input type="text" name="number" id="number" placeholder="Number" autofocus="autofocus" onkeypress="enterPressCalculate()">
		</li>
		<br>
		<li>
			<input type="button" name="submit" value="Calculate!" class="button" onclick="calculate()">
		</li>
	</ul>
</form>
<br>

<iframe src="http://www.acapela-group.com/demo-tts/DemoHTML5Form_V2.php?langdemo=Powered+by+%3Ca+href%3D%22http%3A%2F%2Fwww.acapela-vaas.com%22%3EAcapela+Voice+as+a+Service%3C%2Fa%3E.+For+demo+and+evaluation+purpose+only%2C+for+commercial+use+of+generated+sound+files+please+go+to+%3Ca+href%3D%22http%3A%2F%2Fwww.acapela-box.com%22%3Ewww.acapela-box.com%3C%2Fa%3E" frameborder="0" height="430px;" width="264px" style="margin-bottom: 50px;"></iframe>

<iframe src="http://www.collinsdictionary.com/dictionary/english-french" frameborder="0" height="900px" width="1000px" style="position: absolute; top: -9999em; visibility: hidden; margin-bottom: 50px;" onload="this.style.position='static'; this.style.visibility='visible';" href="..."></iframe>

<div id="universe"> 
    <img id="sun" src="/img/sun.png">
    <div id="earth-orbit">
        <img id="earth" src="/img/earth.png">
    </div>
</div>	

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.html";
include ($path);
?>





