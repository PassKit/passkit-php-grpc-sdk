<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.TicketNumber</code>
 */
class TicketNumber extends \Google\Protobuf\Internal\Message
{
    /**
     * The Production id (22 character identifier), or the Production user defined id.
     *
     * Generated from protobuf field <code>string productionId = 1;</code>
     */
    protected $productionId = '';
    /**
     * The user defined ticket number (unique within production)
     *
     * Generated from protobuf field <code>string ticketNumber = 2;</code>
     */
    protected $ticketNumber = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $productionId
     *           The Production id (22 character identifier), or the Production user defined id.
     *     @type string $ticketNumber
     *           The user defined ticket number (unique within production)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Ticket::initOnce();
        parent::__construct($data);
    }

    /**
     * The Production id (22 character identifier), or the Production user defined id.
     *
     * Generated from protobuf field <code>string productionId = 1;</code>
     * @return string
     */
    public function getProductionId()
    {
        return $this->productionId;
    }

    /**
     * The Production id (22 character identifier), or the Production user defined id.
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
     * The user defined ticket number (unique within production)
     *
     * Generated from protobuf field <code>string ticketNumber = 2;</code>
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * The user defined ticket number (unique within production)
     *
     * Generated from protobuf field <code>string ticketNumber = 2;</code>
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

