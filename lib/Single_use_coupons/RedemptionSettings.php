<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.RedemptionSettings</code>
 */
class RedemptionSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional field that can be set if offers can only be redeemed after a certain date. Defaults to the offer issue start date. Needs to be greater than / equal to the offer issue start date, and less than / equal to offer issue end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp redemptionStartDate = 1;</code>
     */
    protected $redemptionStartDate = null;
    /**
     * Optional field that can be set if offers can only be redeemed until a certain date. Defaults to the offer issue end date. Needs to be less than / equal to the offer issue end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp redemptionEndDate = 2;</code>
     */
    protected $redemptionEndDate = null;
    /**
     * Dictates redemption type; defaults to API.
     *
     * Generated from protobuf field <code>repeated .single_use_coupons.RedemptionType redemptionType = 3;</code>
     */
    private $redemptionType;
    /**
     * Settings for code provided on redemption; a list of valid codes and possible invalid-code error message needs to be provided.
     *
     * Generated from protobuf field <code>.single_use_coupons.CustomerInitiatedCodeProvideOnRedeemSettings codeProvidedOnRedeemSettings = 5;</code>
     */
    protected $codeProvidedOnRedeemSettings = null;
    /**
     * Settings for fixed code redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.CustomerInitiatedFixedCodeSettings fixedCodeSettings = 6;</code>
     */
    protected $fixedCodeSettings = null;
    /**
     * Standard redemption page design, hosted by PassKit. Mandatory field if the type is any of the customer initiated redemptions.
     *
     * Generated from protobuf field <code>.single_use_coupons.StandardPassKitHostedPage standardSettings = 7;</code>
     */
    protected $standardSettings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $redemptionStartDate
     *           Optional field that can be set if offers can only be redeemed after a certain date. Defaults to the offer issue start date. Needs to be greater than / equal to the offer issue start date, and less than / equal to offer issue end date.
     *     @type \Google\Protobuf\Timestamp $redemptionEndDate
     *           Optional field that can be set if offers can only be redeemed until a certain date. Defaults to the offer issue end date. Needs to be less than / equal to the offer issue end date.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $redemptionType
     *           Dictates redemption type; defaults to API.
     *     @type \Single_use_coupons\CustomerInitiatedCodeProvideOnRedeemSettings $codeProvidedOnRedeemSettings
     *           Settings for code provided on redemption; a list of valid codes and possible invalid-code error message needs to be provided.
     *     @type \Single_use_coupons\CustomerInitiatedFixedCodeSettings $fixedCodeSettings
     *           Settings for fixed code redemption.
     *     @type \Single_use_coupons\StandardPassKitHostedPage $standardSettings
     *           Standard redemption page design, hosted by PassKit. Mandatory field if the type is any of the customer initiated redemptions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional field that can be set if offers can only be redeemed after a certain date. Defaults to the offer issue start date. Needs to be greater than / equal to the offer issue start date, and less than / equal to offer issue end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp redemptionStartDate = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getRedemptionStartDate()
    {
        return isset($this->redemptionStartDate) ? $this->redemptionStartDate : null;
    }

    public function hasRedemptionStartDate()
    {
        return isset($this->redemptionStartDate);
    }

    public function clearRedemptionStartDate()
    {
        unset($this->redemptionStartDate);
    }

    /**
     * Optional field that can be set if offers can only be redeemed after a certain date. Defaults to the offer issue start date. Needs to be greater than / equal to the offer issue start date, and less than / equal to offer issue end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp redemptionStartDate = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRedemptionStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->redemptionStartDate = $var;

        return $this;
    }

    /**
     * Optional field that can be set if offers can only be redeemed until a certain date. Defaults to the offer issue end date. Needs to be less than / equal to the offer issue end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp redemptionEndDate = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getRedemptionEndDate()
    {
        return isset($this->redemptionEndDate) ? $this->redemptionEndDate : null;
    }

    public function hasRedemptionEndDate()
    {
        return isset($this->redemptionEndDate);
    }

    public function clearRedemptionEndDate()
    {
        unset($this->redemptionEndDate);
    }

    /**
     * Optional field that can be set if offers can only be redeemed until a certain date. Defaults to the offer issue end date. Needs to be less than / equal to the offer issue end date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp redemptionEndDate = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRedemptionEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->redemptionEndDate = $var;

        return $this;
    }

    /**
     * Dictates redemption type; defaults to API.
     *
     * Generated from protobuf field <code>repeated .single_use_coupons.RedemptionType redemptionType = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRedemptionType()
    {
        return $this->redemptionType;
    }

    /**
     * Dictates redemption type; defaults to API.
     *
     * Generated from protobuf field <code>repeated .single_use_coupons.RedemptionType redemptionType = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRedemptionType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Single_use_coupons\RedemptionType::class);
        $this->redemptionType = $arr;

        return $this;
    }

    /**
     * Settings for code provided on redemption; a list of valid codes and possible invalid-code error message needs to be provided.
     *
     * Generated from protobuf field <code>.single_use_coupons.CustomerInitiatedCodeProvideOnRedeemSettings codeProvidedOnRedeemSettings = 5;</code>
     * @return \Single_use_coupons\CustomerInitiatedCodeProvideOnRedeemSettings
     */
    public function getCodeProvidedOnRedeemSettings()
    {
        return isset($this->codeProvidedOnRedeemSettings) ? $this->codeProvidedOnRedeemSettings : null;
    }

    public function hasCodeProvidedOnRedeemSettings()
    {
        return isset($this->codeProvidedOnRedeemSettings);
    }

    public function clearCodeProvidedOnRedeemSettings()
    {
        unset($this->codeProvidedOnRedeemSettings);
    }

    /**
     * Settings for code provided on redemption; a list of valid codes and possible invalid-code error message needs to be provided.
     *
     * Generated from protobuf field <code>.single_use_coupons.CustomerInitiatedCodeProvideOnRedeemSettings codeProvidedOnRedeemSettings = 5;</code>
     * @param \Single_use_coupons\CustomerInitiatedCodeProvideOnRedeemSettings $var
     * @return $this
     */
    public function setCodeProvidedOnRedeemSettings($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\CustomerInitiatedCodeProvideOnRedeemSettings::class);
        $this->codeProvidedOnRedeemSettings = $var;

        return $this;
    }

    /**
     * Settings for fixed code redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.CustomerInitiatedFixedCodeSettings fixedCodeSettings = 6;</code>
     * @return \Single_use_coupons\CustomerInitiatedFixedCodeSettings
     */
    public function getFixedCodeSettings()
    {
        return isset($this->fixedCodeSettings) ? $this->fixedCodeSettings : null;
    }

    public function hasFixedCodeSettings()
    {
        return isset($this->fixedCodeSettings);
    }

    public function clearFixedCodeSettings()
    {
        unset($this->fixedCodeSettings);
    }

    /**
     * Settings for fixed code redemption.
     *
     * Generated from protobuf field <code>.single_use_coupons.CustomerInitiatedFixedCodeSettings fixedCodeSettings = 6;</code>
     * @param \Single_use_coupons\CustomerInitiatedFixedCodeSettings $var
     * @return $this
     */
    public function setFixedCodeSettings($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\CustomerInitiatedFixedCodeSettings::class);
        $this->fixedCodeSettings = $var;

        return $this;
    }

    /**
     * Standard redemption page design, hosted by PassKit. Mandatory field if the type is any of the customer initiated redemptions.
     *
     * Generated from protobuf field <code>.single_use_coupons.StandardPassKitHostedPage standardSettings = 7;</code>
     * @return \Single_use_coupons\StandardPassKitHostedPage
     */
    public function getStandardSettings()
    {
        return isset($this->standardSettings) ? $this->standardSettings : null;
    }

    public function hasStandardSettings()
    {
        return isset($this->standardSettings);
    }

    public function clearStandardSettings()
    {
        unset($this->standardSettings);
    }

    /**
     * Standard redemption page design, hosted by PassKit. Mandatory field if the type is any of the customer initiated redemptions.
     *
     * Generated from protobuf field <code>.single_use_coupons.StandardPassKitHostedPage standardSettings = 7;</code>
     * @param \Single_use_coupons\StandardPassKitHostedPage $var
     * @return $this
     */
    public function setStandardSettings($var)
    {
        GPBUtil::checkMessage($var, \Single_use_coupons\StandardPassKitHostedPage::class);
        $this->standardSettings = $var;

        return $this;
    }

}

