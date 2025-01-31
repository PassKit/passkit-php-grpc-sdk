<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/user/user.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.PermissionScope</code>
 */
class PermissionScope
{
    /**
     * Zero based enum, don't use 0.
     *
     * Generated from protobuf enum <code>PERMISSION_NONE = 0;</code>
     */
    const PERMISSION_NONE = 0;
    /**
     * Generated from protobuf enum <code>WEB_ACCESS = 1;</code>
     */
    const WEB_ACCESS = 1;
    /**
     * Generated from protobuf enum <code>APP_ACCESS = 2;</code>
     */
    const APP_ACCESS = 2;
    /**
     * Generated from protobuf enum <code>ALL_PROJECTS = 4;</code>
     */
    const ALL_PROJECTS = 4;
    /**
     * Generated from protobuf enum <code>ALL_CERTIFICATES = 8;</code>
     */
    const ALL_CERTIFICATES = 8;
    /**
     * Generated from protobuf enum <code>BILLING_ACCESS = 16;</code>
     */
    const BILLING_ACCESS = 16;
    /**
     * Generated from protobuf enum <code>CERTIFICATES_ACCESS = 32;</code>
     */
    const CERTIFICATES_ACCESS = 32;
    /**
     * Generated from protobuf enum <code>MEMBERS_ACCESS = 64;</code>
     */
    const MEMBERS_ACCESS = 64;
    /**
     * Generated from protobuf enum <code>COUPONS_ACCESS = 128;</code>
     */
    const COUPONS_ACCESS = 128;
    /**
     * Generated from protobuf enum <code>EVENTS_ACCESS = 256;</code>
     */
    const EVENTS_ACCESS = 256;
    /**
     * Generated from protobuf enum <code>FLIGHTS_ACCESS = 512;</code>
     */
    const FLIGHTS_ACCESS = 512;

    private static $valueToName = [
        self::PERMISSION_NONE => 'PERMISSION_NONE',
        self::WEB_ACCESS => 'WEB_ACCESS',
        self::APP_ACCESS => 'APP_ACCESS',
        self::ALL_PROJECTS => 'ALL_PROJECTS',
        self::ALL_CERTIFICATES => 'ALL_CERTIFICATES',
        self::BILLING_ACCESS => 'BILLING_ACCESS',
        self::CERTIFICATES_ACCESS => 'CERTIFICATES_ACCESS',
        self::MEMBERS_ACCESS => 'MEMBERS_ACCESS',
        self::COUPONS_ACCESS => 'COUPONS_ACCESS',
        self::EVENTS_ACCESS => 'EVENTS_ACCESS',
        self::FLIGHTS_ACCESS => 'FLIGHTS_ACCESS',
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

