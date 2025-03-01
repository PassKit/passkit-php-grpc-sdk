<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/distribution.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.DistributionChannel</code>
 */
class DistributionChannel
{
    /**
     * Generated from protobuf enum <code>NO_DISTRIBUTION = 0;</code>
     */
    const NO_DISTRIBUTION = 0;
    /**
     * Unique pass link is distributed via email (will use default PK email template if no custom Email Template is provided)
     *
     * Generated from protobuf enum <code>CHANNEL_EMAIL = 1;</code>
     */
    const CHANNEL_EMAIL = 1;
    /**
     * Unique pass link is distributed via SMS (will use default PK SMS template if no custom SMS Template is provided)
     *
     * Generated from protobuf enum <code>CHANNEL_SMS = 2;</code>
     */
    const CHANNEL_SMS = 2;

    private static $valueToName = [
        self::NO_DISTRIBUTION => 'NO_DISTRIBUTION',
        self::CHANNEL_EMAIL => 'CHANNEL_EMAIL',
        self::CHANNEL_SMS => 'CHANNEL_SMS',
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

