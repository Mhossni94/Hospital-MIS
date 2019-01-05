$(window).scroll(function(){
	
	var scrlTop = $(window).scrollTop();

	if(scrlTop > 300 )
		{
		$("nav").css("backgroundColor","#F8F9FA")	
		}
	else
		{
		$("nav").css("backgroundColor","rgba(255 ,255, 255,0.2)")	
			
		}
	

	if(scrlTop > 10 )
		{
		$("#scrllTop").fadeIn()	
		}
	else
		{
		$("#scrllTop").fadeOut()	
			
		}	
})



$("#scrllTop").click(function(){
	
	
	$("html,body").animate({scrollTop:'0'},1000)
})
