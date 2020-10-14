<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/single_use_coupons/coupon.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.ExternalIdRequest</code>
 */
class ExternalIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Coupon Campaign ID
     *
     * Generated from protobuf field <code>string couponCampaignId = 1;</code>
     */
    protected $couponCampaignId = '';
    /**
     * External ID
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     */
    protected $externalId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $couponCampaignId
     *           Coupon Campaign ID
     *     @type string $externalId
     *           External ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Coupon::initOnce();
        parent::__construct($data);
    }

    /**
     * Coupon Campaign ID
     *
     * Generated from protobuf field <code>string couponCampaignId = 1;</code>
     * @return string
     */
    public function getCouponCampaignId()
    {
        return $this->couponCampaignId;
    }

    /**
     * Coupon Campaign ID
     *
     * Generated from protobuf field <code>string couponCampaignId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCouponCampaignId($var)
    {
        GPBUtil::checkString($var, True);
        $this->couponCampaignId = $var;

        return $this;
    }

    /**
     * External ID
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * External ID
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->externalId = $var;

        return $this;
    }

}

