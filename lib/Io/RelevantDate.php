<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/proximity.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Relevant Date in ISO8601 datetime.
 *
 * Generated from protobuf message <code>io.RelevantDate</code>
 */
class RelevantDate extends \Google\Protobuf\Internal\Message
{
    /**
     * Unix timestamp. ISO8601 datetime.
     *
     * Generated from protobuf field <code>uint32 timestamp = 1;</code>
     */
    protected $timestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $timestamp
     *           Unix timestamp. ISO8601 datetime.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Proximity::initOnce();
        parent::__construct($data);
    }

    /**
     * Unix timestamp. ISO8601 datetime.
     *
     * Generated from protobuf field <code>uint32 timestamp = 1;</code>
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Unix timestamp. ISO8601 datetime.
     *
     * Generated from protobuf field <code>uint32 timestamp = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint32($var);
        $this->timestamp = $var;

        return $this;
    }

}

