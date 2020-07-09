<?php
/**
 * User: TheCodeholic
 * Date: 7/9/2020
 * Time: 7:05 AM
 */

namespace app\core\form;


use app\core\Model;

/**
 * Class Form
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package core\form
 */
class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }

}