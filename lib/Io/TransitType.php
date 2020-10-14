<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.TransitType</code>
 */
class TransitType
{
    /**
     * Generated from protobuf enum <code>TRANSIT_TYPE_DO_NOT_USE = 0;</code>
     */
    const TRANSIT_TYPE_DO_NOT_USE = 0;
    /**
     * Generated from protobuf enum <code>TRANSIT_TYPE_AIR = 1;</code>
     */
    const TRANSIT_TYPE_AIR = 1;
    /**
     * Generated from protobuf enum <code>TRANSIT_TYPE_BOAT = 2;</code>
     */
    const TRANSIT_TYPE_BOAT = 2;
    /**
     * Generated from protobuf enum <code>TRANSIT_TYPE_BUS = 3;</code>
     */
    const TRANSIT_TYPE_BUS = 3;
    /**
     * Generated from protobuf enum <code>TRANSIT_TYPE_GENERIC = 4;</code>
     */
    const TRANSIT_TYPE_GENERIC = 4;
    /**
     * Generated from protobuf enum <code>TRANSIT_TYPE_TRAIN = 5;</code>
     */
    const TRANSIT_TYPE_TRAIN = 5;
    /**
     * Google Pay only.
     *
     * Generated from protobuf enum <code>TRANSIT_TYPE_TRAM = 6;</code>
     */
    const TRANSIT_TYPE_TRAM = 6;

    private static $valueToName = [
        self::TRANSIT_TYPE_DO_NOT_USE => 'TRANSIT_TYPE_DO_NOT_USE',
        self::TRANSIT_TYPE_AIR => 'TRANSIT_TYPE_AIR',
        self::TRANSIT_TYPE_BOAT => 'TRANSIT_TYPE_BOAT',
        self::TRANSIT_TYPE_BUS => 'TRANSIT_TYPE_BUS',
        self::TRANSIT_TYPE_GENERIC => 'TRANSIT_TYPE_GENERIC',
        self::TRANSIT_TYPE_TRAIN => 'TRANSIT_TYPE_TRAIN',
        self::TRANSIT_TYPE_TRAM => 'TRANSIT_TYPE_TRAM',
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

