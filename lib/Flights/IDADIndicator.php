<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/barcode.proto

namespace Flights;

use UnexpectedValueException;

/**
 * Industry Discount / Airline Discount codes. See IATA Recommended Practice 1788.
 *
 * Protobuf type <code>flights.IDADIndicator</code>
 */
class IDADIndicator
{
    /**
     * No Industry discount
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Industry discount, other carrier employee/all other eligible persons, firm reservation
     *
     * Generated from protobuf enum <code>IDN1 = 1;</code>
     */
    const IDN1 = 1;
    /**
     * Industry discount, other carrier employee/all other eligible persons, space available
     *
     * Generated from protobuf enum <code>IDN2 = 2;</code>
     */
    const IDN2 = 2;
    /**
     * Industry discount, other carrier employee travelling on duty, firm reservation
     *
     * Generated from protobuf enum <code>IDB1 = 3;</code>
     */
    const IDB1 = 3;
    /**
     * Industry discount, other carrier employee travelling on duty, pace available
     *
     * Generated from protobuf enum <code>IDB2 = 4;</code>
     */
    const IDB2 = 4;
    /**
     * Ticket issued pursuant to Resolution 880
     *
     * Generated from protobuf enum <code>AD = 5;</code>
     */
    const AD = 5;
    /**
     * Ticket issued pursuant to Resolution 200g
     *
     * Generated from protobuf enum <code>DG = 6;</code>
     */
    const DG = 6;
    /**
     * Discount not covered by industry regulations (for online use only)
     *
     * Generated from protobuf enum <code>DM = 7;</code>
     */
    const DM = 7;
    /**
     * Ticket issued pursuant to Resolution 886
     *
     * Generated from protobuf enum <code>GE = 8;</code>
     */
    const GE = 8;
    /**
     * Ticket issued pursuant to Resolution 788
     *
     * Generated from protobuf enum <code>IG = 9;</code>
     */
    const IG = 9;
    /**
     * Ticket issued pursuant to Resolution 888
     *
     * Generated from protobuf enum <code>RG = 10;</code>
     */
    const RG = 10;
    /**
     * Ticket issued pursuant to Resolution 884
     *
     * Generated from protobuf enum <code>UD = 11;</code>
     */
    const UD = 11;
    /**
     * Industry discount ticket - no classification designator
     *
     * Generated from protobuf enum <code>ID = 12;</code>
     */
    const ID = 12;
    /**
     * Industry discount, member's own employee travelling on duty, firm reservation
     *
     * Generated from protobuf enum <code>IDFS1 = 13;</code>
     */
    const IDFS1 = 13;
    /**
     * Industry discount, member's own employee travelling on duty, space available
     *
     * Generated from protobuf enum <code>IDFS2 = 14;</code>
     */
    const IDFS2 = 14;
    /**
     * Industry discount, member's own employee/dependant, firm reservation
     *
     * Generated from protobuf enum <code>IDR1 = 15;</code>
     */
    const IDR1 = 15;
    /**
     * Industry discount, member's own employee/dependant, space available
     *
     * Generated from protobuf enum <code>IDR2 = 16;</code>
     */
    const IDR2 = 16;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::IDN1 => 'IDN1',
        self::IDN2 => 'IDN2',
        self::IDB1 => 'IDB1',
        self::IDB2 => 'IDB2',
        self::AD => 'AD',
        self::DG => 'DG',
        self::DM => 'DM',
        self::GE => 'GE',
        self::IG => 'IG',
        self::RG => 'RG',
        self::UD => 'UD',
        self::ID => 'ID',
        self::IDFS1 => 'IDFS1',
        self::IDFS2 => 'IDFS2',
        self::IDR1 => 'IDR1',
        self::IDR2 => 'IDR2',
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
