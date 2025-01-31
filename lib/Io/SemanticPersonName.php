<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/semantics.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.SemanticPersonName</code>
 */
class SemanticPersonName extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string familyName = 1;</code>
     */
    protected $familyName = '';
    /**
     * Generated from protobuf field <code>string givenName = 2;</code>
     */
    protected $givenName = '';
    /**
     * Generated from protobuf field <code>string middleName = 3;</code>
     */
    protected $middleName = '';
    /**
     * Generated from protobuf field <code>string namePrefix = 4;</code>
     */
    protected $namePrefix = '';
    /**
     * Generated from protobuf field <code>string nameSuffix = 5;</code>
     */
    protected $nameSuffix = '';
    /**
     * Generated from protobuf field <code>string nickname = 6;</code>
     */
    protected $nickname = '';
    /**
     * The phonetic representation of the person’s name.
     *
     * Generated from protobuf field <code>string phoneticRepresentation = 7;</code>
     */
    protected $phoneticRepresentation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $familyName
     *     @type string $givenName
     *     @type string $middleName
     *     @type string $namePrefix
     *     @type string $nameSuffix
     *     @type string $nickname
     *     @type string $phoneticRepresentation
     *           The phonetic representation of the person’s name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Semantics::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string familyName = 1;</code>
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Generated from protobuf field <code>string familyName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFamilyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->familyName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string givenName = 2;</code>
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Generated from protobuf field <code>string givenName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGivenName($var)
    {
        GPBUtil::checkString($var, True);
        $this->givenName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string middleName = 3;</code>
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Generated from protobuf field <code>string middleName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMiddleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->middleName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namePrefix = 4;</code>
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * Generated from protobuf field <code>string namePrefix = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNamePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->namePrefix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nameSuffix = 5;</code>
     * @return string
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Generated from protobuf field <code>string nameSuffix = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNameSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->nameSuffix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 6;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * The phonetic representation of the person’s name.
     *
     * Generated from protobuf field <code>string phoneticRepresentation = 7;</code>
     * @return string
     */
    public function getPhoneticRepresentation()
    {
        return $this->phoneticRepresentation;
    }

    /**
     * The phonetic representation of the person’s name.
     *
     * Generated from protobuf field <code>string phoneticRepresentation = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneticRepresentation($var)
    {
        GPBUtil::checkString($var, True);
        $this->phoneticRepresentation = $var;

        return $this;
    }

}

