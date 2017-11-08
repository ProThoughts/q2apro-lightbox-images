/*
	Plugin Name: Lightbox Images
	Plugin URI: http://www.q2apro.com/plugins/lightbox
	Licence: Copyright © q2apro.com - All rights reserved
*/

$(document).ready(function(){
    // lightbox effect for images (overlay)
    $(".entry-content img").click(function(){
        $("#lightbox-popup").fadeIn("slow");
        $("#lightbox-img").attr("src", $(this).attr("src"));
        $("#lightbox-center").css("margin-top", ($(window).height() - $("#lightbox-center").height())/2  + 'px');
    });
    $("#lightbox-popup").click(function(){
        $("#lightbox-popup").fadeOut("fast");
    });
	// CSS
	var q2aproLightboxImagesCSS = '#lightbox-popup{ background:#000000; background:rgba(0,0,0,0.75); height:100%; width: 100%; position:fixed; top:0; left:0; display: none; z-index:1119; } #lightbox-center{ margin:6% auto; width:auto; text-align:center; } img#lightbox-img { padding:25px; background:#FFF }';
	$('head').append('<style type="text/css">' + q2aproLightboxImagesCSS + '</style>');
});
