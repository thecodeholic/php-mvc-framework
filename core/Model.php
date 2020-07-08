<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 9:16 AM
 */

namespace app\core;


/**
 * Class Model
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\core
 */
class Model
{
    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
    public function validate()
    {
        // TODO
    }
}