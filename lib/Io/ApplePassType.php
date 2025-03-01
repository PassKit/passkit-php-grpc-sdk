<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/template.proto

namespace Io;

use UnexpectedValueException;

/**
 * Apple pass types
 *
 * Protobuf type <code>io.ApplePassType</code>
 */
class ApplePassType
{
    /**
     * Use if you do not wish to support Apple Wallet
     *
     * Generated from protobuf enum <code>APPLE_NOT_SUPPORTED = 0;</code>
     */
    const APPLE_NOT_SUPPORTED = 0;
    /**
     * Generated from protobuf enum <code>BOARDING_PASS = 1;</code>
     */
    const BOARDING_PASS = 1;
    /**
     * Generated from protobuf enum <code>COUPON = 2;</code>
     */
    const COUPON = 2;
    /**
     * Generated from protobuf enum <code>EVENT_TICKET = 3;</code>
     */
    const EVENT_TICKET = 3;
    /**
     * Generated from protobuf enum <code>GENERIC = 4;</code>
     */
    const GENERIC = 4;
    /**
     * Generated from protobuf enum <code>STORE_CARD = 5;</code>
     */
    const STORE_CARD = 5;

    private static $valueToName = [
        self::APPLE_NOT_SUPPORTED => 'APPLE_NOT_SUPPORTED',
        self::BOARDING_PASS => 'BOARDING_PASS',
        self::COUPON => 'COUPON',
        self::EVENT_TICKET => 'EVENT_TICKET',
        self::GENERIC => 'GENERIC',
        self::STORE_CARD => 'STORE_CARD',
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

