<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 * The PassKit Distribution API allows you to create SmartPass links and manage the distribution of digital passes to your customers via email.
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
     * Sends a welcome email to a single recipient using a valid pass protocol (e.g., membership, coupon, ticket). Required Fields: passId or externalId, classId, protocol.
     * @param \Io\EmailDistributionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function sendWelcomeEmail(\Io\EmailDistributionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/sendWelcomeEmail',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Generates and returns an encrypted SmartPass link for a member, coupon, or event ticket based on the request payload. Required Fields: passId or externalId, classId.
     * @param \Io\SmartPassLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Url>
     */
    public function getSmartPassLink(\Io\SmartPassLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/getSmartPassLink',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a list of fields to be displayed on the data collection page. For the Member protocol, classId is required. Required Fields: classId (only for MEMBERSHIP protocol)
     * @param \Io\ClassObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\DataCollectionFields>
     */
    public function getDataCollectionPageFields(\Io\ClassObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/getDataCollectionPageFields',
        $argument,
        ['\Io\DataCollectionFields', 'decode'],
        $metadata, $options);
    }

    /**
     * Accepts a CSV file containing user data and a project short code, processes SmartPass creation, and sends results to the user via email. Required Fields: shortCode, csv contents.
     * @param \Io\SmartPassCsvUploadRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function uploadSmartPassCsv(\Io\SmartPassCsvUploadRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/uploadSmartPassCsv',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Imports and processes a formatted CSV file for a given protocol (e.g., member, coupon) and creates billable records. Required: classId, protocol, and valid csv contents.
     * @param \Io\ImportProtocolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function importProtocolCsv(\Io\ImportProtocolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/importProtocolCsv',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Validates a time-based one-time password (TOTP) barcode string in the format {{payload}}||{{key}}||{{timestamp}}||{{totp}}. If valid, returns the cleaned payload without TOTP metadata. Required Fields: payload.
     * @param \Io\Payload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Payload>
     */
    public function validateBarcode(\Io\Payload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/validateBarcode',
        $argument,
        ['\Io\Payload', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function addMessage(\Io\Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/addMessage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Message>
     */
    public function getMessage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/getMessage',
        $argument,
        ['\Io\Message', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getMessages(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Distribution/getMessages',
        $argument,
        ['\Io\Message', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function updateMessage(\Io\Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/updateMessage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function cancelMessage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Distribution/cancelMessage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
