<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/protocols.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.PassProtocol</code>
 */
class PassProtocol
{
    /**
     * Generated from protobuf enum <code>PASS_PROTOCOL_DO_NOT_USE = 0;</code>
     */
    const PASS_PROTOCOL_DO_NOT_USE = 0;
    /**
     * Reserved for raw pass protocol.
     *
     * Generated from protobuf enum <code>RAW_PROTOCOL = 1;</code>
     */
    const RAW_PROTOCOL = 1;
    /**
     * Reserved for migrating legacy v1 passes.
     *
     * Generated from protobuf enum <code>V1_PROTOCOL = 2;</code>
     */
    const V1_PROTOCOL = 2;
    /**
     * Flights protocol: https://docs.passkit.io/protocols/boarding/
     *
     * Generated from protobuf enum <code>FLIGHT_PROTOCOL = 3;</code>
     */
    const FLIGHT_PROTOCOL = 3;
    /**
     * Values 100 onwards are for PassKit generic protocols.
     * Generic Membership protocol: https://docs.passkit.io/protocols/member/
     *
     * Generated from protobuf enum <code>MEMBERSHIP = 100;</code>
     */
    const MEMBERSHIP = 100;
    /**
     * Single Use Coupon protocol: https://docs.passkit.io/protocols/coupon/
     *
     * Generated from protobuf enum <code>SINGLE_USE_COUPON = 101;</code>
     */
    const SINGLE_USE_COUPON = 101;
    /**
     * Event Ticket protocol: https://docs.passkit.io/protocols/event/
     *
     * Generated from protobuf enum <code>EVENT_TICKETING = 102;</code>
     */
    const EVENT_TICKETING = 102;

    private static $valueToName = [
        self::PASS_PROTOCOL_DO_NOT_USE => 'PASS_PROTOCOL_DO_NOT_USE',
        self::RAW_PROTOCOL => 'RAW_PROTOCOL',
        self::V1_PROTOCOL => 'V1_PROTOCOL',
        self::FLIGHT_PROTOCOL => 'FLIGHT_PROTOCOL',
        self::MEMBERSHIP => 'MEMBERSHIP',
        self::SINGLE_USE_COUPON => 'SINGLE_USE_COUPON',
        self::EVENT_TICKETING => 'EVENT_TICKETING',
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

