<?php
$xml = simplexml_load_file("adress.xml");
foreach($xml as $adress){
	echo "<button onclick='showMeJobs(this)' value='".clearLink($adress->url)."'>".$adress->opis."</button>";
}
function clearLink($f){
	return str_replace("#","&",$f);
}

if(isset($_POST['Feed'])){
	$feed = simplexml_load_file($_POST['Feed']);
	foreach($feed->channel->item as $vijest){
		echo "<div style='border: 1px solid #d3d3d3; margin-bottom:4px;'>";
		echo "<div style='background-color:#d3d3d3;padding:2px;'>".$vijest->title.$vijest->pubDate."</div>";
		echo "<div style='padding:2px;'>".$vijest->description."</div>";
		echo "<div style='padding:2px;'><a href='".$vijest->link."'>Pročitaj više...</a></div>";
		echo "</div>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>GulfTalent jobs</title>
</head>
<body>
	<script type="text/javascript">
		function showMeJobs(f){
			alert(f.value);
		}
	</script>
</body>
</html>