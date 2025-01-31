<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/reporting.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.Period</code>
 */
class Period
{
    /**
     * Show individual data by day.
     *
     * Generated from protobuf enum <code>DAY = 0;</code>
     */
    const DAY = 0;
    /**
     * Default response will be in months.
     *
     * Generated from protobuf enum <code>MONTH = 1;</code>
     */
    const MONTH = 1;
    /**
     * Show individual data by year.
     *
     * Generated from protobuf enum <code>YEAR = 2;</code>
     */
    const YEAR = 2;

    private static $valueToName = [
        self::DAY => 'DAY',
        self::MONTH => 'MONTH',
        self::YEAR => 'YEAR',
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

