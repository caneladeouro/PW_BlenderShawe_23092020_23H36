<?php

namespace MAIN;

require './components.php';

use MAIN\COMPONENTS\Components as components;

class Main
{
    function __construct($cdPage)
    {
        if (isset($_GET['cdPage'])) {
            $cdPage = $_GET['cdPage'];
        } else {
            $cdPage = 0;
        }
        $this->showRouter($cdPage);
    }

    function showRouter($cdPage)
    {
        $components = new components();

        switch ($cdPage) {
            case 1:
                break;
            default:
                require './layout.php';
                $components->hall();
                break;
        }
    }
}

$start = new Main(1);
