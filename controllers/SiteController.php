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
        $registerModel = new Register();
        if ($request->getMethod() === 'post') {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Show success page';
            }

        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    public function contact()
    {
        return $this->render('contact');
    }
}