<?php

namespace App\Libraries;

use Illuminate\Http\Request;

class Templates
{
    //
    public $data = [];

    public function __construct()
    {

    }

    public function style(){
        $data['css'] = [
            'css/bootstrap.min.css',
            'plugins/fontawesome/css/fontawesome.min.css',
            'plugins/fontawesome/css/all.min.css',
            'plugins/select2/css/select2.min.css',
            'css/bootstrap-datetimepicker.min.css',
            'plugins/aos/aos.css',
            'css/feather.css',
            'css/owl.carousel.min.css',
            'css/style.css'
        ];

        $data['js_top'] = [
            'js/layout.js'
        ];

        $data['js'] = [
            'js/jquery-3.7.1.min.js',
            'js/bootstrap.bundle.min.js',
            'js/jquery.waypoints.js',
            'js/jquery.counterup.min.js',
            'plugins/select2/js/select2.min.js',
            'plugins/aos/aos.js',
            'js/backToTop.js',
            'plugins/moment/moment.min.js',
            'js/bootstrap-datetimepicker.min.js',
            'plugins/slick/slick.js',
            'js/owl.carousel.min.js',
            'plugins/theia-sticky-sidebar/ResizeSensor.js',
            'plugins/theia-sticky-sidebar/theia-sticky-sidebar.js',
            'js/script.js'
        ];
       return $data;
    }
}
