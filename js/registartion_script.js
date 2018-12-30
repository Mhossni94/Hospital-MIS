

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

