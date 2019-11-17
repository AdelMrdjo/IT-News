<?php
require('GulfTalent.class.php');

if(isset($_GET['url'])){
	$url = $_GET['url'];
	GulfTalent::showMeJobs($url);
}
?>