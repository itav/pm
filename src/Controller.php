<?php

namespace App;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Controller
{

    public function someAction(Application $app, Request $request)
    {

        return $app['twig']->render('page.twig');
        //return 'works!';

    }

    public function loginAction(Application $app, Request $request)
    {
        session_start();
        if(isset($_SESSION['is_logged']) && true === $_SESSION['is_logged']){
            return $app->redirect('/');
        }

        $submit = $request->get('submit', false);
        $user = $request->get('user', '');
        $pass = $request->get('pass', '');
        if ($submit && $user === 'sylwek' && $pass === 'admin') {
            $_SESSION['is_logged'] = true;
            $_SESSION['user'] = 'Sylwek';
            return $app->redirect('/');
        }
        $_SESSION['is_logged'] = false;
        return $app['twig']->render('login.twig');
    }

    public function logoutAction(Application $app, Request $request)
    {
        session_start();
        session_unset();
        return $app->redirect('/login');
    }


}
