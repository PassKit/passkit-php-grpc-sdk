<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/reporting.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FlightAnalyticsFilter filter analytics by flight or/and flight designator.
 * FlightNumber, departureDate, boardingPoint and deplaningPoint are required to filter by flight.
 *
 * Generated from protobuf message <code>io.FlightAnalyticsFilter</code>
 */
class FlightAnalyticsFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string flightNumber = 1;</code>
     */
    protected $flightNumber = '';
    /**
     * Generated from protobuf field <code>.io.Date departureDate = 2;</code>
     */
    protected $departureDate = null;
    /**
     * Generated from protobuf field <code>string boardingPoint = 3;</code>
     */
    protected $boardingPoint = '';
    /**
     * Generated from protobuf field <code>string deplaningPoint = 4;</code>
     */
    protected $deplaningPoint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $flightNumber
     *     @type \Io\Date $departureDate
     *     @type string $boardingPoint
     *     @type string $deplaningPoint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Reporting::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string flightNumber = 1;</code>
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Generated from protobuf field <code>string flightNumber = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFlightNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->flightNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.Date departureDate = 2;</code>
     * @return \Io\Date|null
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    public function hasDepartureDate()
    {
        return isset($this->departureDate);
    }

    public function clearDepartureDate()
    {
        unset($this->departureDate);
    }

    /**
     * Generated from protobuf field <code>.io.Date departureDate = 2;</code>
     * @param \Io\Date $var
     * @return $this
     */
    public function setDepartureDate($var)
    {
        GPBUtil::checkMessage($var, \Io\Date::class);
        $this->departureDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string boardingPoint = 3;</code>
     * @return string
     */
    public function getBoardingPoint()
    {
        return $this->boardingPoint;
    }

    /**
     * Generated from protobuf field <code>string boardingPoint = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBoardingPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->boardingPoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string deplaningPoint = 4;</code>
     * @return string
     */
    public function getDeplaningPoint()
    {
        return $this->deplaningPoint;
    }

    /**
     * Generated from protobuf field <code>string deplaningPoint = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDeplaningPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->deplaningPoint = $var;

        return $this;
    }

}

