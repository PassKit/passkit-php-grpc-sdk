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
     * @param \Io\IntegrationConfigs $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createIntegrations(\Io\IntegrationConfigs $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/createIntegrations',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ProtocolIdInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getIntegrations(\Io\ProtocolIdInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/getIntegrations',
        $argument,
        ['\Io\IntegrationConfigs', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\IntegrationConfigs $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateIntegrations(\Io\IntegrationConfigs $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/updateIntegrations',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ProtocolIdInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteIntegrations(\Io\ProtocolIdInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/deleteIntegrations',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\SinkSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createSinkSubscription(\Io\SinkSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/createSinkSubscription',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\SubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getSinkSubscription(\Io\SubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/getSinkSubscription',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listSinkSubscriptionsDeprecated(\Io\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Integrations/listSinkSubscriptionsDeprecated',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listSinkSubscriptions(\Io\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Integrations/listSinkSubscriptions',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\SinkSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateSinkSubscription(\Io\SinkSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/updateSinkSubscription',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\SubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteSinkSubscription(\Io\SubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/deleteSinkSubscription',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getSampleSubscriptionEvent(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Integrations/getSampleSubscriptionEvent',
        $argument,
        ['\Io\SinkSubscription', 'decode'],
        $metadata, $options);
    }

}
