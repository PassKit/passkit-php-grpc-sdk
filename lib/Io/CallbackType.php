<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/callback.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.CallbackType</code>
 */
class CallbackType
{
    /**
     * Generated from protobuf enum <code>CALLBACK_TYPE_SEND_EMAIL = 0;</code>
     */
    const CALLBACK_TYPE_SEND_EMAIL = 0;
    /**
     * Generated from protobuf enum <code>CALLBACK_TYPE_SEND_SMS = 1;</code>
     */
    const CALLBACK_TYPE_SEND_SMS = 1;
    /**
     * Generated from protobuf enum <code>CALLBACK_TYPE_SEND_POST = 2;</code>
     */
    const CALLBACK_TYPE_SEND_POST = 2;
    /**
     * callback will be performed on the defined integrations
     *
     * Generated from protobuf enum <code>CALLBACK_TYPE_INTEGRATION = 3;</code>
     */
    const CALLBACK_TYPE_INTEGRATION = 3;

    private static $valueToName = [
        self::CALLBACK_TYPE_SEND_EMAIL => 'CALLBACK_TYPE_SEND_EMAIL',
        self::CALLBACK_TYPE_SEND_SMS => 'CALLBACK_TYPE_SEND_SMS',
        self::CALLBACK_TYPE_SEND_POST => 'CALLBACK_TYPE_SEND_POST',
        self::CALLBACK_TYPE_INTEGRATION => 'CALLBACK_TYPE_INTEGRATION',
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
