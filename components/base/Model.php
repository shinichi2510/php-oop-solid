<?php

namespace app\components\base;

use \app\components\ModelError;

/**
 * Abstract class that defines a model representation
 * 
 * @author chipv.bka@gmail.com
 */
abstract class Model extends Base {

    public $errors = [];

    /**
     * Find the model by pk
     * @param $id
     */
    abstract static function find($id);

    /**
     * Create the model
     */
    abstract static function create();

    /**
     * Delete the model by pk
     * @param $id
     */
    abstract static function delete($id);

    /**
     * Validate the model
     */
    abstract function validate();

    /**
     * Save the values of model
     */
    abstract function save();

    /**
     * Add errors to the model
     * @param ModelError $error
     */
    public function addError(ModelError $error) {
        $this->errors[] = $error;
    }

    /**
     * Check if the model has errors
     * @return boolean
     */
    public function hasErrors() {
        if (count($this->errors) > 0) {
            return true;
        }
        return false;
    }

    /**
     * Return the errors of model
     */
    public function getErrors() {
        return $this->errors;
    }

}
