<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/template.proto

namespace Io;

use UnexpectedValueException;

/**
 * Field type categorize a type of field rendered on pass or data collection page. The value will be auto-configured on the backend.
 *
 * Protobuf type <code>io.FieldType</code>
 */
class FieldType
{
    /**
     * Generated from protobuf enum <code>FIELD_TYPE_NONE = 0;</code>
     */
    const FIELD_TYPE_NONE = 0;
    /**
     * Meta fields. DataField.UniqueName needs to be meta.FIELDNAME.
     *
     * Generated from protobuf enum <code>META = 1;</code>
     */
    const META = 1;
    /**
     * PII fields. DataField.UniqueName needs to be person.FIELDNAME.
     *
     * Generated from protobuf enum <code>PII = 2;</code>
     */
    const PII = 2;
    /**
     * Universal fields used across protocols (e.g. Terms And Conditions, Locations, Messages). DataField.UniqueName needs to be universal.FIELDNAME (e.g. universal.messages).
     *
     * Generated from protobuf enum <code>UNIVERSAL_FIELDS = 3;</code>
     */
    const UNIVERSAL_FIELDS = 3;
    /**
     * Protocol specific fields. DataField.UniqueName needs to be protocol.OBJECT.FIELDNAME.
     *
     * Generated from protobuf enum <code>PROTOCOL_FIELDS = 4;</code>
     */
    const PROTOCOL_FIELDS = 4;
    /**
     * Custom fields are fields which are created only for pass render purpose and does not belong to other field type.
     *
     * Generated from protobuf enum <code>CUSTOM_FIELDS = 5;</code>
     */
    const CUSTOM_FIELDS = 5;

    private static $valueToName = [
        self::FIELD_TYPE_NONE => 'FIELD_TYPE_NONE',
        self::META => 'META',
        self::PII => 'PII',
        self::UNIVERSAL_FIELDS => 'UNIVERSAL_FIELDS',
        self::PROTOCOL_FIELDS => 'PROTOCOL_FIELDS',
        self::CUSTOM_FIELDS => 'CUSTOM_FIELDS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

