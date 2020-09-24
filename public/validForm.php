<?php

namespace MAIN\VALID_FORM;

class ValidForm
{
    public $name;
    public $nameSecond;
    public $cpf;
    public $email;
    public $state;
    public $city;

    public function __construct()
    {
        $this->fillInFields();

        foreach ($this as $mostrar) {
            echo $mostrar;
        }
    }

    public function fillInFields()
    {
        $this->name = $_POST['name'];
        $this->nameSecond = $_POST['nameSecond'];
        $this->cpf = $_POST['cpf'];
        $this->email = $_POST['email'];
        $this->state = $_POST['state'];
        $this->city = $_POST['city'];
    }
}

$start = new ValidForm();
