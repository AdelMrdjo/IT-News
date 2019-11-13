<?php
class GulfTalent{
	public function showMeButtons(){
		$xml = simplexml_load_file("adress.xml");
		foreach($xml as $adress){
			echo "<button onclick='showMeJobs(this)' value='".self::clearLink($adress->url)."'>".$adress->category."</button>";
		}
	}
	private function clearLink($link){
		return str_replace("#","&",$link);
	}
	public function showMeJobs($url){
		$feed = simplexml_load_file($_GET['url']);
		foreach($feed->channel->item as $news){
			echo "<div style='border: 1px solid #d3d3d3; margin-bottom:4px;'>";
			echo "<div style='background-color:#d3d3d3;padding:2px;'>".$news->title.$news->pubDate."</div>";
			echo "<div style='padding:2px;'>".$news->description."</div>";
			echo "<div style='padding:2px;'><a href='".$news->link."' target='_blank'>Read more...</a></div>";
			echo "</div>";
		}
	}
}
if(isset($_GET['url'])){
	$url = $_GET['url'];
	GulfTalent::showMeJobs($url);
}
?>