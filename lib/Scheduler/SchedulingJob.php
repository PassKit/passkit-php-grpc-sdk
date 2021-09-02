<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/scheduler/scheduler.proto

namespace Scheduler;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>scheduler.SchedulingJob</code>
 */
class SchedulingJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Auto generated 22 char identifier. Read only.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * HttpMethod and Endpoint with comma separation.
     * Eg. POST,https://api.pub1.passkit.io/members/count/05QFES9HNRMZb1gwcsepww
     *
     * Generated from protobuf field <code>string jobFunction = 2;</code>
     */
    protected $jobFunction = '';
    /**
     * Json string of the job function payload.
     *
     * Generated from protobuf field <code>string jobPayload = 3;</code>
     */
    protected $jobPayload = '';
    /**
     * Job name.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Job description.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Job schedule. You can set recursive or one-off job.
     *
     * Generated from protobuf field <code>.scheduler.Schedule schedule = 6;</code>
     */
    protected $schedule = null;
    /**
     * Job status. Writable values are JOB_STATUS_READY and JOB_STATUS_PAUSED only. Default is JOB_STATUS_READY.
     * Setting status=JOB_STATUS_PAUSED sets nextRunDatetime=null only when Schedule.StartsAt is not set.
     * Status will be always JOB_STATUS_READY, if you set Schedule.StartsAt.
     *
     * Generated from protobuf field <code>.scheduler.JobStatus status = 7;</code>
     */
    protected $status = 0;
    /**
     * Next scheduled run datetime. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp nextRunDatetime = 8;</code>
     */
    protected $nextRunDatetime = null;
    /**
     * The datetime when the job was executed last time. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastRunDatetime = 9;</code>
     */
    protected $lastRunDatetime = null;
    /**
     * 5 latest logs of executed jobs. Read only.
     *
     * Generated from protobuf field <code>repeated .scheduler.JobHistory logs = 10;</code>
     */
    private $logs;
    /**
     * Datetime the job was created. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 11;</code>
     */
    protected $created = null;
    /**
     * Datetime the job was last updated. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 12;</code>
     */
    protected $updated = null;
    /**
     * Datetime when the job will for the last time and expires. Read only. Expiry setting is available in the Schedule field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 13;</code>
     */
    protected $expiry = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Auto generated 22 char identifier. Read only.
     *     @type string $jobFunction
     *           HttpMethod and Endpoint with comma separation.
     *           Eg. POST,https://api.pub1.passkit.io/members/count/05QFES9HNRMZb1gwcsepww
     *     @type string $jobPayload
     *           Json string of the job function payload.
     *     @type string $name
     *           Job name.
     *     @type string $description
     *           Job description.
     *     @type \Scheduler\Schedule $schedule
     *           Job schedule. You can set recursive or one-off job.
     *     @type int $status
     *           Job status. Writable values are JOB_STATUS_READY and JOB_STATUS_PAUSED only. Default is JOB_STATUS_READY.
     *           Setting status=JOB_STATUS_PAUSED sets nextRunDatetime=null only when Schedule.StartsAt is not set.
     *           Status will be always JOB_STATUS_READY, if you set Schedule.StartsAt.
     *     @type \Google\Protobuf\Timestamp $nextRunDatetime
     *           Next scheduled run datetime. Read only.
     *     @type \Google\Protobuf\Timestamp $lastRunDatetime
     *           The datetime when the job was executed last time. Read only.
     *     @type \Scheduler\JobHistory[]|\Google\Protobuf\Internal\RepeatedField $logs
     *           5 latest logs of executed jobs. Read only.
     *     @type \Google\Protobuf\Timestamp $created
     *           Datetime the job was created. Read only.
     *     @type \Google\Protobuf\Timestamp $updated
     *           Datetime the job was last updated. Read only.
     *     @type \Google\Protobuf\Timestamp $expiry
     *           Datetime when the job will for the last time and expires. Read only. Expiry setting is available in the Schedule field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Scheduler\Scheduler::initOnce();
        parent::__construct($data);
    }

    /**
     * Auto generated 22 char identifier. Read only.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Auto generated 22 char identifier. Read only.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * HttpMethod and Endpoint with comma separation.
     * Eg. POST,https://api.pub1.passkit.io/members/count/05QFES9HNRMZb1gwcsepww
     *
     * Generated from protobuf field <code>string jobFunction = 2;</code>
     * @return string
     */
    public function getJobFunction()
    {
        return $this->jobFunction;
    }

    /**
     * HttpMethod and Endpoint with comma separation.
     * Eg. POST,https://api.pub1.passkit.io/members/count/05QFES9HNRMZb1gwcsepww
     *
     * Generated from protobuf field <code>string jobFunction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->jobFunction = $var;

        return $this;
    }

    /**
     * Json string of the job function payload.
     *
     * Generated from protobuf field <code>string jobPayload = 3;</code>
     * @return string
     */
    public function getJobPayload()
    {
        return $this->jobPayload;
    }

    /**
     * Json string of the job function payload.
     *
     * Generated from protobuf field <code>string jobPayload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJobPayload($var)
    {
        GPBUtil::checkString($var, True);
        $this->jobPayload = $var;

        return $this;
    }

    /**
     * Job name.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Job name.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Job description.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Job description.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Job schedule. You can set recursive or one-off job.
     *
     * Generated from protobuf field <code>.scheduler.Schedule schedule = 6;</code>
     * @return \Scheduler\Schedule|null
     */
    public function getSchedule()
    {
        return isset($this->schedule) ? $this->schedule : null;
    }

    public function hasSchedule()
    {
        return isset($this->schedule);
    }

    public function clearSchedule()
    {
        unset($this->schedule);
    }

    /**
     * Job schedule. You can set recursive or one-off job.
     *
     * Generated from protobuf field <code>.scheduler.Schedule schedule = 6;</code>
     * @param \Scheduler\Schedule $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkMessage($var, \Scheduler\Schedule::class);
        $this->schedule = $var;

        return $this;
    }

    /**
     * Job status. Writable values are JOB_STATUS_READY and JOB_STATUS_PAUSED only. Default is JOB_STATUS_READY.
     * Setting status=JOB_STATUS_PAUSED sets nextRunDatetime=null only when Schedule.StartsAt is not set.
     * Status will be always JOB_STATUS_READY, if you set Schedule.StartsAt.
     *
     * Generated from protobuf field <code>.scheduler.JobStatus status = 7;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Job status. Writable values are JOB_STATUS_READY and JOB_STATUS_PAUSED only. Default is JOB_STATUS_READY.
     * Setting status=JOB_STATUS_PAUSED sets nextRunDatetime=null only when Schedule.StartsAt is not set.
     * Status will be always JOB_STATUS_READY, if you set Schedule.StartsAt.
     *
     * Generated from protobuf field <code>.scheduler.JobStatus status = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Scheduler\JobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Next scheduled run datetime. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp nextRunDatetime = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNextRunDatetime()
    {
        return isset($this->nextRunDatetime) ? $this->nextRunDatetime : null;
    }

    public function hasNextRunDatetime()
    {
        return isset($this->nextRunDatetime);
    }

    public function clearNextRunDatetime()
    {
        unset($this->nextRunDatetime);
    }

    /**
     * Next scheduled run datetime. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp nextRunDatetime = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNextRunDatetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->nextRunDatetime = $var;

        return $this;
    }

    /**
     * The datetime when the job was executed last time. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastRunDatetime = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastRunDatetime()
    {
        return isset($this->lastRunDatetime) ? $this->lastRunDatetime : null;
    }

    public function hasLastRunDatetime()
    {
        return isset($this->lastRunDatetime);
    }

    public function clearLastRunDatetime()
    {
        unset($this->lastRunDatetime);
    }

    /**
     * The datetime when the job was executed last time. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastRunDatetime = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastRunDatetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->lastRunDatetime = $var;

        return $this;
    }

    /**
     * 5 latest logs of executed jobs. Read only.
     *
     * Generated from protobuf field <code>repeated .scheduler.JobHistory logs = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * 5 latest logs of executed jobs. Read only.
     *
     * Generated from protobuf field <code>repeated .scheduler.JobHistory logs = 10;</code>
     * @param \Scheduler\JobHistory[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Scheduler\JobHistory::class);
        $this->logs = $arr;

        return $this;
    }

    /**
     * Datetime the job was created. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreated()
    {
        return isset($this->created) ? $this->created : null;
    }

    public function hasCreated()
    {
        return isset($this->created);
    }

    public function clearCreated()
    {
        unset($this->created);
    }

    /**
     * Datetime the job was created. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created = $var;

        return $this;
    }

    /**
     * Datetime the job was last updated. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdated()
    {
        return isset($this->updated) ? $this->updated : null;
    }

    public function hasUpdated()
    {
        return isset($this->updated);
    }

    public function clearUpdated()
    {
        unset($this->updated);
    }

    /**
     * Datetime the job was last updated. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated = $var;

        return $this;
    }

    /**
     * Datetime when the job will for the last time and expires. Read only. Expiry setting is available in the Schedule field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 13;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiry()
    {
        return isset($this->expiry) ? $this->expiry : null;
    }

    public function hasExpiry()
    {
        return isset($this->expiry);
    }

    public function clearExpiry()
    {
        unset($this->expiry);
    }

    /**
     * Datetime when the job will for the last time and expires. Read only. Expiry setting is available in the Schedule field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 13;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry = $var;

        return $this;
    }

}

