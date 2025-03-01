<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/user/user.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.BillingMeta</code>
 */
class BillingMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string companyName = 1;</code>
     */
    protected $companyName = '';
    /**
     * Generated from protobuf field <code>string taxId = 2;</code>
     */
    protected $taxId = '';
    /**
     * Generated from protobuf field <code>string reference = 3;</code>
     */
    protected $reference = '';
    /**
     * Generated from protobuf field <code>.io.Address billingAddress = 4;</code>
     */
    protected $billingAddress = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $companyName
     *     @type string $taxId
     *     @type string $reference
     *     @type \Io\Address $billingAddress
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

    /**
     * Generated from protobuf field <code>string taxId = 2;</code>
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Generated from protobuf field <code>string taxId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTaxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->taxId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reference = 3;</code>
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Generated from protobuf field <code>string reference = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.Address billingAddress = 4;</code>
     * @return \Io\Address|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function hasBillingAddress()
    {
        return isset($this->billingAddress);
    }

    public function clearBillingAddress()
    {
        unset($this->billingAddress);
    }

    /**
     * Generated from protobuf field <code>.io.Address billingAddress = 4;</code>
     * @param \Io\Address $var
     * @return $this
     */
    public function setBillingAddress($var)
    {
        GPBUtil::checkMessage($var, \Io\Address::class);
        $this->billingAddress = $var;

        return $this;
    }

}

