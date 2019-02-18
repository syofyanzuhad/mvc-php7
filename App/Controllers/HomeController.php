<?php

namespace App\Controllers;
use App\Libraries\Controller;
use App\Libraries\View;

class HomeController extends Controller  {

    private $model = "Posts";

    public function __construct() {
        $this->model = parent::__construct($this->model);
    }

    public function index() 
    {

        $this->viewTemplate("Home/index.html", $data = array(
            "name" => "lucas",
            "colours" => array(
                "Red", "black"
            )
        ));
    }

    public function exe(){
       
    }
}