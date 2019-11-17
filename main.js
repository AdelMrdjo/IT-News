function showMeJobs(f){
	$('.what').text($(f).text());
	$(".jobsMenu").find("*").css("background","#ddd");
	$(f).css("background","#00a800");
	$('.jobs').load("ajax.php","url="+f.value);
	$(".jobsMenu").animate({width: 'toggle'},"slow");
}
$(".headerButton").on("click",function(){
	$(".jobsMenu").animate({width: 'toggle'},"slow");
});