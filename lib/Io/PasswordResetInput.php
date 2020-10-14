<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/user/user.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.PasswordResetInput</code>
 */
class PasswordResetInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string registeredEmail = 2;</code>
     */
    protected $registeredEmail = '';
    /**
     * Generated from protobuf field <code>string newPassword = 3;</code>
     */
    protected $newPassword = '';
    /**
     * Generated from protobuf field <code>string confirmNewPassword = 4;</code>
     */
    protected $confirmNewPassword = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $registeredEmail
     *     @type string $newPassword
     *     @type string $confirmNewPassword
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\User\User::initOnce();
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
     * Generated from protobuf field <code>string registeredEmail = 2;</code>
     * @return string
     */
    public function getRegisteredEmail()
    {
        return $this->registeredEmail;
    }

    /**
     * Generated from protobuf field <code>string registeredEmail = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegisteredEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->registeredEmail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string newPassword = 3;</code>
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Generated from protobuf field <code>string newPassword = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->newPassword = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string confirmNewPassword = 4;</code>
     * @return string
     */
    public function getConfirmNewPassword()
    {
        return $this->confirmNewPassword;
    }

    /**
     * Generated from protobuf field <code>string confirmNewPassword = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setConfirmNewPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->confirmNewPassword = $var;

        return $this;
    }

}

