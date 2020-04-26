<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",
        "css/owl.carousel.css",
		"css/owl.transitions.css",
        "css/animate.min.css",
        "css/lightbox.css",
		"css/preloader.css",
	    "css/image.css",
	    "css/icon.css",
        "css/style.css",
        "css/responsive.css",
    ];
    public $js = [
       // "js/jquery-1.11.3.min.js",
         "https://code.jquery.com/jquery-3.4.1.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA",
        "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
		"js/waypoints.min.js",
		"js/lightbox.js",
		"js/jquery.counterup.min.js",
		"js/owl.carousel.min.js",
		"js/html5lightbox.js",
		"js/jquery.mixitup.js",
		"js/wow.min.js",
		"js/jquery.scrollUp.js",
		"js/jquery.sticky.js",
		"js/jquery.nav.js",
		"js/main.js",
        ""
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
