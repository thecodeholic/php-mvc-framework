<?php
/**
 * User: TheCodeholic
 * Date: 7/26/2020
 * Time: 3:49 PM
 */

namespace app\core\form;


/**
 * Class TextareaField
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\core\form
 */
class TextareaField extends BaseField
{
    public function renderInput()
    {
        return sprintf('<textarea class="form-control%s" name="%s">%s</textarea>',
             $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }
}