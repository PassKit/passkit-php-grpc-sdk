<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/pass.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of pass and pass holder.
 *
 * Generated from protobuf message <code>io.Pass</code>
 */
class Pass extends \Google\Protobuf\Internal\Message
{
    /**
     * The uuid of the pass.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The class id of the pass which it belongs to.
     *
     * Generated from protobuf field <code>string classId = 2;</code>
     */
    protected $classId = '';
    /**
     * Protocol module which this pass was issued by.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     */
    protected $protocol = 0;
    /**
     * PII data of pass holder.
     *
     * Generated from protobuf field <code>.io.Person personDetails = 4;</code>
     */
    protected $personDetails = null;
    /**
     * Pass meta data such as install ip, user agent and other lifecycle data.
     *
     * Generated from protobuf field <code>.io.Metadata metadata = 5;</code>
     */
    protected $metadata = null;
    /**
     * Holds protocol specific data (e.g. tier points for Membership protocol, flight number for flight protocol)
     *
     * Generated from protobuf field <code>map<string, string> recordData = 6;</code>
     */
    private $recordData;
    /**
     * Will hold the external id of the object (as set by protocol)
     *
     * Generated from protobuf field <code>string externalId = 7;</code>
     */
    protected $externalId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The uuid of the pass.
     *     @type string $classId
     *           The class id of the pass which it belongs to.
     *     @type int $protocol
     *           Protocol module which this pass was issued by.
     *     @type \Io\Person $personDetails
     *           PII data of pass holder.
     *     @type \Io\Metadata $metadata
     *           Pass meta data such as install ip, user agent and other lifecycle data.
     *     @type array|\Google\Protobuf\Internal\MapField $recordData
     *           Holds protocol specific data (e.g. tier points for Membership protocol, flight number for flight protocol)
     *     @type string $externalId
     *           Will hold the external id of the object (as set by protocol)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Pass::initOnce();
        parent::__construct($data);
    }

    /**
     * The uuid of the pass.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The uuid of the pass.
     *
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
     * The class id of the pass which it belongs to.
     *
     * Generated from protobuf field <code>string classId = 2;</code>
     * @return string
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * The class id of the pass which it belongs to.
     *
     * Generated from protobuf field <code>string classId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClassId($var)
    {
        GPBUtil::checkString($var, True);
        $this->classId = $var;

        return $this;
    }

    /**
     * Protocol module which this pass was issued by.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     * @return int
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Protocol module which this pass was issued by.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkEnum($var, \Io\PassProtocol::class);
        $this->protocol = $var;

        return $this;
    }

    /**
     * PII data of pass holder.
     *
     * Generated from protobuf field <code>.io.Person personDetails = 4;</code>
     * @return \Io\Person|null
     */
    public function getPersonDetails()
    {
        return isset($this->personDetails) ? $this->personDetails : null;
    }

    public function hasPersonDetails()
    {
        return isset($this->personDetails);
    }

    public function clearPersonDetails()
    {
        unset($this->personDetails);
    }

    /**
     * PII data of pass holder.
     *
     * Generated from protobuf field <code>.io.Person personDetails = 4;</code>
     * @param \Io\Person $var
     * @return $this
     */
    public function setPersonDetails($var)
    {
        GPBUtil::checkMessage($var, \Io\Person::class);
        $this->personDetails = $var;

        return $this;
    }

    /**
     * Pass meta data such as install ip, user agent and other lifecycle data.
     *
     * Generated from protobuf field <code>.io.Metadata metadata = 5;</code>
     * @return \Io\Metadata|null
     */
    public function getMetadata()
    {
        return isset($this->metadata) ? $this->metadata : null;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Pass meta data such as install ip, user agent and other lifecycle data.
     *
     * Generated from protobuf field <code>.io.Metadata metadata = 5;</code>
     * @param \Io\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Io\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Holds protocol specific data (e.g. tier points for Membership protocol, flight number for flight protocol)
     *
     * Generated from protobuf field <code>map<string, string> recordData = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRecordData()
    {
        return $this->recordData;
    }

    /**
     * Holds protocol specific data (e.g. tier points for Membership protocol, flight number for flight protocol)
     *
     * Generated from protobuf field <code>map<string, string> recordData = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRecordData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->recordData = $arr;

        return $this;
    }

    /**
     * Will hold the external id of the object (as set by protocol)
     *
     * Generated from protobuf field <code>string externalId = 7;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Will hold the external id of the object (as set by protocol)
     *
     * Generated from protobuf field <code>string externalId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->externalId = $var;

        return $this;
    }

}

