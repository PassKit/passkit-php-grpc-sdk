<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/user/user.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.CompanyName</code>
 */
class CompanyName extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string companyName = 1;</code>
     */
    protected $companyName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $companyName
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\User\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string companyName = 1;</code>
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Generated from protobuf field <code>string companyName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyName = $var;

        return $this;
    }

}
