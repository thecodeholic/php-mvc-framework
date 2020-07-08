<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 9:15 AM
 */

namespace app\models;


use app\core\Model;

/**
 * Class Register
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\models
 */
class Register extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;

    public function register()
    {

    }
}