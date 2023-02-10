<?php

namespace routes;

use controllers\SampleWebController;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();

        Route::Add('/', [$main, 'home']);
        Route::Add('/pokemon/{slug}', [$main, 'pokemon']);
    }
}

