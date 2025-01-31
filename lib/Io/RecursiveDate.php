<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/common_objects.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * To be used for setting recursive datetime.
 *
 * Generated from protobuf message <code>io.RecursiveDate</code>
 */
class RecursiveDate extends \Google\Protobuf\Internal\Message
{
    /**
     * Crontab expression (https://crontab.guru) to declare the recursive billing period start.
     *
     * Generated from protobuf field <code>string schedule = 1;</code>
     */
    protected $schedule = '';
    /**
     * State adds flexibility to the recursive date where user can shift scheduled date. Default is TIME_STATE_CURRENT.
     * Eg. Given schedule is \@monthly, if state is PREVIOUS, the recursive date will be 'At 00:00 on day-of-PREVIOUS-month 1'.
     *
     * Generated from protobuf field <code>.io.TimeState state = 2;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $schedule
     *           Crontab expression (https://crontab.guru) to declare the recursive billing period start.
     *     @type int $state
     *           State adds flexibility to the recursive date where user can shift scheduled date. Default is TIME_STATE_CURRENT.
     *           Eg. Given schedule is \@monthly, if state is PREVIOUS, the recursive date will be 'At 00:00 on day-of-PREVIOUS-month 1'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        parent::__construct($data);
    }

    /**
     * Crontab expression (https://crontab.guru) to declare the recursive billing period start.
     *
     * Generated from protobuf field <code>string schedule = 1;</code>
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Crontab expression (https://crontab.guru) to declare the recursive billing period start.
     *
     * Generated from protobuf field <code>string schedule = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule = $var;

        return $this;
    }

    /**
     * State adds flexibility to the recursive date where user can shift scheduled date. Default is TIME_STATE_CURRENT.
     * Eg. Given schedule is \@monthly, if state is PREVIOUS, the recursive date will be 'At 00:00 on day-of-PREVIOUS-month 1'.
     *
     * Generated from protobuf field <code>.io.TimeState state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State adds flexibility to the recursive date where user can shift scheduled date. Default is TIME_STATE_CURRENT.
     * Eg. Given schedule is \@monthly, if state is PREVIOUS, the recursive date will be 'At 00:00 on day-of-PREVIOUS-month 1'.
     *
     * Generated from protobuf field <code>.io.TimeState state = 2;</code>
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

