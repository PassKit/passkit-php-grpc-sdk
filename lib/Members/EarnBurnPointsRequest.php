<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/member.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>members.EarnBurnPointsRequest</code>
 */
class EarnBurnPointsRequest extends \Google\Protobuf\Internal\Message
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
     * The amount of primary points earned or burnt. The amount needs to be greater than or equal to 0.
     *
     * Generated from protobuf field <code>float points = 4;</code>
     */
    protected $points = 0.0;
    /**
     * The amount of secondary points earned or burnt. The amount needs to be greater than or equal to 0.
     *
     * Generated from protobuf field <code>float secondaryPoints = 5;</code>
     */
    protected $secondaryPoints = 0.0;
    /**
     * The amount of tier points earned or burnt. The amount needs to be greater than or equal to 0.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 6;</code>
     */
    protected $tierPoints = 0;
    /**
     * Generated from protobuf field <code>.members.EventDetails eventDetails = 7;</code>
     */
    protected $eventDetails = null;
    /**
     * Optional field to change the tierIf of the member.
     *
     * Generated from protobuf field <code>string tierId = 8;</code>
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
     *           The amount of primary points earned or burnt. The amount needs to be greater than or equal to 0.
     *     @type float $secondaryPoints
     *           The amount of secondary points earned or burnt. The amount needs to be greater than or equal to 0.
     *     @type int $tierPoints
     *           The amount of tier points earned or burnt. The amount needs to be greater than or equal to 0.
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
     * The amount of primary points earned or burnt. The amount needs to be greater than or equal to 0.
     *
     * Generated from protobuf field <code>float points = 4;</code>
     * @return float
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * The amount of primary points earned or burnt. The amount needs to be greater than or equal to 0.
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
     * The amount of secondary points earned or burnt. The amount needs to be greater than or equal to 0.
     *
     * Generated from protobuf field <code>float secondaryPoints = 5;</code>
     * @return float
     */
    public function getSecondaryPoints()
    {
        return $this->secondaryPoints;
    }

    /**
     * The amount of secondary points earned or burnt. The amount needs to be greater than or equal to 0.
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
     * The amount of tier points earned or burnt. The amount needs to be greater than or equal to 0.
     *
     * Generated from protobuf field <code>uint32 tierPoints = 6;</code>
     * @return int
     */
    public function getTierPoints()
    {
        return $this->tierPoints;
    }

    /**
     * The amount of tier points earned or burnt. The amount needs to be greater than or equal to 0.
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
     * Generated from protobuf field <code>.members.EventDetails eventDetails = 7;</code>
     * @return \Members\EventDetails|null
     */
    public function getEventDetails()
    {
        return $this->eventDetails;
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
     * Generated from protobuf field <code>.members.EventDetails eventDetails = 7;</code>
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
     * Generated from protobuf field <code>string tierId = 8;</code>
     * @return string
     */
    public function getTierId()
    {
        return $this->tierId;
    }

    /**
     * Optional field to change the tierIf of the member.
     *
     * Generated from protobuf field <code>string tierId = 8;</code>
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

