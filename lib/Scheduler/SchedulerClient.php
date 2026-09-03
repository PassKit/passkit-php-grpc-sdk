<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Scheduler RPC
//
// The PassKit Scheduler API lets you schedule a job.
namespace Scheduler;

/**
 * The PassKit Scheduler API allows you to automate tasks within your PassKit programs. This API allows you to schedule one-time or recurring jobs that interact with other PassKit APIs.
 */
class SchedulerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a scheduling job. Required Fields: scheduleType, protocol, classId, jobName, scheduledTime, timezone.
     * @param \Ct\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Ct\SchedulingJobResponse>
     */
    public function createSchedulingJob(\Ct\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/createSchedulingJob',
        $argument,
        ['\Ct\SchedulingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a scheduling job by its ID. If the job has been deleted, only history logs will be returned. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Ct\SchedulingJob>
     */
    public function getSchedulingJob(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/getSchedulingJob',
        $argument,
        ['\Ct\SchedulingJob', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing scheduling job. The full SchedulingJob object must be supplied. Empty/null fields will overwrite existing data. Required Fields: id, scheduleType, protocol, classId, jobName, scheduledTime, timezone.
     * @param \Ct\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Ct\SchedulingJobResponse>
     */
    public function updateSchedulingJob(\Ct\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/updateSchedulingJob',
        $argument,
        ['\Ct\SchedulingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch updates a scheduling job. Only supplied fields will be updated. Required Fields: id.
     * @param \Ct\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Ct\SchedulingJobResponse>
     */
    public function patchSchedulingJob(\Ct\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/patchSchedulingJob',
        $argument,
        ['\Ct\SchedulingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a scheduling job by ID. History logs remain available after deletion. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteSchedulingJob(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/deleteSchedulingJob',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a specific scheduling job history log by ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Ct\JobHistory>
     */
    public function getSchedulingJobHistory(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/getSchedulingJobHistory',
        $argument,
        ['\Ct\JobHistory', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all history logs for a given scheduling job. Required Fields: jobId.
     * @param \Scheduler\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listSchedulingJobHistories(\Scheduler\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/scheduler.Scheduler/listSchedulingJobHistories',
        $argument,
        ['\Ct\JobHistory', 'decode'],
        $metadata, $options);
    }

}
