<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.IssueTicketResponseIds</code>
 */
class IssueTicketResponseIds extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated ticket id (22 characters).
     *
     * Generated from protobuf field <code>string ticketId = 1;</code>
     */
    protected $ticketId = '';
    /**
     * PassKit generated production id (22 characters).
     *
     * Generated from protobuf field <code>string productionId = 2;</code>
     */
    protected $productionId = '';
    /**
     * PassKit generated venue id (22 characters).
     *
     * Generated from protobuf field <code>string venueId = 3;</code>
     */
    protected $venueId = '';
    /**
     * PassKit generated ticket type id (22 characters).
     *
     * Generated from protobuf field <code>string ticketTypeId = 4;</code>
     */
    protected $ticketTypeId = '';
    /**
     * PassKit generated event id (22 characters).
     *
     * Generated from protobuf field <code>string eventId = 5;</code>
     */
    protected $eventId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticketId
     *           PassKit generated ticket id (22 characters).
     *     @type string $productionId
     *           PassKit generated production id (22 characters).
     *     @type string $venueId
     *           PassKit generated venue id (22 characters).
     *     @type string $ticketTypeId
     *           PassKit generated ticket type id (22 characters).
     *     @type string $eventId
     *           PassKit generated event id (22 characters).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Ticket::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit generated ticket id (22 characters).
     *
     * Generated from protobuf field <code>string ticketId = 1;</code>
     * @return string
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * PassKit generated ticket id (22 characters).
     *
     * Generated from protobuf field <code>string ticketId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticketId = $var;

        return $this;
    }

    /**
     * PassKit generated production id (22 characters).
     *
     * Generated from protobuf field <code>string productionId = 2;</code>
     * @return string
     */
    public function getProductionId()
    {
        return $this->productionId;
    }

    /**
     * PassKit generated production id (22 characters).
     *
     * Generated from protobuf field <code>string productionId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProductionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->productionId = $var;

        return $this;
    }

    /**
     * PassKit generated venue id (22 characters).
     *
     * Generated from protobuf field <code>string venueId = 3;</code>
     * @return string
     */
    public function getVenueId()
    {
        return $this->venueId;
    }

    /**
     * PassKit generated venue id (22 characters).
     *
     * Generated from protobuf field <code>string venueId = 3;</code>
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
     * PassKit generated ticket type id (22 characters).
     *
     * Generated from protobuf field <code>string ticketTypeId = 4;</code>
     * @return string
     */
    public function getTicketTypeId()
    {
        return $this->ticketTypeId;
    }

    /**
     * PassKit generated ticket type id (22 characters).
     *
     * Generated from protobuf field <code>string ticketTypeId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticketTypeId = $var;

        return $this;
    }

    /**
     * PassKit generated event id (22 characters).
     *
     * Generated from protobuf field <code>string eventId = 5;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * PassKit generated event id (22 characters).
     *
     * Generated from protobuf field <code>string eventId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->eventId = $var;

        return $this;
    }

}

