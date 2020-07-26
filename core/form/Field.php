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
class Field extends BaseField
{
    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'file';

    /**
     * Field constructor.
     *
     * @param \app\core\Model $model
     * @param string          $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function renderInput()
    {
        return sprintf('<input type="%s" class="form-control%s" name="%s" value="%s">',
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this;
    }
}