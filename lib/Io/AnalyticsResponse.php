<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/reporting.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.AnalyticsResponse</code>
 */
class AnalyticsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The Period that the response data is grouped by by: per DAY, MONTH or YEAR.
     *
     * Generated from protobuf field <code>.io.Period period = 1;</code>
     */
    protected $period = 0;
    /**
     * Total number of passes created during the requested period.
     *
     * Generated from protobuf field <code>uint32 created = 2;</code>
     */
    protected $created = 0;
    /**
     * Total number of passes installed during the requested period.
     *
     * Generated from protobuf field <code>uint32 installed = 3;</code>
     */
    protected $installed = 0;
    /**
     * Total number of passes deleted during the requested period.
     *
     * Generated from protobuf field <code>uint32 deleted = 4;</code>
     */
    protected $deleted = 0;
    /**
     * Total number of passes invalidated during the requested period.
     *
     * Generated from protobuf field <code>uint32 invalidated = 5;</code>
     */
    protected $invalidated = 0;
    /**
     * Total number of passes installed for each device type.
     *
     * Generated from protobuf field <code>.io.DeviceBreakdown deviceBreakdown = 6;</code>
     */
    protected $deviceBreakdown = null;
    /**
     * Total number of passes installed for each distribution source.
     *
     * Generated from protobuf field <code>map<string, uint32> utmSourceBreakdown = 7;</code>
     */
    private $utmSourceBreakdown;
    /**
     * Breakdown of data by day, month or year.
     *
     * Generated from protobuf field <code>repeated .io.ChartDataPoints data = 8;</code>
     */
    private $data;
    /**
     * Breakdown of data by utm medium.
     *
     * Generated from protobuf field <code>map<string, uint32> utmMediumBreakdown = 9;</code>
     */
    private $utmMediumBreakdown;
    /**
     * Breakdown of data by utm name.
     *
     * Generated from protobuf field <code>map<string, uint32> utmNameBreakdown = 10;</code>
     */
    private $utmNameBreakdown;
    /**
     * Breakdown of data by utm term.
     *
     * Generated from protobuf field <code>map<string, uint32> utmTermBreakdown = 11;</code>
     */
    private $utmTermBreakdown;
    /**
     * Breakdown of data by utm content.
     *
     * Generated from protobuf field <code>map<string, uint32> utmContentBreakdown = 12;</code>
     */
    private $utmContentBreakdown;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $period
     *           The Period that the response data is grouped by by: per DAY, MONTH or YEAR.
     *     @type int $created
     *           Total number of passes created during the requested period.
     *     @type int $installed
     *           Total number of passes installed during the requested period.
     *     @type int $deleted
     *           Total number of passes deleted during the requested period.
     *     @type int $invalidated
     *           Total number of passes invalidated during the requested period.
     *     @type \Io\DeviceBreakdown $deviceBreakdown
     *           Total number of passes installed for each device type.
     *     @type array|\Google\Protobuf\Internal\MapField $utmSourceBreakdown
     *           Total number of passes installed for each distribution source.
     *     @type \Io\ChartDataPoints[]|\Google\Protobuf\Internal\RepeatedField $data
     *           Breakdown of data by day, month or year.
     *     @type array|\Google\Protobuf\Internal\MapField $utmMediumBreakdown
     *           Breakdown of data by utm medium.
     *     @type array|\Google\Protobuf\Internal\MapField $utmNameBreakdown
     *           Breakdown of data by utm name.
     *     @type array|\Google\Protobuf\Internal\MapField $utmTermBreakdown
     *           Breakdown of data by utm term.
     *     @type array|\Google\Protobuf\Internal\MapField $utmContentBreakdown
     *           Breakdown of data by utm content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Reporting::initOnce();
        parent::__construct($data);
    }

    /**
     * The Period that the response data is grouped by by: per DAY, MONTH or YEAR.
     *
     * Generated from protobuf field <code>.io.Period period = 1;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The Period that the response data is grouped by by: per DAY, MONTH or YEAR.
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
     * Total number of passes created during the requested period.
     *
     * Generated from protobuf field <code>uint32 created = 2;</code>
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Total number of passes created during the requested period.
     *
     * Generated from protobuf field <code>uint32 created = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkUint32($var);
        $this->created = $var;

        return $this;
    }

    /**
     * Total number of passes installed during the requested period.
     *
     * Generated from protobuf field <code>uint32 installed = 3;</code>
     * @return int
     */
    public function getInstalled()
    {
        return $this->installed;
    }

    /**
     * Total number of passes installed during the requested period.
     *
     * Generated from protobuf field <code>uint32 installed = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setInstalled($var)
    {
        GPBUtil::checkUint32($var);
        $this->installed = $var;

        return $this;
    }

    /**
     * Total number of passes deleted during the requested period.
     *
     * Generated from protobuf field <code>uint32 deleted = 4;</code>
     * @return int
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Total number of passes deleted during the requested period.
     *
     * Generated from protobuf field <code>uint32 deleted = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkUint32($var);
        $this->deleted = $var;

        return $this;
    }

    /**
     * Total number of passes invalidated during the requested period.
     *
     * Generated from protobuf field <code>uint32 invalidated = 5;</code>
     * @return int
     */
    public function getInvalidated()
    {
        return $this->invalidated;
    }

    /**
     * Total number of passes invalidated during the requested period.
     *
     * Generated from protobuf field <code>uint32 invalidated = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setInvalidated($var)
    {
        GPBUtil::checkUint32($var);
        $this->invalidated = $var;

        return $this;
    }

    /**
     * Total number of passes installed for each device type.
     *
     * Generated from protobuf field <code>.io.DeviceBreakdown deviceBreakdown = 6;</code>
     * @return \Io\DeviceBreakdown
     */
    public function getDeviceBreakdown()
    {
        return isset($this->deviceBreakdown) ? $this->deviceBreakdown : null;
    }

    public function hasDeviceBreakdown()
    {
        return isset($this->deviceBreakdown);
    }

    public function clearDeviceBreakdown()
    {
        unset($this->deviceBreakdown);
    }

    /**
     * Total number of passes installed for each device type.
     *
     * Generated from protobuf field <code>.io.DeviceBreakdown deviceBreakdown = 6;</code>
     * @param \Io\DeviceBreakdown $var
     * @return $this
     */
    public function setDeviceBreakdown($var)
    {
        GPBUtil::checkMessage($var, \Io\DeviceBreakdown::class);
        $this->deviceBreakdown = $var;

        return $this;
    }

    /**
     * Total number of passes installed for each distribution source.
     *
     * Generated from protobuf field <code>map<string, uint32> utmSourceBreakdown = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUtmSourceBreakdown()
    {
        return $this->utmSourceBreakdown;
    }

    /**
     * Total number of passes installed for each distribution source.
     *
     * Generated from protobuf field <code>map<string, uint32> utmSourceBreakdown = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUtmSourceBreakdown($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->utmSourceBreakdown = $arr;

        return $this;
    }

    /**
     * Breakdown of data by day, month or year.
     *
     * Generated from protobuf field <code>repeated .io.ChartDataPoints data = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Breakdown of data by day, month or year.
     *
     * Generated from protobuf field <code>repeated .io.ChartDataPoints data = 8;</code>
     * @param \Io\ChartDataPoints[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\ChartDataPoints::class);
        $this->data = $arr;

        return $this;
    }

    /**
     * Breakdown of data by utm medium.
     *
     * Generated from protobuf field <code>map<string, uint32> utmMediumBreakdown = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUtmMediumBreakdown()
    {
        return $this->utmMediumBreakdown;
    }

    /**
     * Breakdown of data by utm medium.
     *
     * Generated from protobuf field <code>map<string, uint32> utmMediumBreakdown = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUtmMediumBreakdown($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->utmMediumBreakdown = $arr;

        return $this;
    }

    /**
     * Breakdown of data by utm name.
     *
     * Generated from protobuf field <code>map<string, uint32> utmNameBreakdown = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUtmNameBreakdown()
    {
        return $this->utmNameBreakdown;
    }

    /**
     * Breakdown of data by utm name.
     *
     * Generated from protobuf field <code>map<string, uint32> utmNameBreakdown = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUtmNameBreakdown($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->utmNameBreakdown = $arr;

        return $this;
    }

    /**
     * Breakdown of data by utm term.
     *
     * Generated from protobuf field <code>map<string, uint32> utmTermBreakdown = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUtmTermBreakdown()
    {
        return $this->utmTermBreakdown;
    }

    /**
     * Breakdown of data by utm term.
     *
     * Generated from protobuf field <code>map<string, uint32> utmTermBreakdown = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUtmTermBreakdown($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->utmTermBreakdown = $arr;

        return $this;
    }

    /**
     * Breakdown of data by utm content.
     *
     * Generated from protobuf field <code>map<string, uint32> utmContentBreakdown = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUtmContentBreakdown()
    {
        return $this->utmContentBreakdown;
    }

    /**
     * Breakdown of data by utm content.
     *
     * Generated from protobuf field <code>map<string, uint32> utmContentBreakdown = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUtmContentBreakdown($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->utmContentBreakdown = $arr;

        return $this;
    }

}
