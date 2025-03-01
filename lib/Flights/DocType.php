<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/barcode.proto

namespace Flights;

use UnexpectedValueException;

/**
 * Document type that the barcode represents.
 *
 * Protobuf type <code>flights.DocType</code>
 */
class DocType
{
    /**
     * Boarding pass
     *
     * Generated from protobuf enum <code>B = 0;</code>
     */
    const B = 0;
    /**
     * Itinerary receipt
     *
     * Generated from protobuf enum <code>I = 1;</code>
     */
    const I = 1;

    private static $valueToName = [
        self::B => 'B',
        self::I => 'I',
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

