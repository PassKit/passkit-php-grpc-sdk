<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.TicketListRequest</code>
 */
class TicketListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Filters: allows to filter on additional ticket data (i.e. group id, pass install status, updated etc).
     *
     * Generated from protobuf field <code>.io.Filters filters = 7;</code>
     */
    protected $filters = null;
    protected $production;
    protected $event;
    protected $ticketType;

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
     *     @type string $eventId
     *           Event ID generated by PassKit.
     *     @type \Event_tickets\EventFilterByVenueAndStart $eventFilterByVenueAndStart
     *     @type string $ticketTypeId
     *           PassKit Ticket Type ID.
     *     @type string $ticketTypeUid
     *           User Defined Ticket Type ID.
     *     @type \Io\Filters $filters
     *           Filters: allows to filter on additional ticket data (i.e. group id, pass install status, updated etc).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Ticket::initOnce();
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
     * Event ID generated by PassKit.
     *
     * Generated from protobuf field <code>string eventId = 3;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->readOneof(3);
    }

    public function hasEventId()
    {
        return $this->hasOneof(3);
    }

    /**
     * Event ID generated by PassKit.
     *
     * Generated from protobuf field <code>string eventId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_tickets.EventFilterByVenueAndStart eventFilterByVenueAndStart = 4;</code>
     * @return \Event_tickets\EventFilterByVenueAndStart
     */
    public function getEventFilterByVenueAndStart()
    {
        return $this->readOneof(4);
    }

    public function hasEventFilterByVenueAndStart()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.event_tickets.EventFilterByVenueAndStart eventFilterByVenueAndStart = 4;</code>
     * @param \Event_tickets\EventFilterByVenueAndStart $var
     * @return $this
     */
    public function setEventFilterByVenueAndStart($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\EventFilterByVenueAndStart::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * PassKit Ticket Type ID.
     *
     * Generated from protobuf field <code>string ticketTypeId = 5;</code>
     * @return string
     */
    public function getTicketTypeId()
    {
        return $this->readOneof(5);
    }

    public function hasTicketTypeId()
    {
        return $this->hasOneof(5);
    }

    /**
     * PassKit Ticket Type ID.
     *
     * Generated from protobuf field <code>string ticketTypeId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * User Defined Ticket Type ID.
     *
     * Generated from protobuf field <code>string ticketTypeUid = 6;</code>
     * @return string
     */
    public function getTicketTypeUid()
    {
        return $this->readOneof(6);
    }

    public function hasTicketTypeUid()
    {
        return $this->hasOneof(6);
    }

    /**
     * User Defined Ticket Type ID.
     *
     * Generated from protobuf field <code>string ticketTypeUid = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketTypeUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Filters: allows to filter on additional ticket data (i.e. group id, pass install status, updated etc).
     *
     * Generated from protobuf field <code>.io.Filters filters = 7;</code>
     * @return \Io\Filters
     */
    public function getFilters()
    {
        return isset($this->filters) ? $this->filters : null;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * Filters: allows to filter on additional ticket data (i.e. group id, pass install status, updated etc).
     *
     * Generated from protobuf field <code>.io.Filters filters = 7;</code>
     * @param \Io\Filters $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Io\Filters::class);
        $this->filters = $var;

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
    public function getEvent()
    {
        return $this->whichOneof("event");
    }

    /**
     * @return string
     */
    public function getTicketType()
    {
        return $this->whichOneof("ticketType");
    }

}

