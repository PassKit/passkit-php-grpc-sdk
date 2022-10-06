<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/user/user.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * response used by getUser
 *
 * Generated from protobuf message <code>io.GetUserResponse</code>
 */
class GetUserResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     */
    protected $companyId = '';
    /**
     * Generated from protobuf field <code>string companyName = 4;</code>
     */
    protected $companyName = '';
    /**
     * used for checking production, etc.
     *
     * Generated from protobuf field <code>uint64 companyStatus = 5;</code>
     */
    protected $companyStatus = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 6;</code>
     */
    protected $createdAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiresAt = 7;</code>
     */
    protected $expiresAt = null;
    /**
     * Generated from protobuf field <code>string regionId = 8;</code>
     */
    protected $regionId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *     @type string $username
     *     @type string $companyId
     *     @type string $companyName
     *     @type int|string $companyStatus
     *           used for checking production, etc.
     *     @type \Google\Protobuf\Timestamp $createdAt
     *     @type \Google\Protobuf\Timestamp $expiresAt
     *     @type string $regionId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\User\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyName = 4;</code>
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Generated from protobuf field <code>string companyName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyName = $var;

        return $this;
    }

    /**
     * used for checking production, etc.
     *
     * Generated from protobuf field <code>uint64 companyStatus = 5;</code>
     * @return int|string
     */
    public function getCompanyStatus()
    {
        return $this->companyStatus;
    }

    /**
     * used for checking production, etc.
     *
     * Generated from protobuf field <code>uint64 companyStatus = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompanyStatus($var)
    {
        GPBUtil::checkUint64($var);
        $this->companyStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function hasCreatedAt()
    {
        return isset($this->createdAt);
    }

    public function clearCreatedAt()
    {
        unset($this->createdAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->createdAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiresAt = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function hasExpiresAt()
    {
        return isset($this->expiresAt);
    }

    public function clearExpiresAt()
    {
        unset($this->expiresAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiresAt = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiresAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiresAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string regionId = 8;</code>
     * @return string
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Generated from protobuf field <code>string regionId = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->regionId = $var;

        return $this;
    }

}

