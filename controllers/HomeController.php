<?php

namespace app\controllers;

use \app\components\base\Controller as BaseController;
use app\components\Auth;
use app\models\Post;

class HomeController extends BaseController
{

    public function indexAction()
    {

        $posts = Post::findHome();

        $this->render('views/home/index', ['posts' => $posts]);
    }

    public function loginAction()
    {

        $login = Auth::create();

        if ($_POST['login']) {

            $login->loadAttributes($_POST['login']);

            if ($login->validate() && $login->login()) {
                //Set a flash message here.
                $this->redirect('home/index');
            }

        }

        $this->render('views/home/login', ['login' => $login]);
    }

    public function logoutAction()
    {

        Auth::logout();
        //Set a flash message here.
        $this->redirect('home/index');
    }


}
