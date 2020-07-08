<?php
/**
 * User: TheCodeholic
 * Date: 7/7/2020
 * Time: 9:57 AM
 */
namespace app\core;

/**
 * Class Application
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app
 */
class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;

    public function __construct($rootDir)
    {
        self::$ROOT_DIR = $rootDir;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}