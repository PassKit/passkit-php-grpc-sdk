<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.RedeemTicketRequest</code>
 */
class RedeemTicketRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Ticket id for the ticket to redeem.
     *
     * Generated from protobuf field <code>.event_tickets.TicketId ticket = 1;</code>
     */
    protected $ticket = null;
    /**
     * Additional details to set for this redemption.
     *
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 3;</code>
     */
    protected $redemptionDetails = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Event_tickets\TicketId $ticket
     *           Ticket id for the ticket to redeem.
     *     @type \Event_tickets\RedemptionDetails $redemptionDetails
     *           Additional details to set for this redemption.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Ticket::initOnce();
        parent::__construct($data);
    }

    /**
     * Ticket id for the ticket to redeem.
     *
     * Generated from protobuf field <code>.event_tickets.TicketId ticket = 1;</code>
     * @return \Event_tickets\TicketId|null
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    public function hasTicket()
    {
        return isset($this->ticket);
    }

    public function clearTicket()
    {
        unset($this->ticket);
    }

    /**
     * Ticket id for the ticket to redeem.
     *
     * Generated from protobuf field <code>.event_tickets.TicketId ticket = 1;</code>
     * @param \Event_tickets\TicketId $var
     * @return $this
     */
    public function setTicket($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\TicketId::class);
        $this->ticket = $var;

        return $this;
    }

    /**
     * Additional details to set for this redemption.
     *
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 3;</code>
     * @return \Event_tickets\RedemptionDetails|null
     */
    public function getRedemptionDetails()
    {
        return $this->redemptionDetails;
    }

    public function hasRedemptionDetails()
    {
        return isset($this->redemptionDetails);
    }

    public function clearRedemptionDetails()
    {
        unset($this->redemptionDetails);
    }

    /**
     * Additional details to set for this redemption.
     *
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 3;</code>
     * @param \Event_tickets\RedemptionDetails $var
     * @return $this
     */
    public function setRedemptionDetails($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\RedemptionDetails::class);
        $this->redemptionDetails = $var;

        return $this;
    }

}

