<?php

namespace MAIN;


class Main
{
    function __construct()
    {
        session_name('login');
        session_start();

        $this->constructorPage();
        $this->formConstructor();
    }

    public function constructorPage()
    {
        require './layout.html';
    }

    public function formConstructor()
    {
        require './partials/form.php';
    }
}

$start = new Main();
