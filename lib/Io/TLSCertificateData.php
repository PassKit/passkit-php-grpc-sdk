<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/certificate/certificate.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.TLSCertificateData</code>
 */
class TLSCertificateData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string commonName = 2;</code>
     */
    protected $commonName = '';
    /**
     * Generated from protobuf field <code>string serialNumber = 3;</code>
     */
    protected $serialNumber = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp validFrom = 4;</code>
     */
    protected $validFrom = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp validTo = 5;</code>
     */
    protected $validTo = null;
    /**
     * Generated from protobuf field <code>string modulus = 6;</code>
     */
    protected $modulus = '';
    /**
     * Generated from protobuf field <code>repeated string subjectAlternativeNames = 7;</code>
     */
    private $subjectAlternativeNames;
    /**
     * Generated from protobuf field <code>string ownerUsername = 8;</code>
     */
    protected $ownerUsername = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $commonName
     *     @type string $serialNumber
     *     @type \Google\Protobuf\Timestamp $validFrom
     *     @type \Google\Protobuf\Timestamp $validTo
     *     @type string $modulus
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $subjectAlternativeNames
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
     * Generated from protobuf field <code>string commonName = 2;</code>
     * @return string
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * Generated from protobuf field <code>string commonName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommonName($var)
    {
        GPBUtil::checkString($var, True);
        $this->commonName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string serialNumber = 3;</code>
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Generated from protobuf field <code>string serialNumber = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSerialNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->serialNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp validFrom = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    public function hasValidFrom()
    {
        return isset($this->validFrom);
    }

    public function clearValidFrom()
    {
        unset($this->validFrom);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp validFrom = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValidFrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->validFrom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp validTo = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    public function hasValidTo()
    {
        return isset($this->validTo);
    }

    public function clearValidTo()
    {
        unset($this->validTo);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp validTo = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValidTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->validTo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string modulus = 6;</code>
     * @return string
     */
    public function getModulus()
    {
        return $this->modulus;
    }

    /**
     * Generated from protobuf field <code>string modulus = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setModulus($var)
    {
        GPBUtil::checkString($var, True);
        $this->modulus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string subjectAlternativeNames = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubjectAlternativeNames()
    {
        return $this->subjectAlternativeNames;
    }

    /**
     * Generated from protobuf field <code>repeated string subjectAlternativeNames = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubjectAlternativeNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subjectAlternativeNames = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ownerUsername = 8;</code>
     * @return string
     */
    public function getOwnerUsername()
    {
        return $this->ownerUsername;
    }

    /**
     * Generated from protobuf field <code>string ownerUsername = 8;</code>
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

