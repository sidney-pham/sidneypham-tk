<?php
header("Content-disposition: attachment; filename=Sidney's top secret file");
header("Content-type: application/vnd.ms-powerpoint");
readfile("../files/comm.ppt");
?>