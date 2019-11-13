<?php
require('GulfTalent.class.php');
GulfTalent::showMeButtons();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GulfTalent jobs</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="jobs"></div>
	<script type="text/javascript">
		function showMeJobs(f){
			$('.jobs').load("GulfTalent.class.php","url="+f.value);
		}
	</script>
</body>
</html>