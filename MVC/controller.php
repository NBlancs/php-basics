<?php

require_once 'model.php'; // manual import ey

class UserController {
    public function showProfile(){
        $model = new User();
        $name = $model->getName();

        // include gains access to $name variable
        include 'view.php';
    }
}