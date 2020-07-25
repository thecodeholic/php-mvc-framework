<?php
/**
 * User: TheCodeholic
 * Date: 7/25/2020
 * Time: 10:13 AM
 */

namespace app\core;


/**
 * Class UserModel
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\core
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}