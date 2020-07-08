<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 8:43 AM
 */

namespace app\core;


/**
 * Class Controller
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\core
 */
class Controller
{
    public string $layout = 'main';
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }
    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }
}