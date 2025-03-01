<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/flight_designator.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>flights.FlightTimes</code>
 */
class FlightTimes extends \Google\Protobuf\Internal\Message
{
    /**
     * The published departure time.
     *
     * Generated from protobuf field <code>.io.Time scheduledDepartureTime = 1;</code>
     */
    protected $scheduledDepartureTime = null;
    /**
     * The published boarding time.
     *
     * Generated from protobuf field <code>.io.Time boardingTime = 2;</code>
     */
    protected $boardingTime = null;
    /**
     * The point after which passengers will be denied boarding.
     *
     * Generated from protobuf field <code>.io.Time gateClosingTime = 3;</code>
     */
    protected $gateClosingTime = null;
    /**
     * The published, scheduled arrival time.
     *
     * Generated from protobuf field <code>.io.Time scheduledArrivalTime = 4;</code>
     */
    protected $scheduledArrivalTime = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Time $scheduledDepartureTime
     *           The published departure time.
     *     @type \Io\Time $boardingTime
     *           The published boarding time.
     *     @type \Io\Time $gateClosingTime
     *           The point after which passengers will be denied boarding.
     *     @type \Io\Time $scheduledArrivalTime
     *           The published, scheduled arrival time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\FlightDesignator::initOnce();
        parent::__construct($data);
    }

    /**
     * The published departure time.
     *
     * Generated from protobuf field <code>.io.Time scheduledDepartureTime = 1;</code>
     * @return \Io\Time|null
     */
    public function getScheduledDepartureTime()
    {
        return $this->scheduledDepartureTime;
    }

    public function hasScheduledDepartureTime()
    {
        return isset($this->scheduledDepartureTime);
    }

    public function clearScheduledDepartureTime()
    {
        unset($this->scheduledDepartureTime);
    }

    /**
     * The published departure time.
     *
     * Generated from protobuf field <code>.io.Time scheduledDepartureTime = 1;</code>
     * @param \Io\Time $var
     * @return $this
     */
    public function setScheduledDepartureTime($var)
    {
        GPBUtil::checkMessage($var, \Io\Time::class);
        $this->scheduledDepartureTime = $var;

        return $this;
    }

    /**
     * The published boarding time.
     *
     * Generated from protobuf field <code>.io.Time boardingTime = 2;</code>
     * @return \Io\Time|null
     */
    public function getBoardingTime()
    {
        return $this->boardingTime;
    }

    public function hasBoardingTime()
    {
        return isset($this->boardingTime);
    }

    public function clearBoardingTime()
    {
        unset($this->boardingTime);
    }

    /**
     * The published boarding time.
     *
     * Generated from protobuf field <code>.io.Time boardingTime = 2;</code>
     * @param \Io\Time $var
     * @return $this
     */
    public function setBoardingTime($var)
    {
        GPBUtil::checkMessage($var, \Io\Time::class);
        $this->boardingTime = $var;

        return $this;
    }

    /**
     * The point after which passengers will be denied boarding.
     *
     * Generated from protobuf field <code>.io.Time gateClosingTime = 3;</code>
     * @return \Io\Time|null
     */
    public function getGateClosingTime()
    {
        return $this->gateClosingTime;
    }

    public function hasGateClosingTime()
    {
        return isset($this->gateClosingTime);
    }

    public function clearGateClosingTime()
    {
        unset($this->gateClosingTime);
    }

    /**
     * The point after which passengers will be denied boarding.
     *
     * Generated from protobuf field <code>.io.Time gateClosingTime = 3;</code>
     * @param \Io\Time $var
     * @return $this
     */
    public function setGateClosingTime($var)
    {
        GPBUtil::checkMessage($var, \Io\Time::class);
        $this->gateClosingTime = $var;

        return $this;
    }

    /**
     * The published, scheduled arrival time.
     *
     * Generated from protobuf field <code>.io.Time scheduledArrivalTime = 4;</code>
     * @return \Io\Time|null
     */
    public function getScheduledArrivalTime()
    {
        return $this->scheduledArrivalTime;
    }

    public function hasScheduledArrivalTime()
    {
        return isset($this->scheduledArrivalTime);
    }

    public function clearScheduledArrivalTime()
    {
        unset($this->scheduledArrivalTime);
    }

    /**
     * The published, scheduled arrival time.
     *
     * Generated from protobuf field <code>.io.Time scheduledArrivalTime = 4;</code>
     * @param \Io\Time $var
     * @return $this
     */
    public function setScheduledArrivalTime($var)
    {
        GPBUtil::checkMessage($var, \Io\Time::class);
        $this->scheduledArrivalTime = $var;

        return $this;
    }

}

