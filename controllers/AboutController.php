<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 8:56 AM
 */

namespace app\controllers;


use thecodeholic\phpmvc\Controller;

/**
 * Class AboutController
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\controllers
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}