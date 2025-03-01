<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/member/member.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used to update the expiry date of a member.
 *
 * Generated from protobuf message <code>members.MemberExpiry</code>
 */
class MemberExpiry extends \Google\Protobuf\Internal\Message
{
    /**
     * Internal PassKit ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * External member ID.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     */
    protected $externalId = '';
    /**
     * Required if externalId is set.
     *
     * Generated from protobuf field <code>string programId = 3;</code>
     */
    protected $programId = '';
    /**
     * Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 4;</code>
     */
    protected $expiryDate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Internal PassKit ID.
     *     @type string $externalId
     *           External member ID.
     *     @type string $programId
     *           Required if externalId is set.
     *     @type \Google\Protobuf\Timestamp $expiryDate
     *           Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Member\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Internal PassKit ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Internal PassKit ID.
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
     * External member ID.
     *
     * Generated from protobuf field <code>string externalId = 2;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * External member ID.
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
     * Required if externalId is set.
     *
     * Generated from protobuf field <code>string programId = 3;</code>
     * @return string
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Required if externalId is set.
     *
     * Generated from protobuf field <code>string programId = 3;</code>
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
     * Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function hasExpiryDate()
    {
        return isset($this->expiryDate);
    }

    public function clearExpiryDate()
    {
        unset($this->expiryDate);
    }

    /**
     * Indicates when the membership card expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiryDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiryDate = $var;

        return $this;
    }

}

