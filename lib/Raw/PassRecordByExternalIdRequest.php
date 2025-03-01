<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/raw/pass.proto

namespace Raw;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>raw.PassRecordByExternalIdRequest</code>
 */
class PassRecordByExternalIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Pass Project ID
     *
     * Generated from protobuf field <code>string passProjectId = 1;</code>
     */
    protected $passProjectId = '';
    /**
     * External ID
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     */
    protected $externalId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $passProjectId
     *           Pass Project ID
     *     @type string $externalId
     *           External ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Raw\Pass::initOnce();
        parent::__construct($data);
    }

    /**
     * Pass Project ID
     *
     * Generated from protobuf field <code>string passProjectId = 1;</code>
     * @return string
     */
    public function getPassProjectId()
    {
        return $this->passProjectId;
    }

    /**
     * Pass Project ID
     *
     * Generated from protobuf field <code>string passProjectId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPassProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->passProjectId = $var;

        return $this;
    }

    /**
     * External ID
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * External ID
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

}

