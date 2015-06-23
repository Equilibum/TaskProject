<?php

class Validator {

    public $errors = 0;
    public $errormsg;
    public $inputFields = [];

    public function setFields($fields = [])
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            foreach ($fields as $val) {
                if(isset($_POST[$val]) && !empty($_POST[$val])){
                    $value = $_POST[$val];

                    $value = trim($value);
                    $value = stripslashes($value);
                    $value = strip_tags($value);
                    $value = htmlspecialchars($value);

                    $this->inputFields[$val] = $value;
                }else{
                    $this->errors = 1;
                    $this->errormsg = '<div class="container"><div class="alert alert-danger" role="alert">Заполните все поля!</div></div>';
                }
            }
            return $this->inputFields;
        }
    }

    public function fails()
    {
        return ($this->errors == 1)? true : false;
    }

    public function getErrors()
    {
        return $this->errormsg;
    }

    public function getData()
    {
        return $this->inputFields;
    }
}