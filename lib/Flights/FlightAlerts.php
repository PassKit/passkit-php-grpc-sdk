<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/flight_designator.proto

namespace Flights;

use UnexpectedValueException;

/**
 * Flight alerts automatically update boarding passes as information becomes available or changes. Note that these services may incur additional usage charges.
 *
 * Protobuf type <code>flights.FlightAlerts</code>
 */
class FlightAlerts
{
    /**
     * Boarding passes will not automatically update.
     *
     * Generated from protobuf enum <code>NO_ALERTS = 0;</code>
     */
    const NO_ALERTS = 0;
    /**
     * Boarding passes will automatically update whenever a change to the departure gate/time, arrival gate/time or baggage belt information is detected.
     *
     * Generated from protobuf enum <code>ALL_ALERTS = 1;</code>
     */
    const ALL_ALERTS = 1;
    /**
     * Boarding passes will automatically update whenever a change to the departure gate is detected.
     *
     * Generated from protobuf enum <code>DEPARTURE_GATE_ALERT = 2;</code>
     */
    const DEPARTURE_GATE_ALERT = 2;
    /**
     * Boarding passes will automatically update whenever a change to the estimated departure gate is detected.
     *
     * Generated from protobuf enum <code>DEPARTURE_TIME_ALERT = 4;</code>
     */
    const DEPARTURE_TIME_ALERT = 4;
    /**
     * Boarding passes will automatically update whenever a change to the arrival gate is detected.
     *
     * Generated from protobuf enum <code>ARRIVAL_GATE_ALERT = 8;</code>
     */
    const ARRIVAL_GATE_ALERT = 8;
    /**
     * Boarding passes will automatically update whenever a change to the estimated arrival time is detected.
     *
     * Generated from protobuf enum <code>ARRIVAL_TIME_ALERT = 16;</code>
     */
    const ARRIVAL_TIME_ALERT = 16;
    /**
     * Boarding passes will automatically update whenever the baggage collection belt or area is known or changes.
     *
     * Generated from protobuf enum <code>BAGGAGE_BELT_ALERT = 32;</code>
     */
    const BAGGAGE_BELT_ALERT = 32;

    private static $valueToName = [
        self::NO_ALERTS => 'NO_ALERTS',
        self::ALL_ALERTS => 'ALL_ALERTS',
        self::DEPARTURE_GATE_ALERT => 'DEPARTURE_GATE_ALERT',
        self::DEPARTURE_TIME_ALERT => 'DEPARTURE_TIME_ALERT',
        self::ARRIVAL_GATE_ALERT => 'ARRIVAL_GATE_ALERT',
        self::ARRIVAL_TIME_ALERT => 'ARRIVAL_TIME_ALERT',
        self::BAGGAGE_BELT_ALERT => 'BAGGAGE_BELT_ALERT',
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
