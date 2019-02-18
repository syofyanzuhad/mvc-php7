<?php

namespace App\Libraries;

class View {


    public static function viewTemplate($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig_Loader_Filesystem('../App/Views');
            $twig = new \Twig_Environment($loader);
        }

        echo $twig->render($template, $args);
    }


    public static function view($view, $data = []){

        extract($data, EXTR_SKIP);

        $file = "../App/Views/". $view . ".php";
        $erro = "../App/Views/404.html";

        if( file_exists($file)){
            require_once $file;
        } else {
            require_once $erro;
        }
    }
}