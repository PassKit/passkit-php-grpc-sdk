<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/tracking.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.FacebookPixelSettings</code>
 */
class FacebookPixelSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The Facebook Pixel ID of the account.
     *
     * Generated from protobuf field <code>string pixelId = 1;</code>
     */
    protected $pixelId = '';
    /**
     * List of standard events for the data collection page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent dataCollectionPageStandardEvents = 2;</code>
     */
    private $dataCollectionPageStandardEvents;
    /**
     * List of custom events for the data collection page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent dataCollectionPageCustomEvents = 3;</code>
     */
    private $dataCollectionPageCustomEvents;
    /**
     * List of standard events for the pass render page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent passPageStandardEvents = 4;</code>
     */
    private $passPageStandardEvents;
    /**
     * List of custom events for the pass render page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent passPageCustomEvents = 5;</code>
     */
    private $passPageCustomEvents;
    /**
     * List of standard events for the coupon customer initiated redemption page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent customerInitiatedRedemptionPageStandardEvents = 6;</code>
     */
    private $customerInitiatedRedemptionPageStandardEvents;
    /**
     * List of custom events for the coupon customer initiated redemption page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent customerInitiatedRedemptionPageCustomEvents = 7;</code>
     */
    private $customerInitiatedRedemptionPageCustomEvents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pixelId
     *           The Facebook Pixel ID of the account.
     *     @type array<\Io\StandardEvent>|\Google\Protobuf\Internal\RepeatedField $dataCollectionPageStandardEvents
     *           List of standard events for the data collection page
     *     @type array<\Io\CustomEvent>|\Google\Protobuf\Internal\RepeatedField $dataCollectionPageCustomEvents
     *           List of custom events for the data collection page
     *     @type array<\Io\StandardEvent>|\Google\Protobuf\Internal\RepeatedField $passPageStandardEvents
     *           List of standard events for the pass render page
     *     @type array<\Io\CustomEvent>|\Google\Protobuf\Internal\RepeatedField $passPageCustomEvents
     *           List of custom events for the pass render page
     *     @type array<\Io\StandardEvent>|\Google\Protobuf\Internal\RepeatedField $customerInitiatedRedemptionPageStandardEvents
     *           List of standard events for the coupon customer initiated redemption page
     *     @type array<\Io\CustomEvent>|\Google\Protobuf\Internal\RepeatedField $customerInitiatedRedemptionPageCustomEvents
     *           List of custom events for the coupon customer initiated redemption page
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Tracking::initOnce();
        parent::__construct($data);
    }

    /**
     * The Facebook Pixel ID of the account.
     *
     * Generated from protobuf field <code>string pixelId = 1;</code>
     * @return string
     */
    public function getPixelId()
    {
        return $this->pixelId;
    }

    /**
     * The Facebook Pixel ID of the account.
     *
     * Generated from protobuf field <code>string pixelId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPixelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->pixelId = $var;

        return $this;
    }

    /**
     * List of standard events for the data collection page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent dataCollectionPageStandardEvents = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataCollectionPageStandardEvents()
    {
        return $this->dataCollectionPageStandardEvents;
    }

    /**
     * List of standard events for the data collection page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent dataCollectionPageStandardEvents = 2;</code>
     * @param array<\Io\StandardEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataCollectionPageStandardEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\StandardEvent::class);
        $this->dataCollectionPageStandardEvents = $arr;

        return $this;
    }

    /**
     * List of custom events for the data collection page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent dataCollectionPageCustomEvents = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataCollectionPageCustomEvents()
    {
        return $this->dataCollectionPageCustomEvents;
    }

    /**
     * List of custom events for the data collection page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent dataCollectionPageCustomEvents = 3;</code>
     * @param array<\Io\CustomEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataCollectionPageCustomEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\CustomEvent::class);
        $this->dataCollectionPageCustomEvents = $arr;

        return $this;
    }

    /**
     * List of standard events for the pass render page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent passPageStandardEvents = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPassPageStandardEvents()
    {
        return $this->passPageStandardEvents;
    }

    /**
     * List of standard events for the pass render page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent passPageStandardEvents = 4;</code>
     * @param array<\Io\StandardEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPassPageStandardEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\StandardEvent::class);
        $this->passPageStandardEvents = $arr;

        return $this;
    }

    /**
     * List of custom events for the pass render page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent passPageCustomEvents = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPassPageCustomEvents()
    {
        return $this->passPageCustomEvents;
    }

    /**
     * List of custom events for the pass render page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent passPageCustomEvents = 5;</code>
     * @param array<\Io\CustomEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPassPageCustomEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\CustomEvent::class);
        $this->passPageCustomEvents = $arr;

        return $this;
    }

    /**
     * List of standard events for the coupon customer initiated redemption page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent customerInitiatedRedemptionPageStandardEvents = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomerInitiatedRedemptionPageStandardEvents()
    {
        return $this->customerInitiatedRedemptionPageStandardEvents;
    }

    /**
     * List of standard events for the coupon customer initiated redemption page
     *
     * Generated from protobuf field <code>repeated .io.StandardEvent customerInitiatedRedemptionPageStandardEvents = 6;</code>
     * @param array<\Io\StandardEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomerInitiatedRedemptionPageStandardEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\StandardEvent::class);
        $this->customerInitiatedRedemptionPageStandardEvents = $arr;

        return $this;
    }

    /**
     * List of custom events for the coupon customer initiated redemption page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent customerInitiatedRedemptionPageCustomEvents = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomerInitiatedRedemptionPageCustomEvents()
    {
        return $this->customerInitiatedRedemptionPageCustomEvents;
    }

    /**
     * List of custom events for the coupon customer initiated redemption page
     *
     * Generated from protobuf field <code>repeated .io.CustomEvent customerInitiatedRedemptionPageCustomEvents = 7;</code>
     * @param array<\Io\CustomEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomerInitiatedRedemptionPageCustomEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\CustomEvent::class);
        $this->customerInitiatedRedemptionPageCustomEvents = $arr;

        return $this;
    }

}

