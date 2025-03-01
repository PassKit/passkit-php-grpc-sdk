<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/flight_designator.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * If there are no departures on a given day (E.g. flight only operates on Tuesdays and Thursdays), the days with no departures should be nil.
 *
 * Generated from protobuf message <code>flights.FlightSchedule</code>
 */
class FlightSchedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.flights.FlightTimes monday = 1;</code>
     */
    protected $monday = null;
    /**
     * Generated from protobuf field <code>.flights.FlightTimes tuesday = 2;</code>
     */
    protected $tuesday = null;
    /**
     * Generated from protobuf field <code>.flights.FlightTimes wednesday = 3;</code>
     */
    protected $wednesday = null;
    /**
     * Generated from protobuf field <code>.flights.FlightTimes thursday = 4;</code>
     */
    protected $thursday = null;
    /**
     * Generated from protobuf field <code>.flights.FlightTimes friday = 5;</code>
     */
    protected $friday = null;
    /**
     * Generated from protobuf field <code>.flights.FlightTimes saturday = 6;</code>
     */
    protected $saturday = null;
    /**
     * Generated from protobuf field <code>.flights.FlightTimes sunday = 7;</code>
     */
    protected $sunday = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Flights\FlightTimes $monday
     *     @type \Flights\FlightTimes $tuesday
     *     @type \Flights\FlightTimes $wednesday
     *     @type \Flights\FlightTimes $thursday
     *     @type \Flights\FlightTimes $friday
     *     @type \Flights\FlightTimes $saturday
     *     @type \Flights\FlightTimes $sunday
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\FlightDesignator::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes monday = 1;</code>
     * @return \Flights\FlightTimes|null
     */
    public function getMonday()
    {
        return $this->monday;
    }

    public function hasMonday()
    {
        return isset($this->monday);
    }

    public function clearMonday()
    {
        unset($this->monday);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes monday = 1;</code>
     * @param \Flights\FlightTimes $var
     * @return $this
     */
    public function setMonday($var)
    {
        GPBUtil::checkMessage($var, \Flights\FlightTimes::class);
        $this->monday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes tuesday = 2;</code>
     * @return \Flights\FlightTimes|null
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    public function hasTuesday()
    {
        return isset($this->tuesday);
    }

    public function clearTuesday()
    {
        unset($this->tuesday);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes tuesday = 2;</code>
     * @param \Flights\FlightTimes $var
     * @return $this
     */
    public function setTuesday($var)
    {
        GPBUtil::checkMessage($var, \Flights\FlightTimes::class);
        $this->tuesday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes wednesday = 3;</code>
     * @return \Flights\FlightTimes|null
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    public function hasWednesday()
    {
        return isset($this->wednesday);
    }

    public function clearWednesday()
    {
        unset($this->wednesday);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes wednesday = 3;</code>
     * @param \Flights\FlightTimes $var
     * @return $this
     */
    public function setWednesday($var)
    {
        GPBUtil::checkMessage($var, \Flights\FlightTimes::class);
        $this->wednesday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes thursday = 4;</code>
     * @return \Flights\FlightTimes|null
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    public function hasThursday()
    {
        return isset($this->thursday);
    }

    public function clearThursday()
    {
        unset($this->thursday);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes thursday = 4;</code>
     * @param \Flights\FlightTimes $var
     * @return $this
     */
    public function setThursday($var)
    {
        GPBUtil::checkMessage($var, \Flights\FlightTimes::class);
        $this->thursday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes friday = 5;</code>
     * @return \Flights\FlightTimes|null
     */
    public function getFriday()
    {
        return $this->friday;
    }

    public function hasFriday()
    {
        return isset($this->friday);
    }

    public function clearFriday()
    {
        unset($this->friday);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes friday = 5;</code>
     * @param \Flights\FlightTimes $var
     * @return $this
     */
    public function setFriday($var)
    {
        GPBUtil::checkMessage($var, \Flights\FlightTimes::class);
        $this->friday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes saturday = 6;</code>
     * @return \Flights\FlightTimes|null
     */
    public function getSaturday()
    {
        return $this->saturday;
    }

    public function hasSaturday()
    {
        return isset($this->saturday);
    }

    public function clearSaturday()
    {
        unset($this->saturday);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes saturday = 6;</code>
     * @param \Flights\FlightTimes $var
     * @return $this
     */
    public function setSaturday($var)
    {
        GPBUtil::checkMessage($var, \Flights\FlightTimes::class);
        $this->saturday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes sunday = 7;</code>
     * @return \Flights\FlightTimes|null
     */
    public function getSunday()
    {
        return $this->sunday;
    }

    public function hasSunday()
    {
        return isset($this->sunday);
    }

    public function clearSunday()
    {
        unset($this->sunday);
    }

    /**
     * Generated from protobuf field <code>.flights.FlightTimes sunday = 7;</code>
     * @param \Flights\FlightTimes $var
     * @return $this
     */
    public function setSunday($var)
    {
        GPBUtil::checkMessage($var, \Flights\FlightTimes::class);
        $this->sunday = $var;

        return $this;
    }

}

