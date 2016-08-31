<?php

namespace App;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Controller
{

    public function someAction(Application $app, Request $request)
    {

        //return $app['twig']->render('page.twig');
        return 'works!';

    }

}
