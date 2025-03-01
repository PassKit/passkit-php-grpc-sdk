<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/integration.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sets up source and destination field
 *
 * Generated from protobuf message <code>io.FieldMapping</code>
 */
class FieldMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Field string key of destination data field.
     *
     * Generated from protobuf field <code>string destinationFieldKey = 1;</code>
     */
    protected $destinationFieldKey = '';
    /**
     * Field string key of destination data field.
     *
     * Generated from protobuf field <code>.io.DataType destinationFieldDataType = 2;</code>
     */
    protected $destinationFieldDataType = 0;
    /**
     * If true, when value is empty default data will be used.
     *
     * Generated from protobuf field <code>bool isRequired = 3;</code>
     */
    protected $isRequired = false;
    /**
     * Unique name of data field which becomes the data source.
     *
     * Generated from protobuf field <code>string sourceFieldUniqueName = 4;</code>
     */
    protected $sourceFieldUniqueName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destinationFieldKey
     *           Field string key of destination data field.
     *     @type int $destinationFieldDataType
     *           Field string key of destination data field.
     *     @type bool $isRequired
     *           If true, when value is empty default data will be used.
     *     @type string $sourceFieldUniqueName
     *           Unique name of data field which becomes the data source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Integration::initOnce();
        parent::__construct($data);
    }

    /**
     * Field string key of destination data field.
     *
     * Generated from protobuf field <code>string destinationFieldKey = 1;</code>
     * @return string
     */
    public function getDestinationFieldKey()
    {
        return $this->destinationFieldKey;
    }

    /**
     * Field string key of destination data field.
     *
     * Generated from protobuf field <code>string destinationFieldKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationFieldKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->destinationFieldKey = $var;

        return $this;
    }

    /**
     * Field string key of destination data field.
     *
     * Generated from protobuf field <code>.io.DataType destinationFieldDataType = 2;</code>
     * @return int
     */
    public function getDestinationFieldDataType()
    {
        return $this->destinationFieldDataType;
    }

    /**
     * Field string key of destination data field.
     *
     * Generated from protobuf field <code>.io.DataType destinationFieldDataType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDestinationFieldDataType($var)
    {
        GPBUtil::checkEnum($var, \Io\DataType::class);
        $this->destinationFieldDataType = $var;

        return $this;
    }

    /**
     * If true, when value is empty default data will be used.
     *
     * Generated from protobuf field <code>bool isRequired = 3;</code>
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * If true, when value is empty default data will be used.
     *
     * Generated from protobuf field <code>bool isRequired = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->isRequired = $var;

        return $this;
    }

    /**
     * Unique name of data field which becomes the data source.
     *
     * Generated from protobuf field <code>string sourceFieldUniqueName = 4;</code>
     * @return string
     */
    public function getSourceFieldUniqueName()
    {
        return $this->sourceFieldUniqueName;
    }

    /**
     * Unique name of data field which becomes the data source.
     *
     * Generated from protobuf field <code>string sourceFieldUniqueName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceFieldUniqueName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sourceFieldUniqueName = $var;

        return $this;
    }

}

