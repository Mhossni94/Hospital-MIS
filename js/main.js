 $(".nav-link").click(
    function () {
      $(this).parent().siblings().css("backgroundColor", "transparent");
      $("nav ul li").addClass("active").siblings("li").removeClass("active");
      $(this).parent().css("color", "#fff");
      var aHref = $(this).attr("href");
      var d = $(aHref).offset().top;
      $("html,body").animate({ scrollTop: d }, 2000)
    }
 )
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
