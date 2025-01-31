<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/tracking.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.CustomEvent</code>
 */
class CustomEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Custom event name
     *
     * Generated from protobuf field <code>string event = 1;</code>
     */
    protected $event = '';
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
     *     @type string $event
     *           Custom event name
     *     @type string $properties
     *           Optional event properties
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Tracking::initOnce();
        parent::__construct($data);
    }

    /**
     * Custom event name
     *
     * Generated from protobuf field <code>string event = 1;</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Custom event name
     *
     * Generated from protobuf field <code>string event = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkString($var, True);
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

