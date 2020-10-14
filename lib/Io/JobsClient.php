<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 */
class JobsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Io\CsvImportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function importCsv(\Io\CsvImportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Jobs/importCsv',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getJobs(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Jobs/getJobs',
        $argument,
        ['\Io\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getJob(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Jobs/getJob',
        $argument,
        ['\Io\Job', 'decode'],
        $metadata, $options);
    }

}
