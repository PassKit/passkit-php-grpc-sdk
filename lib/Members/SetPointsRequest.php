<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/member.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>members.SetPointsRequest</code>
 */
class SetPointsRequest extends \Google\Protobuf\Internal\Message
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
     * The latest point balance.
     *
     * Generated from protobuf field <code>float points = 4;</code>
     */
    protected $points = 0.0;
    /**
     * The latest secondary point balance.
     *
     * Generated from protobuf field <code>float secondaryPoints = 5;</code>
     */
    protected $secondaryPoints = 0.0;
    /**
     * The latest tier point balance.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 6;</code>
     */
    protected $tierPoints = 0;
    /**
     * Reset the point balance. If set true, the point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetPoints = 7;</code>
     */
    protected $resetPoints = false;
    /**
     * Reset the secondary points. If set true, the secondary point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetSecondaryPoints = 8;</code>
     */
    protected $resetSecondaryPoints = false;
    /**
     * Reset the tier points. If set true, the tier point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetTierPoints = 9;</code>
     */
    protected $resetTierPoints = false;
    /**
     * Generated from protobuf field <code>.members.EventDetails eventDetails = 10;</code>
     */
    protected $eventDetails = null;
    /**
     * Optional field to change the tierIf of the member.
     *
     * Generated from protobuf field <code>string tierId = 11;</code>
     */
    protected $tierId = '';

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
     *     @type float $points
     *           The latest point balance.
     *     @type float $secondaryPoints
     *           The latest secondary point balance.
     *     @type int $tierPoints
     *           The latest tier point balance.
     *     @type bool $resetPoints
     *           Reset the point balance. If set true, the point balance will be 0. The default is false.
     *     @type bool $resetSecondaryPoints
     *           Reset the secondary points. If set true, the secondary point balance will be 0. The default is false.
     *     @type bool $resetTierPoints
     *           Reset the tier points. If set true, the tier point balance will be 0. The default is false.
     *     @type \Members\EventDetails $eventDetails
     *     @type string $tierId
     *           Optional field to change the tierIf of the member.
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
     * The latest point balance.
     *
     * Generated from protobuf field <code>float points = 4;</code>
     * @return float
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * The latest point balance.
     *
     * Generated from protobuf field <code>float points = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPoints($var)
    {
        GPBUtil::checkFloat($var);
        $this->points = $var;

        return $this;
    }

    /**
     * The latest secondary point balance.
     *
     * Generated from protobuf field <code>float secondaryPoints = 5;</code>
     * @return float
     */
    public function getSecondaryPoints()
    {
        return $this->secondaryPoints;
    }

    /**
     * The latest secondary point balance.
     *
     * Generated from protobuf field <code>float secondaryPoints = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setSecondaryPoints($var)
    {
        GPBUtil::checkFloat($var);
        $this->secondaryPoints = $var;

        return $this;
    }

    /**
     * The latest tier point balance.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 6;</code>
     * @return int
     */
    public function getTierPoints()
    {
        return $this->tierPoints;
    }

    /**
     * The latest tier point balance.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTierPoints($var)
    {
        GPBUtil::checkUint32($var);
        $this->tierPoints = $var;

        return $this;
    }

    /**
     * Reset the point balance. If set true, the point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetPoints = 7;</code>
     * @return bool
     */
    public function getResetPoints()
    {
        return $this->resetPoints;
    }

    /**
     * Reset the point balance. If set true, the point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetPoints = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setResetPoints($var)
    {
        GPBUtil::checkBool($var);
        $this->resetPoints = $var;

        return $this;
    }

    /**
     * Reset the secondary points. If set true, the secondary point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetSecondaryPoints = 8;</code>
     * @return bool
     */
    public function getResetSecondaryPoints()
    {
        return $this->resetSecondaryPoints;
    }

    /**
     * Reset the secondary points. If set true, the secondary point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetSecondaryPoints = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setResetSecondaryPoints($var)
    {
        GPBUtil::checkBool($var);
        $this->resetSecondaryPoints = $var;

        return $this;
    }

    /**
     * Reset the tier points. If set true, the tier point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetTierPoints = 9;</code>
     * @return bool
     */
    public function getResetTierPoints()
    {
        return $this->resetTierPoints;
    }

    /**
     * Reset the tier points. If set true, the tier point balance will be 0. The default is false.
     *
     * Generated from protobuf field <code>bool resetTierPoints = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setResetTierPoints($var)
    {
        GPBUtil::checkBool($var);
        $this->resetTierPoints = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.members.EventDetails eventDetails = 10;</code>
     * @return \Members\EventDetails|null
     */
    public function getEventDetails()
    {
        return isset($this->eventDetails) ? $this->eventDetails : null;
    }

    public function hasEventDetails()
    {
        return isset($this->eventDetails);
    }

    public function clearEventDetails()
    {
        unset($this->eventDetails);
    }

    /**
     * Generated from protobuf field <code>.members.EventDetails eventDetails = 10;</code>
     * @param \Members\EventDetails $var
     * @return $this
     */
    public function setEventDetails($var)
    {
        GPBUtil::checkMessage($var, \Members\EventDetails::class);
        $this->eventDetails = $var;

        return $this;
    }

    /**
     * Optional field to change the tierIf of the member.
     *
     * Generated from protobuf field <code>string tierId = 11;</code>
     * @return string
     */
    public function getTierId()
    {
        return $this->tierId;
    }

    /**
     * Optional field to change the tierIf of the member.
     *
     * Generated from protobuf field <code>string tierId = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setTierId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tierId = $var;

        return $this;
    }

}

