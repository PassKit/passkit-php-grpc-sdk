<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/single_use_coupons/coupon.proto

namespace Single_use_coupons;

use UnexpectedValueException;

/**
 * Protobuf type <code>single_use_coupons.CouponStatus</code>
 */
class CouponStatus
{
    /**
     * Default status when a coupon is issued.
     *
     * Generated from protobuf enum <code>UNREDEEMED = 0;</code>
     */
    const UNREDEEMED = 0;
    /**
     * Set after a coupon is redeemed (the redeem endpoint is called).
     *
     * Generated from protobuf enum <code>REDEEMED = 1;</code>
     */
    const REDEEMED = 1;

    private static $valueToName = [
        self::UNREDEEMED => 'UNREDEEMED',
        self::REDEEMED => 'REDEEMED',
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
