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
     * @param \Ct\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createSchedulingJob(\Ct\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/createSchedulingJob',
        $argument,
        ['\Ct\SchedulingJobResponse', 'decode'],
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
        ['\Ct\SchedulingJob', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Ct\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateSchedulingJob(\Ct\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/updateSchedulingJob',
        $argument,
        ['\Ct\SchedulingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Ct\SchedulingJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function patchSchedulingJob(\Ct\SchedulingJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/scheduler.Scheduler/patchSchedulingJob',
        $argument,
        ['\Ct\SchedulingJobResponse', 'decode'],
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
        ['\Ct\JobHistory', 'decode'],
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
        ['\Ct\JobHistory', 'decode'],
        $metadata, $options);
    }

}
