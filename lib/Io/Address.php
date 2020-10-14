<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/personal.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string addressLine1 = 1;</code>
     */
    protected $addressLine1 = '';
    /**
     * Generated from protobuf field <code>string addressLine2 = 2;</code>
     */
    protected $addressLine2 = '';
    /**
     * Generated from protobuf field <code>string addressLine3 = 3;</code>
     */
    protected $addressLine3 = '';
    /**
     * Generated from protobuf field <code>string city = 4;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string state = 5;</code>
     */
    protected $state = '';
    /**
     * Generated from protobuf field <code>string zipCode = 6;</code>
     */
    protected $zipCode = '';
    /**
     * Generated from protobuf field <code>string countryCode = 7;</code>
     */
    protected $countryCode = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $addressLine1
     *     @type string $addressLine2
     *     @type string $addressLine3
     *     @type string $city
     *     @type string $state
     *     @type string $zipCode
     *     @type string $countryCode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Personal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string addressLine1 = 1;</code>
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Generated from protobuf field <code>string addressLine1 = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine1($var)
    {
        GPBUtil::checkString($var, True);
        $this->addressLine1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string addressLine2 = 2;</code>
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Generated from protobuf field <code>string addressLine2 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine2($var)
    {
        GPBUtil::checkString($var, True);
        $this->addressLine2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string addressLine3 = 3;</code>
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }

    /**
     * Generated from protobuf field <code>string addressLine3 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine3($var)
    {
        GPBUtil::checkString($var, True);
        $this->addressLine3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 4;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string state = 5;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string zipCode = 6;</code>
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Generated from protobuf field <code>string zipCode = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setZipCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->zipCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string countryCode = 7;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Generated from protobuf field <code>string countryCode = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->countryCode = $var;

        return $this;
    }

}

