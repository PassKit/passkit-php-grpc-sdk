<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/metrics.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.MetaLocation</code>
 */
class MetaLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Country of issue.
     *
     * Generated from protobuf field <code>string country = 1;</code>
     */
    protected $country = '';
    /**
     * City of issue.
     *
     * Generated from protobuf field <code>string city = 2;</code>
     */
    protected $city = '';
    /**
     * State, region, province or county of issue.
     *
     * Generated from protobuf field <code>string state = 3;</code>
     */
    protected $state = '';
    /**
     * Latitude of issue (provided in the issue call).
     *
     * Generated from protobuf field <code>double latitude = 4;</code>
     */
    protected $latitude = 0.0;
    /**
     * Longitude of issue (provided in the issue call).
     *
     * Generated from protobuf field <code>double longitude = 5;</code>
     */
    protected $longitude = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country
     *           Country of issue.
     *     @type string $city
     *           City of issue.
     *     @type string $state
     *           State, region, province or county of issue.
     *     @type float $latitude
     *           Latitude of issue (provided in the issue call).
     *     @type float $longitude
     *           Longitude of issue (provided in the issue call).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * Country of issue.
     *
     * Generated from protobuf field <code>string country = 1;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Country of issue.
     *
     * Generated from protobuf field <code>string country = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * City of issue.
     *
     * Generated from protobuf field <code>string city = 2;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * City of issue.
     *
     * Generated from protobuf field <code>string city = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * State, region, province or county of issue.
     *
     * Generated from protobuf field <code>string state = 3;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State, region, province or county of issue.
     *
     * Generated from protobuf field <code>string state = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Latitude of issue (provided in the issue call).
     *
     * Generated from protobuf field <code>double latitude = 4;</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Latitude of issue (provided in the issue call).
     *
     * Generated from protobuf field <code>double latitude = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;

        return $this;
    }

    /**
     * Longitude of issue (provided in the issue call).
     *
     * Generated from protobuf field <code>double longitude = 5;</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Longitude of issue (provided in the issue call).
     *
     * Generated from protobuf field <code>double longitude = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;

        return $this;
    }

}
