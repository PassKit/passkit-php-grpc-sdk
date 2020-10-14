<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/project.proto

namespace Io;

use UnexpectedValueException;

/**
 * Protobuf type <code>io.ProjectStatus</code>
 */
class ProjectStatus
{
    /**
     * Zero based enum, don't use 0.
     *
     * Generated from protobuf enum <code>NO_PROJECT_STATUS = 0;</code>
     */
    const NO_PROJECT_STATUS = 0;
    /**
     * Active projects allow for creation of records (turned on by default).
     *
     * Generated from protobuf enum <code>PROJECT_ACTIVE_FOR_OBJECT_CREATION = 1;</code>
     */
    const PROJECT_ACTIVE_FOR_OBJECT_CREATION = 1;
    /**
     * Disabled projects do not allow for creation of records (i.e. temporarily disable enroling of members / creating of coupons, etc).
     *
     * Generated from protobuf enum <code>PROJECT_DISABLED_FOR_OBJECT_CREATION = 2;</code>
     */
    const PROJECT_DISABLED_FOR_OBJECT_CREATION = 2;
    /**
     * Default status for all projects. A draft project can do everything a published program can:
     * Cards can be created, stats will show up, etc.
     * Data belonging to draft projects is automatically purged every 7 days.
     * A draft project uses a PassKit Apple Developer Certificate, and has a PassKit legal disclaimer on the back.
     * Draft projects cannot be used for a production setup.
     *
     * Generated from protobuf enum <code>PROJECT_DRAFT = 4;</code>
     */
    const PROJECT_DRAFT = 4;
    /**
     * A project can only be published if a custom Apple Developer Certificate is uploaded, if payment details have been provided,
     * and an account email address has been validated.
     * Published projects do not have a PassKit legal disclaimer on the back.
     * Published projects do not have their data purged on a 7 day basis.
     *
     * Generated from protobuf enum <code>PROJECT_PUBLISHED = 8;</code>
     */
    const PROJECT_PUBLISHED = 8;
    /**
     * A project is private: records can only by created by authorized users / via the portal interface.
     *
     * Generated from protobuf enum <code>PROJECT_PRIVATE = 16;</code>
     */
    const PROJECT_PRIVATE = 16;
    /**
     * The project is currently over quota, and new records cannot be created (set by system only; cannot be set by user)
     *
     * Generated from protobuf enum <code>PROJECT_OVER_QUOTA = 32;</code>
     */
    const PROJECT_OVER_QUOTA = 32;
    /**
     * A project which needs to be deleted. If delete flag is set, project will be deleted in the near future.
     *
     * Generated from protobuf enum <code>PROJECT_DELETED = 64;</code>
     */
    const PROJECT_DELETED = 64;

    private static $valueToName = [
        self::NO_PROJECT_STATUS => 'NO_PROJECT_STATUS',
        self::PROJECT_ACTIVE_FOR_OBJECT_CREATION => 'PROJECT_ACTIVE_FOR_OBJECT_CREATION',
        self::PROJECT_DISABLED_FOR_OBJECT_CREATION => 'PROJECT_DISABLED_FOR_OBJECT_CREATION',
        self::PROJECT_DRAFT => 'PROJECT_DRAFT',
        self::PROJECT_PUBLISHED => 'PROJECT_PUBLISHED',
        self::PROJECT_PRIVATE => 'PROJECT_PRIVATE',
        self::PROJECT_OVER_QUOTA => 'PROJECT_OVER_QUOTA',
        self::PROJECT_DELETED => 'PROJECT_DELETED',
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
