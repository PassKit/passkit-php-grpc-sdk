<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/personal.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.PersonRequest</code>
 */
class PersonRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Pass Id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * External Id of the pass holder. Needs to provide Class Id as well.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     */
    protected $externalId = '';
    /**
     * The class ID that the projects refers to (highest level protocol object; i.e. member program id, coupon campaign id, etc).
     *
     * Generated from protobuf field <code>string classId = 3;</code>
     */
    protected $classId = '';
    /**
     * Generated from protobuf field <code>.io.Person person = 4;</code>
     */
    protected $person = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Pass Id (22 characters).
     *     @type string $externalId
     *           External Id of the pass holder. Needs to provide Class Id as well.
     *     @type string $classId
     *           The class ID that the projects refers to (highest level protocol object; i.e. member program id, coupon campaign id, etc).
     *     @type \Io\Person $person
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Personal::initOnce();
        parent::__construct($data);
    }

    /**
     * Pass Id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Pass Id (22 characters).
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
     * External Id of the pass holder. Needs to provide Class Id as well.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * External Id of the pass holder. Needs to provide Class Id as well.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->externalId = $var;

        return $this;
    }

    /**
     * The class ID that the projects refers to (highest level protocol object; i.e. member program id, coupon campaign id, etc).
     *
     * Generated from protobuf field <code>string classId = 3;</code>
     * @return string
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * The class ID that the projects refers to (highest level protocol object; i.e. member program id, coupon campaign id, etc).
     *
     * Generated from protobuf field <code>string classId = 3;</code>
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
     * Generated from protobuf field <code>.io.Person person = 4;</code>
     * @return \Io\Person|null
     */
    public function getPerson()
    {
        return isset($this->person) ? $this->person : null;
    }

    public function hasPerson()
    {
        return isset($this->person);
    }

    public function clearPerson()
    {
        unset($this->person);
    }

    /**
     * Generated from protobuf field <code>.io.Person person = 4;</code>
     * @param \Io\Person $var
     * @return $this
     */
    public function setPerson($var)
    {
        GPBUtil::checkMessage($var, \Io\Person::class);
        $this->person = $var;

        return $this;
    }

}

