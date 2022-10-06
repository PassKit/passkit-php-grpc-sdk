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
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getMessage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/getMessage',
        $argument,
        ['\Io\Message', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createMessage(\Io\Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/createMessage',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateMessage(\Io\Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/updateMessage',
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
    public function deleteMessage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/deleteMessage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\SendMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sendMessage(\Io\SendMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Messages/sendMessage',
        $argument,
        ['\Io\SendMessageResponse', 'decode'],
        $metadata, $options);
    }

}
