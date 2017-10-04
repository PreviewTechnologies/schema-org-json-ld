<?php

namespace Previewtechs\SchemaOrg\JsonLd\Schemas;

/**
 * Class Schemas
 * @package Previewtechs\SchemaOrg\JsonLd\Schemas
 */
class Schemas
{
    /**
     * @return array
     */
    public function getJsonLd()
    {
        $result = [];

        $data = get_object_vars($this);
        foreach ($data as $key => $value) {
            if (is_object($value)) {
                $result[$key] = $value->toArray();
            } else {
                $result[$key] = $value;
            }
        }

        foreach ($result as $item => $value) {
            if (empty($result[$item]) || $result[$item] === null) {
                unset($result[$item]);
            }
        }

        return $result;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];

        $data = get_object_vars($this);
        foreach ($data as $key => $value) {
            if (is_object($value)) {
                $result[$key] = $value->toArray();
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}