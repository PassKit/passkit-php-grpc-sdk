<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/billing.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.Quota</code>
 */
class Quota extends \Google\Protobuf\Internal\Message
{
    /**
     * key is one of pk.MeteredEventType
     *
     * Generated from protobuf field <code>map<uint32, .io.QuotaDetails> details = 1;</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $details
     *           key is one of pk.MeteredEventType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Billing::initOnce();
        parent::__construct($data);
    }

    /**
     * key is one of pk.MeteredEventType
     *
     * Generated from protobuf field <code>map<uint32, .io.QuotaDetails> details = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * key is one of pk.MeteredEventType
     *
     * Generated from protobuf field <code>map<uint32, .io.QuotaDetails> details = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\QuotaDetails::class);
        $this->details = $arr;

        return $this;
    }

}
