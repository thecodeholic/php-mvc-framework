<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 8:43 AM
 */

namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\Register;

/**
 * Class SiteController
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function home()
    {
        return $this->render('home', [
            'name' => 'TheCodeholic'
        ]);
    }

    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->getMethod() === 'post') {
            $registerModel = new Register();
            $registerModel->loadData($request->getBody());
            echo '<pre>';
            var_dump($registerModel);
            echo '</pre>';
            exit;
        }
        $this->setLayout('auth');
        return $this->render('register');
    }

    public function contact()
    {
        return $this->render('contact');
    }
}