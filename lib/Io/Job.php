<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/job.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * Auto generated 22 char identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The username of the user that requested the job.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * The protocol of the associated resource.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     */
    protected $protocol = 0;
    /**
     * The status of the job.
     *
     * Generated from protobuf field <code>.io.JobStatus status = 4;</code>
     */
    protected $status = 0;
    /**
     * The type of job running.
     *
     * Generated from protobuf field <code>.io.JobType type = 5;</code>
     */
    protected $type = 0;
    /**
     * Defines the recurrence schedule of the job.
     *
     * Generated from protobuf field <code>.io.Schedule schedule = 6;</code>
     */
    protected $schedule = null;
    /**
     * The date the job was created in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 7;</code>
     */
    protected $created = null;
    /**
     * The date the job was updated in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 8;</code>
     */
    protected $updated = null;
    /**
     * The date the job will run for the first time in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp firstRun = 9;</code>
     */
    protected $firstRun = null;
    /**
     * The date the job will run for the last time in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finalRun = 10;</code>
     */
    protected $finalRun = null;
    /**
     * The date the job will run next in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp nextRun = 11;</code>
     */
    protected $nextRun = null;
    /**
     * The date the job was last run in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastRun = 12;</code>
     */
    protected $lastRun = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Auto generated 22 char identifier.
     *     @type string $username
     *           The username of the user that requested the job.
     *     @type int $protocol
     *           The protocol of the associated resource.
     *     @type int $status
     *           The status of the job.
     *     @type int $type
     *           The type of job running.
     *     @type \Io\Schedule $schedule
     *           Defines the recurrence schedule of the job.
     *     @type \Google\Protobuf\Timestamp $created
     *           The date the job was created in the PassKit system.
     *     @type \Google\Protobuf\Timestamp $updated
     *           The date the job was updated in the PassKit system.
     *     @type \Google\Protobuf\Timestamp $firstRun
     *           The date the job will run for the first time in the PassKit system.
     *     @type \Google\Protobuf\Timestamp $finalRun
     *           The date the job will run for the last time in the PassKit system.
     *     @type \Google\Protobuf\Timestamp $nextRun
     *           The date the job will run next in the PassKit system.
     *     @type \Google\Protobuf\Timestamp $lastRun
     *           The date the job was last run in the PassKit system.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Auto generated 22 char identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Auto generated 22 char identifier.
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
     * The username of the user that requested the job.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The username of the user that requested the job.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * The protocol of the associated resource.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     * @return int
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * The protocol of the associated resource.
     *
     * Generated from protobuf field <code>.io.PassProtocol protocol = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkEnum($var, \Io\PassProtocol::class);
        $this->protocol = $var;

        return $this;
    }

    /**
     * The status of the job.
     *
     * Generated from protobuf field <code>.io.JobStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the job.
     *
     * Generated from protobuf field <code>.io.JobStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\JobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The type of job running.
     *
     * Generated from protobuf field <code>.io.JobType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of job running.
     *
     * Generated from protobuf field <code>.io.JobType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Io\JobType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Defines the recurrence schedule of the job.
     *
     * Generated from protobuf field <code>.io.Schedule schedule = 6;</code>
     * @return \Io\Schedule|null
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
     * Defines the recurrence schedule of the job.
     *
     * Generated from protobuf field <code>.io.Schedule schedule = 6;</code>
     * @param \Io\Schedule $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkMessage($var, \Io\Schedule::class);
        $this->schedule = $var;

        return $this;
    }

    /**
     * The date the job was created in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 7;</code>
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
     * The date the job was created in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 7;</code>
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
     * The date the job was updated in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 8;</code>
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
     * The date the job was updated in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 8;</code>
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
     * The date the job will run for the first time in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp firstRun = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFirstRun()
    {
        return isset($this->firstRun) ? $this->firstRun : null;
    }

    public function hasFirstRun()
    {
        return isset($this->firstRun);
    }

    public function clearFirstRun()
    {
        unset($this->firstRun);
    }

    /**
     * The date the job will run for the first time in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp firstRun = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirstRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->firstRun = $var;

        return $this;
    }

    /**
     * The date the job will run for the last time in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finalRun = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFinalRun()
    {
        return isset($this->finalRun) ? $this->finalRun : null;
    }

    public function hasFinalRun()
    {
        return isset($this->finalRun);
    }

    public function clearFinalRun()
    {
        unset($this->finalRun);
    }

    /**
     * The date the job will run for the last time in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finalRun = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFinalRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->finalRun = $var;

        return $this;
    }

    /**
     * The date the job will run next in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp nextRun = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNextRun()
    {
        return isset($this->nextRun) ? $this->nextRun : null;
    }

    public function hasNextRun()
    {
        return isset($this->nextRun);
    }

    public function clearNextRun()
    {
        unset($this->nextRun);
    }

    /**
     * The date the job will run next in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp nextRun = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNextRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->nextRun = $var;

        return $this;
    }

    /**
     * The date the job was last run in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastRun = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastRun()
    {
        return isset($this->lastRun) ? $this->lastRun : null;
    }

    public function hasLastRun()
    {
        return isset($this->lastRun);
    }

    public function clearLastRun()
    {
        unset($this->lastRun);
    }

    /**
     * The date the job was last run in the PassKit system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastRun = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->lastRun = $var;

        return $this;
    }

}

