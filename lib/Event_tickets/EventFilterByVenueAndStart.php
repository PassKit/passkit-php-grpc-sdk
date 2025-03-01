<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.EventFilterByVenueAndStart</code>
 */
class EventFilterByVenueAndStart extends \Google\Protobuf\Internal\Message
{
    /**
     * Venue ID. Required if venueUid is not provided.
     *
     * Generated from protobuf field <code>string venueId = 1;</code>
     */
    protected $venueId = '';
    /**
     * Venue UID. Required if venueId is not provided.
     *
     * Generated from protobuf field <code>string venueUid = 2;</code>
     */
    protected $venueUid = '';
    /**
     * Event scheduled start date time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 3;</code>
     */
    protected $scheduledStartDate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $venueId
     *           Venue ID. Required if venueUid is not provided.
     *     @type string $venueUid
     *           Venue UID. Required if venueId is not provided.
     *     @type \Google\Protobuf\Timestamp $scheduledStartDate
     *           Event scheduled start date time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Ticket::initOnce();
        parent::__construct($data);
    }

    /**
     * Venue ID. Required if venueUid is not provided.
     *
     * Generated from protobuf field <code>string venueId = 1;</code>
     * @return string
     */
    public function getVenueId()
    {
        return $this->venueId;
    }

    /**
     * Venue ID. Required if venueUid is not provided.
     *
     * Generated from protobuf field <code>string venueId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVenueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->venueId = $var;

        return $this;
    }

    /**
     * Venue UID. Required if venueId is not provided.
     *
     * Generated from protobuf field <code>string venueUid = 2;</code>
     * @return string
     */
    public function getVenueUid()
    {
        return $this->venueUid;
    }

    /**
     * Venue UID. Required if venueId is not provided.
     *
     * Generated from protobuf field <code>string venueUid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVenueUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->venueUid = $var;

        return $this;
    }

    /**
     * Event scheduled start date time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduledStartDate()
    {
        return $this->scheduledStartDate;
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
     * Event scheduled start date time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduledStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->scheduledStartDate = $var;

        return $this;
    }

}

