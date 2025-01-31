<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/tracking.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.GoogleAnalyticsDataCollectionPageEvent</code>
 */
class GoogleAnalyticsDataCollectionPageEvent
{
    /**
     * Generated from protobuf enum <code>GA_DC_EVENT_DO_NOT_USE = 0;</code>
     */
    const GA_DC_EVENT_DO_NOT_USE = 0;
    /**
     * This is the default GA even tracking page visits.
     *
     * Generated from protobuf enum <code>GA_DC_EVENT_PAGE_VIEW = 1;</code>
     */
    const GA_DC_EVENT_PAGE_VIEW = 1;
    /**
     * When a user submits the data collection form.
     *
     * Generated from protobuf enum <code>GA_DC_EVENT_SUBMIT_FORM = 2;</code>
     */
    const GA_DC_EVENT_SUBMIT_FORM = 2;

    private static $valueToName = [
        self::GA_DC_EVENT_DO_NOT_USE => 'GA_DC_EVENT_DO_NOT_USE',
        self::GA_DC_EVENT_PAGE_VIEW => 'GA_DC_EVENT_PAGE_VIEW',
        self::GA_DC_EVENT_SUBMIT_FORM => 'GA_DC_EVENT_SUBMIT_FORM',
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

