<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.EventTicketPassRequest</code>
 */
class EventTicketPassRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If omitted, return the URL to the web pass landing page. Not used when getting or deleting the underlying boarding pass record.
     *
     * Generated from protobuf field <code>repeated .io.PassBundleFormat format = 4;</code>
     */
    private $format;
    protected $request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Id $ticketId
     *     @type \Event_tickets\TicketNumberRequest $ticketNumber
     *     @type \Event_tickets\OrderNumberRequest $orderNumber
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $format
     *           Optional. If omitted, return the URL to the web pass landing page. Not used when getting or deleting the underlying boarding pass record.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Ticket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.Id ticketId = 1;</code>
     * @return \Io\Id|null
     */
    public function getTicketId()
    {
        return $this->readOneof(1);
    }

    public function hasTicketId()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.io.Id ticketId = 1;</code>
     * @param \Io\Id $var
     * @return $this
     */
    public function setTicketId($var)
    {
        GPBUtil::checkMessage($var, \Io\Id::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_tickets.TicketNumberRequest ticketNumber = 2;</code>
     * @return \Event_tickets\TicketNumberRequest|null
     */
    public function getTicketNumber()
    {
        return $this->readOneof(2);
    }

    public function hasTicketNumber()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.event_tickets.TicketNumberRequest ticketNumber = 2;</code>
     * @param \Event_tickets\TicketNumberRequest $var
     * @return $this
     */
    public function setTicketNumber($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\TicketNumberRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_tickets.OrderNumberRequest orderNumber = 3;</code>
     * @return \Event_tickets\OrderNumberRequest|null
     */
    public function getOrderNumber()
    {
        return $this->readOneof(3);
    }

    public function hasOrderNumber()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.event_tickets.OrderNumberRequest orderNumber = 3;</code>
     * @param \Event_tickets\OrderNumberRequest $var
     * @return $this
     */
    public function setOrderNumber($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\OrderNumberRequest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. If omitted, return the URL to the web pass landing page. Not used when getting or deleting the underlying boarding pass record.
     *
     * Generated from protobuf field <code>repeated .io.PassBundleFormat format = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Optional. If omitted, return the URL to the web pass landing page. Not used when getting or deleting the underlying boarding pass record.
     *
     * Generated from protobuf field <code>repeated .io.PassBundleFormat format = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFormat($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\PassBundleFormat::class);
        $this->format = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->whichOneof("request");
    }

}

