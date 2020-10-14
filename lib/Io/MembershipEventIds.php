<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/integration.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Array of subscribing membership protocol events.
 *
 * Generated from protobuf message <code>io.MembershipEventIds</code>
 */
class MembershipEventIds extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .io.MembershipEventId ids = 1;</code>
     */
    private $ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Integration::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .io.MembershipEventId ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated .io.MembershipEventId ids = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\MembershipEventId::class);
        $this->ids = $arr;

        return $this;
    }

}
