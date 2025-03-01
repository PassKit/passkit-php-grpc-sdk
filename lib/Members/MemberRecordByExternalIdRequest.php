<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/member/member.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used to request a digital membership pass by PassKit ID.
 *
 * Generated from protobuf message <code>members.MemberRecordByExternalIdRequest</code>
 */
class MemberRecordByExternalIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Program ID.
     *
     * Generated from protobuf field <code>string programId = 1;</code>
     */
    protected $programId = '';
    /**
     * External ID.
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
     *     @type string $programId
     *           Program ID.
     *     @type string $externalId
     *           External ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Member\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Program ID.
     *
     * Generated from protobuf field <code>string programId = 1;</code>
     * @return string
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Program ID.
     *
     * Generated from protobuf field <code>string programId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProgramId($var)
    {
        GPBUtil::checkString($var, True);
        $this->programId = $var;

        return $this;
    }

    /**
     * External ID.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * External ID.
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

