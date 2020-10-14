<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.TicketNumberRequest</code>
 */
class TicketNumberRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Production ID. Required if productionUid is not provided.
     *
     * Generated from protobuf field <code>string productionId = 1;</code>
     */
    protected $productionId = '';
    /**
     * Production UID. Required if productionId is not provided.
     *
     * Generated from protobuf field <code>string productionUid = 2;</code>
     */
    protected $productionUid = '';
    /**
     * Ticket Number.
     *
     * Generated from protobuf field <code>string ticketNumber = 3;</code>
     */
    protected $ticketNumber = '';

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
     *     @type string $ticketNumber
     *           Ticket Number.
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
        return $this->productionId;
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
        $this->productionId = $var;

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
        return $this->productionUid;
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
        $this->productionUid = $var;

        return $this;
    }

    /**
     * Ticket Number.
     *
     * Generated from protobuf field <code>string ticketNumber = 3;</code>
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Ticket Number.
     *
     * Generated from protobuf field <code>string ticketNumber = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticketNumber = $var;

        return $this;
    }

}

