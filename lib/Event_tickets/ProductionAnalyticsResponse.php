<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/production.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.ProductionAnalyticsResponse</code>
 */
class ProductionAnalyticsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Period unit of data returned (day, month or year).
     *
     * Generated from protobuf field <code>.io.Period period = 1;</code>
     */
    protected $period = 0;
    /**
     * Passes redeemed in this period.
     *
     * Generated from protobuf field <code>uint32 redeemed = 2;</code>
     */
    protected $redeemed = 0;
    /**
     * Total number of pass redeemed for each device type.
     *
     * Generated from protobuf field <code>.io.DeviceBreakdown devices = 3;</code>
     */
    protected $devices = null;
    /**
     * Total number of pass redeemed for each distribution source.
     *
     * Generated from protobuf field <code>map<string, uint32> sources = 4;</code>
     */
    private $sources;
    /**
     * Breakdown of data by day, month or year.
     *
     * Generated from protobuf field <code>repeated .io.ChartDataPoints data = 5;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $period
     *           Period unit of data returned (day, month or year).
     *     @type int $redeemed
     *           Passes redeemed in this period.
     *     @type \Io\DeviceBreakdown $devices
     *           Total number of pass redeemed for each device type.
     *     @type array|\Google\Protobuf\Internal\MapField $sources
     *           Total number of pass redeemed for each distribution source.
     *     @type \Io\ChartDataPoints[]|\Google\Protobuf\Internal\RepeatedField $data
     *           Breakdown of data by day, month or year.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Production::initOnce();
        parent::__construct($data);
    }

    /**
     * Period unit of data returned (day, month or year).
     *
     * Generated from protobuf field <code>.io.Period period = 1;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Period unit of data returned (day, month or year).
     *
     * Generated from protobuf field <code>.io.Period period = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkEnum($var, \Io\Period::class);
        $this->period = $var;

        return $this;
    }

    /**
     * Passes redeemed in this period.
     *
     * Generated from protobuf field <code>uint32 redeemed = 2;</code>
     * @return int
     */
    public function getRedeemed()
    {
        return $this->redeemed;
    }

    /**
     * Passes redeemed in this period.
     *
     * Generated from protobuf field <code>uint32 redeemed = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRedeemed($var)
    {
        GPBUtil::checkUint32($var);
        $this->redeemed = $var;

        return $this;
    }

    /**
     * Total number of pass redeemed for each device type.
     *
     * Generated from protobuf field <code>.io.DeviceBreakdown devices = 3;</code>
     * @return \Io\DeviceBreakdown|null
     */
    public function getDevices()
    {
        return isset($this->devices) ? $this->devices : null;
    }

    public function hasDevices()
    {
        return isset($this->devices);
    }

    public function clearDevices()
    {
        unset($this->devices);
    }

    /**
     * Total number of pass redeemed for each device type.
     *
     * Generated from protobuf field <code>.io.DeviceBreakdown devices = 3;</code>
     * @param \Io\DeviceBreakdown $var
     * @return $this
     */
    public function setDevices($var)
    {
        GPBUtil::checkMessage($var, \Io\DeviceBreakdown::class);
        $this->devices = $var;

        return $this;
    }

    /**
     * Total number of pass redeemed for each distribution source.
     *
     * Generated from protobuf field <code>map<string, uint32> sources = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Total number of pass redeemed for each distribution source.
     *
     * Generated from protobuf field <code>map<string, uint32> sources = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSources($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->sources = $arr;

        return $this;
    }

    /**
     * Breakdown of data by day, month or year.
     *
     * Generated from protobuf field <code>repeated .io.ChartDataPoints data = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Breakdown of data by day, month or year.
     *
     * Generated from protobuf field <code>repeated .io.ChartDataPoints data = 5;</code>
     * @param \Io\ChartDataPoints[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\ChartDataPoints::class);
        $this->data = $arr;

        return $this;
    }

}

