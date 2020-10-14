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
     */
    public function getSmartPasssLink(\Io\SmartPassLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/getSmartPasssLink',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

}
