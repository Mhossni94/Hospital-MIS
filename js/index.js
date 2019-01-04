
(function emergencyScroll(){
/*check if the emergency info exceeded certain limit will make it scrollable */
if ($(".emergency-info-container").height() > ( window.innerHeight * 0.5) * 0.8)
    {
        $(".emergency-info-container").style("overflowY","scroll");

    }

})();
var x = $(".patient-data-container").height();
var y = $(".patient-info-tabs").innerHeight();
$(".left-side-info").innerHeight(x-y);
