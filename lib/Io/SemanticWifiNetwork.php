<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/semantics.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.SemanticWifiNetwork</code>
 */
class SemanticWifiNetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string password = 1;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>string ssid = 2;</code>
     */
    protected $ssid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $password
     *     @type string $ssid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Semantics::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string password = 1;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ssid = 2;</code>
     * @return string
     */
    public function getSsid()
    {
        return $this->ssid;
    }

    /**
     * Generated from protobuf field <code>string ssid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSsid($var)
    {
        GPBUtil::checkString($var, True);
        $this->ssid = $var;

        return $this;
    }

}

