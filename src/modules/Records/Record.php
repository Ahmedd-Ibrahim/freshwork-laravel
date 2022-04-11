<?php
namespace AhmeddIbrahim\Freshwork\modules\Records;

use Freshwork\modules\Records\RecordInterface;

class Record implements RecordInterface
{
    public $fieldsValues = [];

    const CUSTOMFIELDKEY = 'cf_';

    const CUSTOM_FIELD = 'custom_field';

    public function getFieldsValues()
    {
        return $this->fieldsValues;
    }

    public function setFieldValue($fieldName, $value)
    {
        if (!str_starts_with($fieldName, Record::CUSTOMFIELDKEY)) {
            return $this->fieldsValues[$fieldName] = $value;
        }

        $this->setCustomFieldValue($fieldName, $value);
    }

    public function setCustomFieldValue($fieldName, $value)
    {
        if (!isset($this->fieldsValues[Record::CUSTOM_FIELD])) {
            $this->fieldsValues[Record::CUSTOM_FIELD] = [];
        }

        $this->fieldsValues[Record::CUSTOM_FIELD] += [$fieldName => $value];
    }
}
