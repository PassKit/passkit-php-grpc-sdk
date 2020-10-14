<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/ticket_type.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.TicketTypeLimitedFields</code>
 */
class TicketTypeLimitedFields extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated ticket type id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * User generated ticket type id; unique within the Production.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     */
    protected $uid = '';
    /**
     * Name of the ticket type. Internal use only.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           PassKit generated ticket type id (22 characters).
     *     @type string $uid
     *           User generated ticket type id; unique within the Production.
     *     @type string $name
     *           Name of the ticket type. Internal use only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\TicketType::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit generated ticket type id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * PassKit generated ticket type id (22 characters).
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
     * User generated ticket type id; unique within the Production.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * User generated ticket type id; unique within the Production.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Name of the ticket type. Internal use only.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the ticket type. Internal use only.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

