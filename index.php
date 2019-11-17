<?php
require('GulfTalent.class.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>IT News</title>
	<meta charset="utf-8">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<img src="img/logo.png">
		<div class="headerButton"><i class="fas fa-bars"></i></div>
		<p>Category: <span class="what">Select</span></p>
	</header>
	<div class="jobsMenu">
		<?php GulfTalent::showMeButtons(); ?>
	</div>
	<div class="jobs"></div>
	<footer class="footer">
		<img src="img/logo.png">
		<h2>Content downloaded from</h2>
		<a href="https://www.techrepublic.com" target="_blank">https://www.techrepublic.com/</a>
		<h2>RSS Feed</h2>
		<a href="https://www.techrepublic.com/rssfeeds/" target="_blank"><i class="fas fa-rss-square"></i></a>
	</footer>
	<script src="main.js"type="text/javascript"></script>
</body>
</html>