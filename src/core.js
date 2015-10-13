$(document).ready(function() {});

$(window).load(function() {
$("#bg").show();

function resizeBg(){if(theWindow.width()/theWindow.height()<aspectRatio){$bg.removeClass().addClass("bgheight")}else{$bg.removeClass().addClass("bgwidth")}}var theWindow=$(window),$bg=$("#bg"),aspectRatio=$bg.width()/$bg.height();theWindow.resize(resizeBg).trigger("resize")

});