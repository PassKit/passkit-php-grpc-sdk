<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/certificate/certificate.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.PrivateKeyData</code>
 */
class PrivateKeyData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 4;</code>
     */
    protected $expiry = null;
    /**
     * Generated from protobuf field <code>string ownerUsername = 5;</code>
     */
    protected $ownerUsername = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type string $description
     *     @type \Google\Protobuf\Timestamp $expiry
     *     @type string $ownerUsername
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Certificate\Certificate::initOnce();
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpiry()
    {
        return isset($this->expiry) ? $this->expiry : null;
    }

    public function hasExpiry()
    {
        return isset($this->expiry);
    }

    public function clearExpiry()
    {
        unset($this->expiry);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ownerUsername = 5;</code>
     * @return string
     */
    public function getOwnerUsername()
    {
        return $this->ownerUsername;
    }

    /**
     * Generated from protobuf field <code>string ownerUsername = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->ownerUsername = $var;

        return $this;
    }

}
