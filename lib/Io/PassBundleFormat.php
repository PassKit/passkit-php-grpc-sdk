<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/common_objects.proto

namespace Io;

use UnexpectedValueException;

/**
 * PassBundleFormat is used to specify which format(s) to provide the pass content.
 *
 * Protobuf type <code>io.PassBundleFormat</code>
 */
class PassBundleFormat
{
    /**
     * The URL to the web landing page.
     *
     * Generated from protobuf enum <code>PASS_URL = 0;</code>
     */
    const PASS_URL = 0;
    /**
     * A URL that can be used in an Android app or email. Note that this is not recommended for web use.
     *
     * Generated from protobuf enum <code>GOOGLE_URL = 2;</code>
     */
    const GOOGLE_URL = 2;
    /**
     * The Base64 encoded bytes of the Apple Wallet pass bundle.
     *
     * Generated from protobuf enum <code>APPLE_PASS_BUNDLE = 8;</code>
     */
    const APPLE_PASS_BUNDLE = 8;
    /**
     * The URL to a landing page for multiple passes containing a common identifier.
     *
     * Generated from protobuf enum <code>MULTI_LINK = 16;</code>
     */
    const MULTI_LINK = 16;

    private static $valueToName = [
        self::PASS_URL => 'PASS_URL',
        self::GOOGLE_URL => 'GOOGLE_URL',
        self::APPLE_PASS_BUNDLE => 'APPLE_PASS_BUNDLE',
        self::MULTI_LINK => 'MULTI_LINK',
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

