<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/job.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.CsvImportRequest</code>
 */
class CsvImportRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>bytes fileBytes = 3;</code>
     */
    protected $fileBytes = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $classId
     *     @type int $protocol
     *     @type string $fileBytes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Job::initOnce();
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
     * Generated from protobuf field <code>bytes fileBytes = 3;</code>
     * @return string
     */
    public function getFileBytes()
    {
        return $this->fileBytes;
    }

    /**
     * Generated from protobuf field <code>bytes fileBytes = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFileBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->fileBytes = $var;

        return $this;
    }

}
