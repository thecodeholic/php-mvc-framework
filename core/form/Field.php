<?php
/**
 * User: TheCodeholic
 * Date: 7/9/2020
 * Time: 7:05 AM
 */

namespace app\core\form;


use app\core\Model;

/**
 * Class Field
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package core\form
 */
class Field
{
    public Model $model;
    public string $attribute;

    /**
     * Field constructor.
     *
     * @param \app\core\Model $model
     * @param string          $attribute
     */
    public function __construct(\app\core\Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('<div class="form-group">
                <label>%s</label>
                <input type="text" class="form-control%s" name="%s" value="%s">
                <div class="invalid-feedback">
                    %s
                </div>
            </div>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->getFirstError($this->attribute)
        );
    }
}