<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/tracking.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.GoogleAnalyticsSettings</code>
 */
class GoogleAnalyticsSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * list of Google Analytics ID's to track ('UA-XXXXX-Y', 'UA-XXXXX-B', etc).
     *
     * Generated from protobuf field <code>repeated string trackingIds = 1;</code>
     */
    private $trackingIds;
    /**
     * Events to send to Google on the data collection page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsDataCollectionPageEvent dataCollectionPageEvents = 2;</code>
     */
    private $dataCollectionPageEvents;
    /**
     * Events to send to Google on the pass render page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsPassRenderPageEvent passRenderPageEvents = 3;</code>
     */
    private $passRenderPageEvents;
    /**
     * Events to send to Google on the custom initiated redemption page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsCustomerInitiatedRedemptionPageEvent customerInitiatedRedemption = 4;</code>
     */
    private $customerInitiatedRedemption;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $trackingIds
     *           list of Google Analytics ID's to track ('UA-XXXXX-Y', 'UA-XXXXX-B', etc).
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dataCollectionPageEvents
     *           Events to send to Google on the data collection page.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $passRenderPageEvents
     *           Events to send to Google on the pass render page.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $customerInitiatedRedemption
     *           Events to send to Google on the custom initiated redemption page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Tracking::initOnce();
        parent::__construct($data);
    }

    /**
     * list of Google Analytics ID's to track ('UA-XXXXX-Y', 'UA-XXXXX-B', etc).
     *
     * Generated from protobuf field <code>repeated string trackingIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrackingIds()
    {
        return $this->trackingIds;
    }

    /**
     * list of Google Analytics ID's to track ('UA-XXXXX-Y', 'UA-XXXXX-B', etc).
     *
     * Generated from protobuf field <code>repeated string trackingIds = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrackingIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->trackingIds = $arr;

        return $this;
    }

    /**
     * Events to send to Google on the data collection page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsDataCollectionPageEvent dataCollectionPageEvents = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataCollectionPageEvents()
    {
        return $this->dataCollectionPageEvents;
    }

    /**
     * Events to send to Google on the data collection page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsDataCollectionPageEvent dataCollectionPageEvents = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataCollectionPageEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\GoogleAnalyticsDataCollectionPageEvent::class);
        $this->dataCollectionPageEvents = $arr;

        return $this;
    }

    /**
     * Events to send to Google on the pass render page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsPassRenderPageEvent passRenderPageEvents = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPassRenderPageEvents()
    {
        return $this->passRenderPageEvents;
    }

    /**
     * Events to send to Google on the pass render page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsPassRenderPageEvent passRenderPageEvents = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPassRenderPageEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\GoogleAnalyticsPassRenderPageEvent::class);
        $this->passRenderPageEvents = $arr;

        return $this;
    }

    /**
     * Events to send to Google on the custom initiated redemption page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsCustomerInitiatedRedemptionPageEvent customerInitiatedRedemption = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomerInitiatedRedemption()
    {
        return $this->customerInitiatedRedemption;
    }

    /**
     * Events to send to Google on the custom initiated redemption page.
     *
     * Generated from protobuf field <code>repeated .io.GoogleAnalyticsCustomerInitiatedRedemptionPageEvent customerInitiatedRedemption = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomerInitiatedRedemption($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\GoogleAnalyticsCustomerInitiatedRedemptionPageEvent::class);
        $this->customerInitiatedRedemption = $arr;

        return $this;
    }

}

