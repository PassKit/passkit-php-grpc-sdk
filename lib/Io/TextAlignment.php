<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.TextAlignment</code>
 */
class TextAlignment
{
    /**
     * Generated from protobuf enum <code>TEXT_ALIGNMENT_DO_NOT_USE = 0;</code>
     */
    const TEXT_ALIGNMENT_DO_NOT_USE = 0;
    /**
     * Generated from protobuf enum <code>LEFT = 1;</code>
     */
    const LEFT = 1;
    /**
     * Generated from protobuf enum <code>CENTER = 2;</code>
     */
    const CENTER = 2;
    /**
     * Generated from protobuf enum <code>RIGHT = 3;</code>
     */
    const RIGHT = 3;
    /**
     * Used for Apple only.
     *
     * Generated from protobuf enum <code>NATURAL = 4;</code>
     */
    const NATURAL = 4;

    private static $valueToName = [
        self::TEXT_ALIGNMENT_DO_NOT_USE => 'TEXT_ALIGNMENT_DO_NOT_USE',
        self::LEFT => 'LEFT',
        self::CENTER => 'CENTER',
        self::RIGHT => 'RIGHT',
        self::NATURAL => 'NATURAL',
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
