<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/job.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.JobStatus</code>
 */
class JobStatus
{
    /**
     * Generated from protobuf enum <code>JOB_SCHEDULED = 0;</code>
     */
    const JOB_SCHEDULED = 0;
    /**
     * Generated from protobuf enum <code>JOB_RUNNING = 1;</code>
     */
    const JOB_RUNNING = 1;
    /**
     * Generated from protobuf enum <code>JOB_PAUSED = 2;</code>
     */
    const JOB_PAUSED = 2;
    /**
     * Generated from protobuf enum <code>JOB_COMPLETED = 3;</code>
     */
    const JOB_COMPLETED = 3;
    /**
     * Generated from protobuf enum <code>JOB_COMPLETED_WITH_ERRORS = 4;</code>
     */
    const JOB_COMPLETED_WITH_ERRORS = 4;

    private static $valueToName = [
        self::JOB_SCHEDULED => 'JOB_SCHEDULED',
        self::JOB_RUNNING => 'JOB_RUNNING',
        self::JOB_PAUSED => 'JOB_PAUSED',
        self::JOB_COMPLETED => 'JOB_COMPLETED',
        self::JOB_COMPLETED_WITH_ERRORS => 'JOB_COMPLETED_WITH_ERRORS',
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

