<?php
class Controller
{
    public function view($title, $path, $data = [])
    {
        require_once 'app/view/templates/header.php';
        require_once "app/view/$path.php";
        require_once 'app/view/templates/footer.php';
    }

    public function model($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model;
    }
}
