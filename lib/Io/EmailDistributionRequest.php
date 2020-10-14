<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/distribution.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.EmailDistributionRequest</code>
 */
class EmailDistributionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.io.PassProtocol protocol = 2;</code>
     */
    protected $protocol = 0;
    /**
     * Generated from protobuf field <code>string alternativeEmail = 3;</code>
     */
    protected $alternativeEmail = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $protocol
     *     @type string $alternativeEmail
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.PassProtocol protocol = 2;</code>
     * @return int
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Generated from protobuf field <code>.io.PassProtocol protocol = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkEnum($var, \Io\PassProtocol::class);
        $this->protocol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string alternativeEmail = 3;</code>
     * @return string
     */
    public function getAlternativeEmail()
    {
        return $this->alternativeEmail;
    }

    /**
     * Generated from protobuf field <code>string alternativeEmail = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAlternativeEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->alternativeEmail = $var;

        return $this;
    }

}
