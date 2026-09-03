<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Analytics RPC
//
// The PassKit Analytics API lets you track the performance of Apple Wallet and Google Wallet passes.
namespace Analytics;

/**
 * Analytics provides access to daily, monthly, or yearly analytics reports.
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
     * Retrieves analytics data for a class or project, such as daily check-ins, installs, redemptions, etc. Required fields: classId, protocol.
     * @param \Io\AnalyticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\AnalyticsResponse>
     */
    public function getAnalytics(\Io\AnalyticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/analytics.Analytics/getAnalytics',
        $argument,
        ['\Io\AnalyticsResponse', 'decode'],
        $metadata, $options);
    }

}
