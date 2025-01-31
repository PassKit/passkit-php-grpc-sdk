<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/reporting.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.EventTicketAnalyticsFilter</code>
 */
class EventTicketAnalyticsFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticketTypeId = 1;</code>
     */
    protected $ticketTypeId = '';
    /**
     * Generated from protobuf field <code>string ticketTypeUid = 2;</code>
     */
    protected $ticketTypeUid = '';
    /**
     * Generated from protobuf field <code>string venueId = 3;</code>
     */
    protected $venueId = '';
    /**
     * Generated from protobuf field <code>string venueUid = 4;</code>
     */
    protected $venueUid = '';
    /**
     * Generated from protobuf field <code>string eventId = 5;</code>
     */
    protected $eventId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticketTypeId
     *     @type string $ticketTypeUid
     *     @type string $venueId
     *     @type string $venueUid
     *     @type string $eventId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Reporting::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ticketTypeId = 1;</code>
     * @return string
     */
    public function getTicketTypeId()
    {
        return $this->ticketTypeId;
    }

    /**
     * Generated from protobuf field <code>string ticketTypeId = 1;</code>
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
     * Generated from protobuf field <code>string ticketTypeUid = 2;</code>
     * @return string
     */
    public function getTicketTypeUid()
    {
        return $this->ticketTypeUid;
    }

    /**
     * Generated from protobuf field <code>string ticketTypeUid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketTypeUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticketTypeUid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string venueId = 3;</code>
     * @return string
     */
    public function getVenueId()
    {
        return $this->venueId;
    }

    /**
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
     * Generated from protobuf field <code>string venueUid = 4;</code>
     * @return string
     */
    public function getVenueUid()
    {
        return $this->venueUid;
    }

    /**
     * Generated from protobuf field <code>string venueUid = 4;</code>
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
     * Generated from protobuf field <code>string eventId = 5;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
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

