<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/user/user.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.OAuth2Provider</code>
 */
class OAuth2Provider
{
    /**
     * Zero based enum, don't use 0
     *
     * Generated from protobuf enum <code>OAUTH_DO_NOT_USE = 0;</code>
     */
    const OAUTH_DO_NOT_USE = 0;
    /**
     * Membership 10-49
     *
     * Generated from protobuf enum <code>OAUTH_PATREON = 10;</code>
     */
    const OAUTH_PATREON = 10;
    /**
     * CRM 50-99
     *
     * Generated from protobuf enum <code>OAUTH_SPROUT = 50;</code>
     */
    const OAUTH_SPROUT = 50;
    /**
     * Marketing 100-149
     *
     * Generated from protobuf enum <code>OAUTH_MAILCHIMP = 100;</code>
     */
    const OAUTH_MAILCHIMP = 100;
    /**
     * Accounting 150-199
     *
     * Generated from protobuf enum <code>OAUTH_XERO = 150;</code>
     */
    const OAUTH_XERO = 150;

    private static $valueToName = [
        self::OAUTH_DO_NOT_USE => 'OAUTH_DO_NOT_USE',
        self::OAUTH_PATREON => 'OAUTH_PATREON',
        self::OAUTH_SPROUT => 'OAUTH_SPROUT',
        self::OAUTH_MAILCHIMP => 'OAUTH_MAILCHIMP',
        self::OAUTH_XERO => 'OAUTH_XERO',
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

