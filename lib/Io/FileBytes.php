<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/common_objects.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.FileBytes</code>
 */
class FileBytes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes fileBytes = 1;</code>
     */
    protected $fileBytes = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fileBytes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes fileBytes = 1;</code>
     * @return string
     */
    public function getFileBytes()
    {
        return $this->fileBytes;
    }

    /**
     * Generated from protobuf field <code>bytes fileBytes = 1;</code>
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

