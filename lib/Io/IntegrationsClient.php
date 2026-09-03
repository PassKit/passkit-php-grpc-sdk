<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 */
class IntegrationsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates integration configurations for a pass type. Required Fields: protocol, classId, integrations.
     * @param \Io\IntegrationConfigs $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createIntegrations(\Io\IntegrationConfigs $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/createIntegrations',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves integration configurations for a protocol and class. Required Fields: protocol, classId.
     * @param \Io\ProtocolIdInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\IntegrationConfigs>
     */
    public function getIntegrations(\Io\ProtocolIdInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/getIntegrations',
        $argument,
        ['\Io\IntegrationConfigs', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates integration configurations for a pass type. Required Fields: protocol, classId, integrations.
     * @param \Io\IntegrationConfigs $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateIntegrations(\Io\IntegrationConfigs $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/updateIntegrations',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes integration configurations for a protocol and class. Required Fields: protocol, classId.
     * @param \Io\ProtocolIdInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteIntegrations(\Io\ProtocolIdInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/deleteIntegrations',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a sink subscription to receive webhook callbacks after specific events. Required Fields: protocol, classId, event, url.
     * @param \Io\SinkSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createSinkSubscription(\Io\SinkSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/createSinkSubscription',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a sink subscription configuration. Required Fields: protocol, subscriptionId.
     * @param \Io\SubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\SinkSubscription>
     */
    public function getSinkSubscription(\Io\SubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/getSinkSubscription',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED] Lists sink subscriptions by segment with optional pagination. Required Fields: pagination.
     * @param \Io\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listSinkSubscriptionsDeprecated(\Io\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Integrations/listSinkSubscriptionsDeprecated',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all sink subscriptions by segment with optional pagination. Required Fields: filters.
     * @param \Io\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listSinkSubscriptions(\Io\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Integrations/listSinkSubscriptions',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a sink subscription configuration. Required Fields: protocol, classId, event, url.
     * @param \Io\SinkSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateSinkSubscription(\Io\SinkSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/updateSinkSubscription',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a sink subscription configuration. Required Fields: protocol, subscriptionId.
     * @param \Io\SubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteSinkSubscription(\Io\SubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/deleteSinkSubscription',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a sample sink subscription payload. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\SinkSubscription>
     */
    public function getSampleSubscriptionEvent(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/getSampleSubscriptionEvent',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

    /**
     * Dynamically calls an external API using configured credentials. Required Fields: url, method, headers, body (depending on the API).
     * @param \Io\DynamicApiInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\DynamicApiResponse>
     */
    public function callDynamicApi(\Io\DynamicApiInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/callDynamicApi',
        $argument,
        ['\Io\DynamicApiResponse', 'decode'],
        $metadata, $options);
    }

}
