<?php

namespace MAIN\COMPONENTS;

class Components
{
    public function hall()
    {
        require './partials/hall.php';
    }

    public function signForm()
    {
        require './partials/signUp.php';
    }

    public function loginForm()
    {
        require './partials/login.php';
    }
}
