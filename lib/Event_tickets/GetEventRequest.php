<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/event.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.GetEventRequest</code>
 */
class GetEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Event scheduled start date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 5;</code>
     */
    protected $scheduledStartDate = null;
    protected $production;
    protected $venue;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $productionId
     *           Production ID. Required if productionUid is not provided.
     *     @type string $productionUid
     *           Production UID. Required if productionId is not provided.
     *     @type string $venueId
     *           Venue ID. Required if venueUid is not provided.
     *     @type string $venueUid
     *           Venue UID. Required if venueId is not provided.
     *     @type \Google\Protobuf\Timestamp $scheduledStartDate
     *           Event scheduled start date.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * Production ID. Required if productionUid is not provided.
     *
     * Generated from protobuf field <code>string productionId = 1;</code>
     * @return string
     */
    public function getProductionId()
    {
        return $this->readOneof(1);
    }

    public function hasProductionId()
    {
        return $this->hasOneof(1);
    }

    /**
     * Production ID. Required if productionUid is not provided.
     *
     * Generated from protobuf field <code>string productionId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProductionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Production UID. Required if productionId is not provided.
     *
     * Generated from protobuf field <code>string productionUid = 2;</code>
     * @return string
     */
    public function getProductionUid()
    {
        return $this->readOneof(2);
    }

    public function hasProductionUid()
    {
        return $this->hasOneof(2);
    }

    /**
     * Production UID. Required if productionId is not provided.
     *
     * Generated from protobuf field <code>string productionUid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProductionUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Venue ID. Required if venueUid is not provided.
     *
     * Generated from protobuf field <code>string venueId = 3;</code>
     * @return string
     */
    public function getVenueId()
    {
        return $this->readOneof(3);
    }

    public function hasVenueId()
    {
        return $this->hasOneof(3);
    }

    /**
     * Venue ID. Required if venueUid is not provided.
     *
     * Generated from protobuf field <code>string venueId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVenueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Venue UID. Required if venueId is not provided.
     *
     * Generated from protobuf field <code>string venueUid = 4;</code>
     * @return string
     */
    public function getVenueUid()
    {
        return $this->readOneof(4);
    }

    public function hasVenueUid()
    {
        return $this->hasOneof(4);
    }

    /**
     * Venue UID. Required if venueId is not provided.
     *
     * Generated from protobuf field <code>string venueUid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVenueUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Event scheduled start date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduledStartDate()
    {
        return isset($this->scheduledStartDate) ? $this->scheduledStartDate : null;
    }

    public function hasScheduledStartDate()
    {
        return isset($this->scheduledStartDate);
    }

    public function clearScheduledStartDate()
    {
        unset($this->scheduledStartDate);
    }

    /**
     * Event scheduled start date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduledStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->scheduledStartDate = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getProduction()
    {
        return $this->whichOneof("production");
    }

    /**
     * @return string
     */
    public function getVenue()
    {
        return $this->whichOneof("venue");
    }

}

