<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Scheduler RPC
//
// The PassKit Scheduler API lets you schedule a job.
namespace Scheduler;

/**
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
     * @param \Scheduler\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createSchedulingJob(\Scheduler\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/createSchedulingJob',
        $argument,
        ['\Scheduler\SchedulingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getSchedulingJob(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/getSchedulingJob',
        $argument,
        ['\Scheduler\SchedulingJob', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Scheduler\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateSchedulingJob(\Scheduler\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/updateSchedulingJob',
        $argument,
        ['\Scheduler\SchedulingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Scheduler\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function patchSchedulingJob(\Scheduler\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/patchSchedulingJob',
        $argument,
        ['\Scheduler\SchedulingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deleteSchedulingJob(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/deleteSchedulingJob',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getSchedulingJobHistory(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/getSchedulingJobHistory',
        $argument,
        ['\Scheduler\JobHistory', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Scheduler\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listSchedulingJobHistories(\Scheduler\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/scheduler.Scheduler/listSchedulingJobHistories',
        $argument,
        ['\Scheduler\JobHistory', 'decode'],
        $metadata, $options);
    }

}
