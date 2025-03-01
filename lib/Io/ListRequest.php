<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/common_objects.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.ListRequest</code>
 */
class ListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string classId = 1;</code>
     */
    protected $classId = '';
    /**
     * Generated from protobuf field <code>.io.PassProtocol protocol = 2;</code>
     */
    protected $protocol = 0;
    /**
     * Generated from protobuf field <code>.io.Filters filters = 3;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $classId
     *     @type int $protocol
     *     @type \Io\Filters $filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string classId = 1;</code>
     * @return string
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Generated from protobuf field <code>string classId = 1;</code>
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
     * Generated from protobuf field <code>.io.PassProtocol protocol = 2;</code>
     * @return int
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Generated from protobuf field <code>.io.PassProtocol protocol = 2;</code>
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
     * Generated from protobuf field <code>.io.Filters filters = 3;</code>
     * @return \Io\Filters|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * Generated from protobuf field <code>.io.Filters filters = 3;</code>
     * @param \Io\Filters $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Io\Filters::class);
        $this->filters = $var;

        return $this;
    }

}

