var counter = 0;

var addClass = function(ele,clas1,clas2,clas3,clas4){
    var x = document.getElementsByTagName(ele);
    for(i = 0;i<x.length;i++){
    x[i].classList.add(clas1,clas2,clas3,clas4);
}
}


addClass("input","form-control");

function addOption(selector,start,end){
    for(var i = start;i<=end;i++){
        $(selector).append("<option value=\""+i+"\">"+i+"</option>")
    };
}
addOption("#day",1,31);
addOption("#month",1,12);
addOption("#year",1900,2019);
addOption("#insurance",1,5);


var button = document.getElementById("submit");
function validate(){
    
    var firstName = document.getElementById("firstName").value;
    var firstNameX = /[a-zA-z]{3,20}/;
    var lastNameX = /[a-zA-z]{3,20}/;
    var mobileNumberX = /^(002|\+2)?01(0|1|2|5)[0-9]{8}/;
    var nationalIdX = /(2|3)[0-9][1-9][0-1][1-9][0-3][1-9](01|02|03|04|11|12|13|14|15|16|17|18|19|21|22|23|24|25|26|27|28|29|31|32|33|34|35|88)\d\d\d\d\d/;
    var emailX = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var bloodTypeX = /^(A|B|AB|O|a|b|ab|o)[-+]$/;
    

    var lastName = document.getElementById("lastName").value;
    var mobileNumber = document.getElementById("mobileNumber").value;
    var nationalId = document.getElementById("nationalId").value;
    var email = document.getElementById("email").value;
    var bloodType = document.getElementById("bloodType").value;

     if(firstNameX.test(firstName) == false)
    {
        
    
        document.getElementsByClassName('firstwarning')[0].style.display = 'block';
    }
     if(lastNameX.test(lastName) == false)
    {
 
        document.getElementsByClassName('lastwarning')[0].style.display = 'block';
    }
    if(mobileNumberX.test(mobileNumber) == false)
    {
        
  
        document.getElementsByClassName('mobilewarning')[0].style.display = 'block';
    }
     if(nationalIdX.test(nationalId) == false)
    {
  
        document.getElementsByClassName('idwarning')[0].style.display = 'block';
    }
     if(emailX.test(email) == false)
    {
    
        document.getElementsByClassName('emailwarning')[0].style.display = 'block';
    }
     if(bloodTypeX.test(bloodType) == false)
    {
        
   
        document.getElementsByClassName('bloodwarning')[0].style.display = 'block';
    }
    


return((firstNameX.test(firstName) == true)&&(lastNameX.test(lastName) == true)&& (mobileNumberX.test(mobileNumber) == true) && (nationalIdX.test(nationalId) == true)&&(emailX.test(email) == true)&& (bloodTypeX.test(bloodType) == true));
}