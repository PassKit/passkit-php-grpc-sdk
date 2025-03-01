<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.CouponOffersListRequest</code>
 */
class CouponOffersListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string campaignId = 1;</code>
     */
    protected $campaignId = '';
    /**
     * Generated from protobuf field <code>.io.Filters filters = 2;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaignId
     *     @type \Io\Filters $filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string campaignId = 1;</code>
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Generated from protobuf field <code>string campaignId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignId($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaignId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.Filters filters = 2;</code>
     * @return \Io\Filters|null
     */
    public function getFilters()
    {
        return $this->filters;
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

}

