<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/barcode.proto

namespace Flights;

use UnexpectedValueException;

/**
 * Source of transaction.
 *
 * Protobuf type <code>flights.Source</code>
 */
class Source
{
    /**
     * Web
     *
     * Generated from protobuf enum <code>W = 0;</code>
     */
    const W = 0;
    /**
     * Airport Kiosk
     *
     * Generated from protobuf enum <code>K = 1;</code>
     */
    const K = 1;
    /**
     * Transfer kiosk
     *
     * Generated from protobuf enum <code>X = 2;</code>
     */
    const X = 2;
    /**
     * Remote / off-site kiosk
     *
     * Generated from protobuf enum <code>R = 3;</code>
     */
    const R = 3;
    /**
     * Mobile device
     *
     * Generated from protobuf enum <code>M = 4;</code>
     */
    const M = 4;
    /**
     * Airport agent
     *
     * Generated from protobuf enum <code>O = 5;</code>
     */
    const O = 5;
    /**
     * Town agent
     *
     * Generated from protobuf enum <code>T = 6;</code>
     */
    const T = 6;
    /**
     * Third party vendor
     *
     * Generated from protobuf enum <code>V = 7;</code>
     */
    const V = 7;

    private static $valueToName = [
        self::W => 'W',
        self::K => 'K',
        self::X => 'X',
        self::R => 'R',
        self::M => 'M',
        self::O => 'O',
        self::T => 'T',
        self::V => 'V',
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

