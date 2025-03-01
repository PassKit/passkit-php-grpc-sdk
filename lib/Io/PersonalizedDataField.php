<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/template.proto

namespace Io;

use UnexpectedValueException;

/**
 * Use to indicate what personal information to request for an Apple Wallet personalized pass.
 *
 * Protobuf type <code>io.PersonalizedDataField</code>
 */
class PersonalizedDataField
{
    /**
     * Generated from protobuf enum <code>PERSONALIZE_DO_NOT_USE = 0;</code>
     */
    const PERSONALIZE_DO_NOT_USE = 0;
    /**
     * Generated from protobuf enum <code>PERSONALIZE_NAME = 1;</code>
     */
    const PERSONALIZE_NAME = 1;
    /**
     * Generated from protobuf enum <code>PERSONALIZE_EMAIL_ADDRESS = 2;</code>
     */
    const PERSONALIZE_EMAIL_ADDRESS = 2;
    /**
     * Generated from protobuf enum <code>PERSONALIZE_PHONE_NUMBER = 4;</code>
     */
    const PERSONALIZE_PHONE_NUMBER = 4;
    /**
     * Generated from protobuf enum <code>PERSONALIZE_POSTAL_CODE = 8;</code>
     */
    const PERSONALIZE_POSTAL_CODE = 8;

    private static $valueToName = [
        self::PERSONALIZE_DO_NOT_USE => 'PERSONALIZE_DO_NOT_USE',
        self::PERSONALIZE_NAME => 'PERSONALIZE_NAME',
        self::PERSONALIZE_EMAIL_ADDRESS => 'PERSONALIZE_EMAIL_ADDRESS',
        self::PERSONALIZE_PHONE_NUMBER => 'PERSONALIZE_PHONE_NUMBER',
        self::PERSONALIZE_POSTAL_CODE => 'PERSONALIZE_POSTAL_CODE',
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

