<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// This protocol is suit for cases where the business logic is handled elsewhere, and the purpose is purely to issue and
// update content for Apple Wallet and Google Pay.
namespace Raw;

/**
 */
class RawClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Raw\PassProject $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createPassProject(\Raw\PassProject $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/createPassProject',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\PassProject $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updatePassProject(\Raw\PassProject $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/updatePassProject',
        $argument,
        ['\Raw\PassProject', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getPassProject(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/getPassProject',
        $argument,
        ['\Raw\PassProject', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\PassProjectCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function copyPassProject(\Raw\PassProjectCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/copyPassProject',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deletePassProject(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/deletePassProject',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\Pass $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createPass(\Raw\Pass $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/createPass',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\Pass $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updatePass(\Raw\Pass $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/updatePass',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function streamPassUpdates($metadata = [], $options = []) {
        return $this->_bidiRequest('/raw.Raw/streamPassUpdates',
        ['\Io\Id','decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getPassById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/getPassById',
        $argument,
        ['\Raw\Pass', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\PassRecordByExternalIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getPassByExternalId(\Raw\PassRecordByExternalIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/getPassByExternalId',
        $argument,
        ['\Raw\Pass', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\Pass $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deletePass(\Raw\Pass $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/deletePass',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\ListPassesByPassProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listPassesByPassProject(\Raw\ListPassesByPassProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/raw.Raw/listPassesByPassProject',
        $argument,
        ['\Raw\Pass', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Raw\ListPassesByPassTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listPassesByPassTemplate(\Raw\ListPassesByPassTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/raw.Raw/listPassesByPassTemplate',
        $argument,
        ['\Raw\Pass', 'decode'],
        $metadata, $options);
    }

}
