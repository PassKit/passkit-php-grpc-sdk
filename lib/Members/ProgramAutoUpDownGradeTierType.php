<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/member/program.proto

namespace Members;

use UnexpectedValueException;

/**
 * Protobuf type <code>members.ProgramAutoUpDownGradeTierType</code>
 */
class ProgramAutoUpDownGradeTierType
{
    /**
     * Auto up / down grades based on points.
     *
     * Generated from protobuf enum <code>UPDOWNGRADE_POINTS = 0;</code>
     */
    const UPDOWNGRADE_POINTS = 0;
    /**
     * Auto up / down grades based on secondary points.
     *
     * Generated from protobuf enum <code>UPDOWNGRADE_SECONDARY_POINTS = 1;</code>
     */
    const UPDOWNGRADE_SECONDARY_POINTS = 1;
    /**
     * Auto up / down grades based on tier points.
     *
     * Generated from protobuf enum <code>UPDOWNGRADE_TIER_POINTS = 2;</code>
     */
    const UPDOWNGRADE_TIER_POINTS = 2;
    /**
     * Auto up / down grades based on # of visits.
     *
     * Generated from protobuf enum <code>UPDOWNGRADE_VISITS = 3;</code>
     */
    const UPDOWNGRADE_VISITS = 3;

    private static $valueToName = [
        self::UPDOWNGRADE_POINTS => 'UPDOWNGRADE_POINTS',
        self::UPDOWNGRADE_SECONDARY_POINTS => 'UPDOWNGRADE_SECONDARY_POINTS',
        self::UPDOWNGRADE_TIER_POINTS => 'UPDOWNGRADE_TIER_POINTS',
        self::UPDOWNGRADE_VISITS => 'UPDOWNGRADE_VISITS',
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

