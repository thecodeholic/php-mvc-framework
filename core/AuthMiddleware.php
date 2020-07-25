<?php
/**
 * User: TheCodeholic
 * Date: 7/25/2020
 * Time: 11:33 AM
 */

namespace app\core;


use app\core\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\core
 */
class AuthMiddleware extends BaseMiddleware
{
    public function execute()
    {
        if (Application::isGuest()) {
            throw new ForbiddenException();
        }
    }
}