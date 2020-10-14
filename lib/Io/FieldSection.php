<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.FieldSection</code>
 */
class FieldSection
{
    /**
     * Generated from protobuf enum <code>FIELD_SECTION_DO_NOT_USE = 0;</code>
     */
    const FIELD_SECTION_DO_NOT_USE = 0;
    /**
     * Generated from protobuf enum <code>BACK_FIELDS = 1;</code>
     */
    const BACK_FIELDS = 1;
    /**
     * Generated from protobuf enum <code>PRIMARY_FIELDS = 2;</code>
     */
    const PRIMARY_FIELDS = 2;
    /**
     * Generated from protobuf enum <code>SECONDARY_FIELDS = 3;</code>
     */
    const SECONDARY_FIELDS = 3;
    /**
     * Generated from protobuf enum <code>AUXILIARY_FIELDS = 4;</code>
     */
    const AUXILIARY_FIELDS = 4;
    /**
     * Generated from protobuf enum <code>HEADER_FIELDS = 5;</code>
     */
    const HEADER_FIELDS = 5;

    private static $valueToName = [
        self::FIELD_SECTION_DO_NOT_USE => 'FIELD_SECTION_DO_NOT_USE',
        self::BACK_FIELDS => 'BACK_FIELDS',
        self::PRIMARY_FIELDS => 'PRIMARY_FIELDS',
        self::SECONDARY_FIELDS => 'SECONDARY_FIELDS',
        self::AUXILIARY_FIELDS => 'AUXILIARY_FIELDS',
        self::HEADER_FIELDS => 'HEADER_FIELDS',
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
