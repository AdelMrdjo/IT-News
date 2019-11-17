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
	private function clearDate($date){
		return date_format(date_create($date),"d M Y - H:i");
	}
	public function showMeJobs($url){
		$feed = simplexml_load_file($_GET['url']);
		foreach($feed->channel->item as $news){
			echo "<div class='news'>";
			echo "<h4>{$news->title}</h4>";
			echo "<p class='published'>".self::clearDate($news->pubDate)."</p>";
			echo "<p class='content'>{$news->description}</p>";
			echo "<a href='{$news->link}' target='_blank'>Read more</a>";
			echo "</div>";
		}
	}
}
?>