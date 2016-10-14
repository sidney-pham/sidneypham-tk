<?php 
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/header.html";
include ($path);
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/nav.html";
include ($path);
?>

<h2>Nothing here yet!</h2>

<p>...Oh wait! What is this? IS THIS A FILE?</p>
<p style="font-size: 10px;">If you're reading this, please do not actually download the file. Thank you.</p>
<p style="font-size: 10px;">I'm serious. Don't even think about it.</p>
<a href="tempdownload.php" id="dl" data-chover="If you're reading this. Very funny, isn't it? Now GO AWAY. LAST CHANCE!">Download the test file</a>

<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.html";
include ($path);
?>