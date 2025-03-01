<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/attributes.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.Channel</code>
 */
class Channel
{
    /**
     * Generated from protobuf enum <code>UnknownChannel = 0;</code>
     */
    const UnknownChannel = 0;
    /**
     * Generated from protobuf enum <code>Web = 1;</code>
     */
    const Web = 1;
    /**
     * Generated from protobuf enum <code>API = 2;</code>
     */
    const API = 2;
    /**
     * Generated from protobuf enum <code>App = 3;</code>
     */
    const App = 3;

    private static $valueToName = [
        self::UnknownChannel => 'UnknownChannel',
        self::Web => 'Web',
        self::API => 'API',
        self::App => 'App',
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

