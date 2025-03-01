<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/event_tickets/venue.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.VenueLimitedFieldsResponse</code>
 */
class VenueLimitedFieldsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated venue id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * User generated venue id; unique within the user account.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     */
    protected $uid = '';
    /**
     * The venue name.
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
     *           PassKit generated venue id (22 characters).
     *     @type string $uid
     *           User generated venue id; unique within the user account.
     *     @type string $name
     *           The venue name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Venue::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit generated venue id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * PassKit generated venue id (22 characters).
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
     * User generated venue id; unique within the user account.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * User generated venue id; unique within the user account.
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
     * The venue name.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The venue name.
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

