<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 */
class DistributionClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Io\EmailDistributionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sendWelcomeEmail(\Io\EmailDistributionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/sendWelcomeEmail',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\SmartPassLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getSmartPassLink(\Io\SmartPassLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/getSmartPassLink',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ClassObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getDataCollectionPageFields(\Io\ClassObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/getDataCollectionPageFields',
        $argument,
        ['\Io\DataCollectionFields', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\SmartPassCsvUploadRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function uploadSmartPassCsv(\Io\SmartPassCsvUploadRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/uploadSmartPassCsv',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ImportProtocolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function importProtocolCsv(\Io\ImportProtocolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/importProtocolCsv',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Payload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function validateBarcode(\Io\Payload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/validateBarcode',
        $argument,
        ['\Io\Payload', 'decode'],
        $metadata, $options);
    }

}
