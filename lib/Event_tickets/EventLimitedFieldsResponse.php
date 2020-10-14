<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/event.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.EventLimitedFieldsResponse</code>
 */
class EventLimitedFieldsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated event id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The scheduled date/time when the event starts. If the event spans multiple days, it should be the start date/time on the first day. Tickets can only be issued for events that are within 90 days of the ticket issue date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 2;</code>
     */
    protected $scheduledStartDate = null;
    /**
     * The new date/time when the event starts. This field can be used when you need to set a new event start data/time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp actualStartDate = 3;</code>
     */
    protected $actualStartDate = null;
    /**
     * The date/time when the event ends. If the event spans multiple days, it should be the end date/time on the last day.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp endDate = 4;</code>
     */
    protected $endDate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           PassKit generated event id (22 characters).
     *     @type \Google\Protobuf\Timestamp $scheduledStartDate
     *           The scheduled date/time when the event starts. If the event spans multiple days, it should be the start date/time on the first day. Tickets can only be issued for events that are within 90 days of the ticket issue date.
     *     @type \Google\Protobuf\Timestamp $actualStartDate
     *           The new date/time when the event starts. This field can be used when you need to set a new event start data/time.
     *     @type \Google\Protobuf\Timestamp $endDate
     *           The date/time when the event ends. If the event spans multiple days, it should be the end date/time on the last day.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit generated event id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * PassKit generated event id (22 characters).
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
     * The scheduled date/time when the event starts. If the event spans multiple days, it should be the start date/time on the first day. Tickets can only be issued for events that are within 90 days of the ticket issue date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 2;</code>
     * @return \Google\Protobuf\Timestamp
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
     * The scheduled date/time when the event starts. If the event spans multiple days, it should be the start date/time on the first day. Tickets can only be issued for events that are within 90 days of the ticket issue date.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduledStartDate = 2;</code>
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
     * The new date/time when the event starts. This field can be used when you need to set a new event start data/time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp actualStartDate = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getActualStartDate()
    {
        return isset($this->actualStartDate) ? $this->actualStartDate : null;
    }

    public function hasActualStartDate()
    {
        return isset($this->actualStartDate);
    }

    public function clearActualStartDate()
    {
        unset($this->actualStartDate);
    }

    /**
     * The new date/time when the event starts. This field can be used when you need to set a new event start data/time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp actualStartDate = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setActualStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->actualStartDate = $var;

        return $this;
    }

    /**
     * The date/time when the event ends. If the event spans multiple days, it should be the end date/time on the last day.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp endDate = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndDate()
    {
        return isset($this->endDate) ? $this->endDate : null;
    }

    public function hasEndDate()
    {
        return isset($this->endDate);
    }

    public function clearEndDate()
    {
        unset($this->endDate);
    }

    /**
     * The date/time when the event ends. If the event spans multiple days, it should be the end date/time on the last day.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp endDate = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->endDate = $var;

        return $this;
    }

}
