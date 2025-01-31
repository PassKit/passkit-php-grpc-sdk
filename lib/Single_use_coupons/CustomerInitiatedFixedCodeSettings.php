<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.CustomerInitiatedFixedCodeSettings</code>
 */
class CustomerInitiatedFixedCodeSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * For fixed code customer initiated redemption; the fixed code to display needs to be set.
     *
     * Generated from protobuf field <code>string fixedCode = 1;</code>
     */
    protected $fixedCode = '';
    /**
     * If set to true will use coupon.sku as the fixed code.
     *
     * Generated from protobuf field <code>bool useCouponSku = 2;</code>
     */
    protected $useCouponSku = false;
    /**
     * If set will render a barcode underneath the fixed code with as contents the fixed code.
     *
     * Generated from protobuf field <code>.io.BarcodeType barcode = 3;</code>
     */
    protected $barcode = 0;
    /**
     * Count down timer for redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionTimerSettings redemptionTimer = 4;</code>
     */
    protected $redemptionTimer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fixedCode
     *           For fixed code customer initiated redemption; the fixed code to display needs to be set.
     *     @type bool $useCouponSku
     *           If set to true will use coupon.sku as the fixed code.
     *     @type int $barcode
     *           If set will render a barcode underneath the fixed code with as contents the fixed code.
     *     @type \Single_use_coupons\RedemptionTimerSettings $redemptionTimer
     *           Count down timer for redemption.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * For fixed code customer initiated redemption; the fixed code to display needs to be set.
     *
     * Generated from protobuf field <code>string fixedCode = 1;</code>
     * @return string
     */
    public function getFixedCode()
    {
        return $this->fixedCode;
    }

    /**
     * For fixed code customer initiated redemption; the fixed code to display needs to be set.
     *
     * Generated from protobuf field <code>string fixedCode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFixedCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->fixedCode = $var;

        return $this;
    }

    /**
     * If set to true will use coupon.sku as the fixed code.
     *
     * Generated from protobuf field <code>bool useCouponSku = 2;</code>
     * @return bool
     */
    public function getUseCouponSku()
    {
        return $this->useCouponSku;
    }

    /**
     * If set to true will use coupon.sku as the fixed code.
     *
     * Generated from protobuf field <code>bool useCouponSku = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseCouponSku($var)
    {
        GPBUtil::checkBool($var);
        $this->useCouponSku = $var;

        return $this;
    }

    /**
     * If set will render a barcode underneath the fixed code with as contents the fixed code.
     *
     * Generated from protobuf field <code>.io.BarcodeType barcode = 3;</code>
     * @return int
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * If set will render a barcode underneath the fixed code with as contents the fixed code.
     *
     * Generated from protobuf field <code>.io.BarcodeType barcode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBarcode($var)
    {
        GPBUtil::checkEnum($var, \Io\BarcodeType::class);
        $this->barcode = $var;

        return $this;
    }

    /**
     * Count down timer for redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionTimerSettings redemptionTimer = 4;</code>
     * @return \Single_use_coupons\RedemptionTimerSettings|null
     */
    public function getRedemptionTimer()
    {
        return $this->redemptionTimer;
    }

    public function hasRedemptionTimer()
    {
        return isset($this->redemptionTimer);
    }

    public function clearRedemptionTimer()
    {
        unset($this->redemptionTimer);
    }

    /**
     * Count down timer for redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.RedemptionTimerSettings redemptionTimer = 4;</code>
     * @param \Single_use_coupons\RedemptionTimerSettings $var
     * @return $this
     */
    public function setRedemptionTimer($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\RedemptionTimerSettings::class);
        $this->redemptionTimer = $var;

        return $this;
    }

}

