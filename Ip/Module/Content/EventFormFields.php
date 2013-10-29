<?php
/**
 * @package ImpressPages

 *
 */
namespace Ip\Module\Content;

class EventFormFields extends \Ip\Event{

    private $fields = array();

    public function addField(\Ip\Module\Content\FieldType $field) {
        $this->fields[$field->getKey()] = $field;
    }

    public function removeField($key) {
        unset($this->fields[$key]);
    }

    public function getField($key) {
        if (isset($this->fields[$key])) {
            return $this->fields[$key];
        } else {
            return false;
        }
    }

    public function issetField($key) {
        return isset($this->fields[$key]);
    }

    public function getFields() {
        return $this->fields;
    }

}