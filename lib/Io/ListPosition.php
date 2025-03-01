<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/common_objects.proto

namespace Io;

use UnexpectedValueException;

/**
 * List position is used to denote behavior for list items that may already have been populated bay a parent object.  Default is to append the item to the existing list.
 *
 * Protobuf type <code>io.ListPosition</code>
 */
class ListPosition
{
    /**
     * Generated from protobuf enum <code>APPEND = 0;</code>
     */
    const APPEND = 0;
    /**
     * Generated from protobuf enum <code>PREPEND = 1;</code>
     */
    const PREPEND = 1;
    /**
     * Generated from protobuf enum <code>REPLACE = 2;</code>
     */
    const REPLACE = 2;

    private static $valueToName = [
        self::APPEND => 'APPEND',
        self::PREPEND => 'PREPEND',
        self::REPLACE => 'REPLACE',
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

