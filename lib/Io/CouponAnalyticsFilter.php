<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/reporting.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.CouponAnalyticsFilter</code>
 */
class CouponAnalyticsFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string offerId = 1;</code>
     */
    protected $offerId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $offerId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Reporting::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string offerId = 1;</code>
     * @return string
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Generated from protobuf field <code>string offerId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOfferId($var)
    {
        GPBUtil::checkString($var, True);
        $this->offerId = $var;

        return $this;
    }

}

