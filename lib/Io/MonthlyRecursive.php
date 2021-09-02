<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/common_objects.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.MonthlyRecursive</code>
 */
class MonthlyRecursive extends \Google\Protobuf\Internal\Message
{
    /**
     * The day which the recursive period starts. Available values are 1-31.
     * Selecting 31 for the last day of any month.
     *
     * Generated from protobuf field <code>int32 dayOfMonth = 1;</code>
     */
    protected $dayOfMonth = 0;
    /**
     * Default hour is 0.
     *
     * Generated from protobuf field <code>int32 hour = 2;</code>
     */
    protected $hour = 0;
    /**
     * Default minute is 0.
     *
     * Generated from protobuf field <code>int32 minute = 3;</code>
     */
    protected $minute = 0;
    /**
     * Default second is 0.
     *
     * Generated from protobuf field <code>int32 second = 4;</code>
     */
    protected $second = 0;
    /**
     * State to select the month.
     * Eg. Given the date=15 and state=TIME_STATE_CURRENT, then the date is 15th of the current month.
     *
     * Generated from protobuf field <code>.io.TimeState state = 5;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dayOfMonth
     *           The day which the recursive period starts. Available values are 1-31.
     *           Selecting 31 for the last day of any month.
     *     @type int $hour
     *           Default hour is 0.
     *     @type int $minute
     *           Default minute is 0.
     *     @type int $second
     *           Default second is 0.
     *     @type int $state
     *           State to select the month.
     *           Eg. Given the date=15 and state=TIME_STATE_CURRENT, then the date is 15th of the current month.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        parent::__construct($data);
    }

    /**
     * The day which the recursive period starts. Available values are 1-31.
     * Selecting 31 for the last day of any month.
     *
     * Generated from protobuf field <code>int32 dayOfMonth = 1;</code>
     * @return int
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * The day which the recursive period starts. Available values are 1-31.
     * Selecting 31 for the last day of any month.
     *
     * Generated from protobuf field <code>int32 dayOfMonth = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDayOfMonth($var)
    {
        GPBUtil::checkInt32($var);
        $this->dayOfMonth = $var;

        return $this;
    }

    /**
     * Default hour is 0.
     *
     * Generated from protobuf field <code>int32 hour = 2;</code>
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Default hour is 0.
     *
     * Generated from protobuf field <code>int32 hour = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHour($var)
    {
        GPBUtil::checkInt32($var);
        $this->hour = $var;

        return $this;
    }

    /**
     * Default minute is 0.
     *
     * Generated from protobuf field <code>int32 minute = 3;</code>
     * @return int
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Default minute is 0.
     *
     * Generated from protobuf field <code>int32 minute = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMinute($var)
    {
        GPBUtil::checkInt32($var);
        $this->minute = $var;

        return $this;
    }

    /**
     * Default second is 0.
     *
     * Generated from protobuf field <code>int32 second = 4;</code>
     * @return int
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Default second is 0.
     *
     * Generated from protobuf field <code>int32 second = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->second = $var;

        return $this;
    }

    /**
     * State to select the month.
     * Eg. Given the date=15 and state=TIME_STATE_CURRENT, then the date is 15th of the current month.
     *
     * Generated from protobuf field <code>.io.TimeState state = 5;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State to select the month.
     * Eg. Given the date=15 and state=TIME_STATE_CURRENT, then the date is 15th of the current month.
     *
     * Generated from protobuf field <code>.io.TimeState state = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Io\TimeState::class);
        $this->state = $var;

        return $this;
    }

}
