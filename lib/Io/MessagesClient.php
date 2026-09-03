<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 */
class MessagesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieves a single message by its ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Message>
     */
    public function getMessage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/getMessage',
        $argument,
        ['\Io\Message', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new message that can be linked to a pass or class. Required Fields: id.
     * @param \Io\Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createMessage(\Io\Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/createMessage',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing message by ID. Required Fields: id.
     * @param \Io\Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function updateMessage(\Io\Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/updateMessage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a message by its ID. Required Fields: id. Note: Deleting a message removes it from all linked passes.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteMessage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/deleteMessage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Sends a message to specified pass IDs or to all passes in a class. Required: passId, protocol.
     * @param \Io\SendMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\SendMessageResponse>
     */
    public function sendMessage(\Io\SendMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/sendMessage',
        $argument,
        ['\Io\SendMessageResponse', 'decode'],
        $metadata, $options);
    }

}
