<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/user/user.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.NewUserResponse</code>
 */
class NewUserResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     */
    protected $userId = '';
    /**
     * Generated from protobuf field <code>string companyId = 2;</code>
     */
    protected $companyId = '';
    /**
     * Generated from protobuf field <code>string username = 3;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>string emailAddress = 4;</code>
     */
    protected $emailAddress = '';
    /**
     * Generated from protobuf field <code>string secret = 5;</code>
     */
    protected $secret = '';
    /**
     * Generated from protobuf field <code>string certificate = 6;</code>
     */
    protected $certificate = '';
    /**
     * Generated from protobuf field <code>string privateKey = 7;</code>
     */
    protected $privateKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $userId
     *     @type string $companyId
     *     @type string $username
     *     @type string $emailAddress
     *     @type string $secret
     *     @type string $certificate
     *     @type string $privateKey
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\User\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->userId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyId = 2;</code>
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Generated from protobuf field <code>string companyId = 2;</code>
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
     * Generated from protobuf field <code>string username = 3;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 3;</code>
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
     * Generated from protobuf field <code>string emailAddress = 4;</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Generated from protobuf field <code>string emailAddress = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->emailAddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string secret = 5;</code>
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Generated from protobuf field <code>string secret = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string certificate = 6;</code>
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Generated from protobuf field <code>string certificate = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privateKey = 7;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * Generated from protobuf field <code>string privateKey = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->privateKey = $var;

        return $this;
    }

}

