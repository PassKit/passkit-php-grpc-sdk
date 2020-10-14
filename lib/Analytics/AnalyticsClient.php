<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Analytics RPC
//
// The PassKit Analytics API lets you track the performance of Apple Wallet and Google Pay passes.
namespace Analytics;

/**
 */
class AnalyticsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieve a daily, monthly or yearly record.
     * @param \Io\AnalyticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getAnalytics(\Io\AnalyticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analytics.Analytics/getAnalytics',
        $argument,
        ['\Io\AnalyticsResponse', 'decode'],
        $metadata, $options);
    }

}
