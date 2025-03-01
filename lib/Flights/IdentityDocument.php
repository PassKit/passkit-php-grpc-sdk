<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/passenger.proto

namespace Flights;

use UnexpectedValueException;

/**
 * Type of document used to validate the traveler's identity.
 *
 * Protobuf type <code>flights.IdentityDocument</code>
 */
class IdentityDocument
{
    /**
     * Passport
     *
     * Generated from protobuf enum <code>PASSPORT = 0;</code>
     */
    const PASSPORT = 0;
    /**
     * National ID card
     *
     * Generated from protobuf enum <code>NATIONAL_ID_CARD = 1;</code>
     */
    const NATIONAL_ID_CARD = 1;
    /**
     * Driving license
     *
     * Generated from protobuf enum <code>DRIVING_LICENSE = 2;</code>
     */
    const DRIVING_LICENSE = 2;
    /**
     * Credit card
     *
     * Generated from protobuf enum <code>CREDIT_CARD = 3;</code>
     */
    const CREDIT_CARD = 3;
    /**
     * Frequent flyer card
     *
     * Generated from protobuf enum <code>FREQUENT_FLYER_CARD = 4;</code>
     */
    const FREQUENT_FLYER_CARD = 4;
    /**
     * Other travel document
     *
     * Generated from protobuf enum <code>OTHER_TRAVEL_DOCUMENT = 5;</code>
     */
    const OTHER_TRAVEL_DOCUMENT = 5;

    private static $valueToName = [
        self::PASSPORT => 'PASSPORT',
        self::NATIONAL_ID_CARD => 'NATIONAL_ID_CARD',
        self::DRIVING_LICENSE => 'DRIVING_LICENSE',
        self::CREDIT_CARD => 'CREDIT_CARD',
        self::FREQUENT_FLYER_CARD => 'FREQUENT_FLYER_CARD',
        self::OTHER_TRAVEL_DOCUMENT => 'OTHER_TRAVEL_DOCUMENT',
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

