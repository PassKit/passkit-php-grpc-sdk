<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/barcode.proto

namespace Flights;

use UnexpectedValueException;

/**
 * International Documentation Verification.
 *
 * Protobuf type <code>flights.InternationalDocVerification</code>
 */
class InternationalDocVerification
{
    /**
     * No travel document verification required
     *
     * Generated from protobuf enum <code>NOT_REQUIRED = 0;</code>
     */
    const NOT_REQUIRED = 0;
    /**
     * Travel document verification required before boarding
     *
     * Generated from protobuf enum <code>REQUIRED = 1;</code>
     */
    const REQUIRED = 1;
    /**
     * Travel document verification successfully completed
     *
     * Generated from protobuf enum <code>COMPLETED = 2;</code>
     */
    const COMPLETED = 2;

    private static $valueToName = [
        self::NOT_REQUIRED => 'NOT_REQUIRED',
        self::REQUIRED => 'REQUIRED',
        self::COMPLETED => 'COMPLETED',
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
