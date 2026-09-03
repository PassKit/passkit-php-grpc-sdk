<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// This protocol is suit for cases where the business logic is handled elsewhere, and the purpose is purely to issue and
// update content for Apple Wallet and Google Wallet.
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
     * Creates a Pass Project. Required Fields: name, protocol, classId.
     * @param \Raw\PassProject $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createPassProject(\Raw\PassProject $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/createPassProject',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing Pass Project. Required Fields: id, name, protocol, classId.
     * @param \Raw\PassProject $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Raw\PassProject>
     */
    public function updatePassProject(\Raw\PassProject $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/updatePassProject',
        $argument,
        ['\Raw\PassProject', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Pass Project by ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Raw\PassProject>
     */
    public function getPassProject(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/getPassProject',
        $argument,
        ['\Raw\PassProject', 'decode'],
        $metadata, $options);
    }

    /**
     * Copies an existing Pass Project. Required Fields: id (of the source PassProject).
     * @param \Raw\PassProjectCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyPassProject(\Raw\PassProjectCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/copyPassProject',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a Pass Project by ID. Deleting a Pass Project results in all passes being invalidated and removed. Use with caution. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deletePassProject(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/deletePassProject',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Pass record. Required Fields: passProjectId, externalId, and fields required by protocol template.
     * @param \Raw\Pass $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createPass(\Raw\Pass $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/createPass',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing Pass record. Required Fields: id.
     * @param \Raw\Pass $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updatePass(\Raw\Pass $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/updatePass',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Streams multiple Pass updates via gRPC (not available via REST). Required Fields: id for each Pass.
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
     * Retrieves a Pass by its internal ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Raw\Pass>
     */
    public function getPassById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/getPassById',
        $argument,
        ['\Raw\Pass', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Pass by its external ID and Pass Project ID. Required Fields: passProjectId, externalId.
     * @param \Raw\PassRecordByExternalIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Raw\Pass>
     */
    public function getPassByExternalId(\Raw\PassRecordByExternalIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/getPassByExternalId',
        $argument,
        ['\Raw\Pass', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a Pass record. Required Fields: id.
     * @param \Raw\Pass $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deletePass(\Raw\Pass $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/raw.Raw/deletePass',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all passes for a Pass Project. Supports pagination. Required Fields: passProjectId.
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
     * Lists all passes for a Pass Template. Supports pagination. Required Fields: passTemplateId.
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
