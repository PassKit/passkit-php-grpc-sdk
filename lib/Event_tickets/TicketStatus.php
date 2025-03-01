<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use UnexpectedValueException;

/**
 * Protobuf type <code>event_tickets.TicketStatus</code>
 */
class TicketStatus
{
    /**
     * Generated from protobuf enum <code>STATUS_NONE = 0;</code>
     */
    const STATUS_NONE = 0;
    /**
     * Default ticket status
     *
     * Generated from protobuf enum <code>ISSUED = 1;</code>
     */
    const ISSUED = 1;
    /**
     * Set after a ticket is redeemed (the redeem endpoint is called).
     *
     * Generated from protobuf enum <code>REDEEMED = 2;</code>
     */
    const REDEEMED = 2;

    private static $valueToName = [
        self::STATUS_NONE => 'STATUS_NONE',
        self::ISSUED => 'ISSUED',
        self::REDEEMED => 'REDEEMED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

