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


var button = document.getElementById("submit");
button.addEventListener("click",function(){
    alert("hello");
    var firstName = document.getElementById("firstName").value;
    var firstNameX = /[a-zA-z]{3,20}/;
    var lastNameX = /[a-zA-z]{3,20}/;

    var lastName = document.getElementById("lastName").value;
    var mobileNumber = document.getElementById("mobileNumber").value;
    var nationalId = document.getElementById("nationalId").value;
    var email = document.getElementById("email").value;
    var bloodType = document.getElementById("bloodType").value;

    if(firstNameX.test(firstName) == true)
    {
        console.log("true")
    }else{
        console.log("false")
    }
})


