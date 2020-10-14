<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/tracking.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.StandardEvent</code>
 */
class StandardEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Standard event
     *
     * Generated from protobuf field <code>.io.FbPixelStandardEvent event = 1;</code>
     */
    protected $event = 0;
    /**
     * Optional event properties
     *
     * Generated from protobuf field <code>string properties = 3;</code>
     */
    protected $properties = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $event
     *           Standard event
     *     @type string $properties
     *           Optional event properties
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Tracking::initOnce();
        parent::__construct($data);
    }

    /**
     * Standard event
     *
     * Generated from protobuf field <code>.io.FbPixelStandardEvent event = 1;</code>
     * @return int
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Standard event
     *
     * Generated from protobuf field <code>.io.FbPixelStandardEvent event = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkEnum($var, \Io\FbPixelStandardEvent::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Optional event properties
     *
     * Generated from protobuf field <code>string properties = 3;</code>
     * @return string
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional event properties
     *
     * Generated from protobuf field <code>string properties = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProperties($var)
    {
        GPBUtil::checkString($var, True);
        $this->properties = $var;

        return $this;
    }

}
