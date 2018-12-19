
(function(){
/*check if the emergency info exceeded certain limit will make it scrollable */
if ($(".emergency-info-container").height() > ( window.innerHeight * 0.5) * 0.8)
    {
        $(".emergency-info-container").style("overflowY","scroll");
    }

})();