<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use UnexpectedValueException;

/**
 * Protobuf type <code>single_use_coupons.RedemptionType</code>
 */
class RedemptionType
{
    /**
     * Zero index should not be used
     *
     * Generated from protobuf enum <code>REDEMPTION_TYPE_DO_NOT_USE = 0;</code>
     */
    const REDEMPTION_TYPE_DO_NOT_USE = 0;
    /**
     * Coupons are always redeemed via API (default). This method is used by POS integrations, but is also be used by the PassKit scanning app.
     *
     * Generated from protobuf enum <code>REDEMPTION_TYPE_API = 1;</code>
     */
    const REDEMPTION_TYPE_API = 1;
    /**
     * Coupons can be redeemed by the coupon holder (i.e. the customer) by visiting a redemption URL rendered on the coupon.
     * The coupon will redeem upon the link being visited.
     *
     * Generated from protobuf enum <code>REDEMPTION_TYPE_CUSTOMER_INITIATED = 2;</code>
     */
    const REDEMPTION_TYPE_CUSTOMER_INITIATED = 2;
    /**
     * This will present a fixed code to the customer after they visit the redemption URL, and then auto redeem the coupon. The customer can then present this fixed-code to a member of staff.
     *
     * Generated from protobuf enum <code>REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_FIXED = 3;</code>
     */
    const REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_FIXED = 3;
    /**
     * After visiting the redemption URL, a member of staff provides the customer with a redemption-code they need to enter. After entering the code, the coupon with redeem.
     *
     * Generated from protobuf enum <code>REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_PROVIDED_ON_REDEEM = 4;</code>
     */
    const REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_PROVIDED_ON_REDEEM = 4;

    private static $valueToName = [
        self::REDEMPTION_TYPE_DO_NOT_USE => 'REDEMPTION_TYPE_DO_NOT_USE',
        self::REDEMPTION_TYPE_API => 'REDEMPTION_TYPE_API',
        self::REDEMPTION_TYPE_CUSTOMER_INITIATED => 'REDEMPTION_TYPE_CUSTOMER_INITIATED',
        self::REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_FIXED => 'REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_FIXED',
        self::REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_PROVIDED_ON_REDEEM => 'REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_PROVIDED_ON_REDEEM',
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

