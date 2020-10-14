<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/member.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used to set new expiry dates for all of active members in the tier.
 *
 * Generated from protobuf message <code>members.UpdateExpiryRequest</code>
 */
class UpdateExpiryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates the ID of the program.
     *
     * Generated from protobuf field <code>string programId = 1;</code>
     */
    protected $programId = '';
    /**
     * Indicates the ID of the tier.
     *
     * Generated from protobuf field <code>string tierId = 2;</code>
     */
    protected $tierId = '';
    /**
     * Expiry date setting you want to apply for this update.
     *
     * Generated from protobuf field <code>.io.ExpirySettings expirySettings = 3;</code>
     */
    protected $expirySettings = null;
    /**
     * Timezone string in IANA timezone format applied for EXPIRE_ON_FIXED_DATE. If not provided Tier timezone is applied.
     *
     * Generated from protobuf field <code>string timezone = 4;</code>
     */
    protected $timezone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $programId
     *           Indicates the ID of the program.
     *     @type string $tierId
     *           Indicates the ID of the tier.
     *     @type \Io\ExpirySettings $expirySettings
     *           Expiry date setting you want to apply for this update.
     *     @type string $timezone
     *           Timezone string in IANA timezone format applied for EXPIRE_ON_FIXED_DATE. If not provided Tier timezone is applied.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Member\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates the ID of the program.
     *
     * Generated from protobuf field <code>string programId = 1;</code>
     * @return string
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Indicates the ID of the program.
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
     * Indicates the ID of the tier.
     *
     * Generated from protobuf field <code>string tierId = 2;</code>
     * @return string
     */
    public function getTierId()
    {
        return $this->tierId;
    }

    /**
     * Indicates the ID of the tier.
     *
     * Generated from protobuf field <code>string tierId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTierId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tierId = $var;

        return $this;
    }

    /**
     * Expiry date setting you want to apply for this update.
     *
     * Generated from protobuf field <code>.io.ExpirySettings expirySettings = 3;</code>
     * @return \Io\ExpirySettings
     */
    public function getExpirySettings()
    {
        return isset($this->expirySettings) ? $this->expirySettings : null;
    }

    public function hasExpirySettings()
    {
        return isset($this->expirySettings);
    }

    public function clearExpirySettings()
    {
        unset($this->expirySettings);
    }

    /**
     * Expiry date setting you want to apply for this update.
     *
     * Generated from protobuf field <code>.io.ExpirySettings expirySettings = 3;</code>
     * @param \Io\ExpirySettings $var
     * @return $this
     */
    public function setExpirySettings($var)
    {
        GPBUtil::checkMessage($var, \Io\ExpirySettings::class);
        $this->expirySettings = $var;

        return $this;
    }

    /**
     * Timezone string in IANA timezone format applied for EXPIRE_ON_FIXED_DATE. If not provided Tier timezone is applied.
     *
     * Generated from protobuf field <code>string timezone = 4;</code>
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Timezone string in IANA timezone format applied for EXPIRE_ON_FIXED_DATE. If not provided Tier timezone is applied.
     *
     * Generated from protobuf field <code>string timezone = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTimezone($var)
    {
        GPBUtil::checkString($var, True);
        $this->timezone = $var;

        return $this;
    }

}

