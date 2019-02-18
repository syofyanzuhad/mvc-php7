<?php
namespace App\Libraries;

use App\Libraries\View;

  /*
   * Base Controller
   * Loads the models and views
   */
class Controller {

    public function __construct($model)
    {
        return $this->model($model);
    }

    
    public function model($model){
        $Model = "App\Model\\" . $model;
        return $m = new $Model();
    }

    public function view($nameView, $data = [])
    {
        View::view($nameView, $data);
    }

    public function viewTemplate($template, $args = [])
    {
        View::viewTemplate($template, $args = []);
    }

}
