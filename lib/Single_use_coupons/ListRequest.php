<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/single_use_coupons/coupon.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.ListRequest</code>
 */
class ListRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.io.Filters filters = 2;</code>
     */
    protected $filters = null;
    /**
     * Generated from protobuf field <code>bool emailAsCsv = 3;</code>
     */
    protected $emailAsCsv = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $couponCampaignId
     *           Coupon Campaign ID
     *     @type \Io\Filters $filters
     *           External ID
     *     @type bool $emailAsCsv
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
     * Generated from protobuf field <code>.io.Filters filters = 2;</code>
     * @return \Io\Filters
     */
    public function getFilters()
    {
        return isset($this->filters) ? $this->filters : null;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * External ID
     *
     * Generated from protobuf field <code>.io.Filters filters = 2;</code>
     * @param \Io\Filters $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Io\Filters::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool emailAsCsv = 3;</code>
     * @return bool
     */
    public function getEmailAsCsv()
    {
        return $this->emailAsCsv;
    }

    /**
     * Generated from protobuf field <code>bool emailAsCsv = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEmailAsCsv($var)
    {
        GPBUtil::checkBool($var);
        $this->emailAsCsv = $var;

        return $this;
    }

}
