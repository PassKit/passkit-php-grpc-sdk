<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/integration.proto

namespace Io;

use UnexpectedValueException;

/**
 * Action method is an api call method (post, put, delete) used when data get integrated with the third party application.
 * This enum will be useful if topic is not directly produced by debezium and want to know the original debezium event operation.
 *
 * Protobuf type <code>io.ActionMethod</code>
 */
class ActionMethod
{
    /**
     * Generated from protobuf enum <code>METHOD_NONE = 0;</code>
     */
    const METHOD_NONE = 0;
    /**
     * Invokes POST request to create a record the third party app.
     *
     * Generated from protobuf enum <code>METHOD_POST = 1;</code>
     */
    const METHOD_POST = 1;
    /**
     * Invokes PUT request to update existing record on the third party app.
     *
     * Generated from protobuf enum <code>METHOD_PUT = 2;</code>
     */
    const METHOD_PUT = 2;
    /**
     * Invokes DELETE request to delete existing record on the third party app.
     *
     * Generated from protobuf enum <code>METHOD_DELETE = 3;</code>
     */
    const METHOD_DELETE = 3;

    private static $valueToName = [
        self::METHOD_NONE => 'METHOD_NONE',
        self::METHOD_POST => 'METHOD_POST',
        self::METHOD_PUT => 'METHOD_PUT',
        self::METHOD_DELETE => 'METHOD_DELETE',
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

