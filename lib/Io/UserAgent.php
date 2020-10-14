<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/useragent.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.UserAgent</code>
 */
class UserAgent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string raw = 1;</code>
     */
    protected $raw = '';
    /**
     * Generated from protobuf field <code>string platform = 2;</code>
     */
    protected $platform = '';
    /**
     * Generated from protobuf field <code>string os = 3;</code>
     */
    protected $os = '';
    /**
     * Generated from protobuf field <code>string osVersion = 4;</code>
     */
    protected $osVersion = '';
    /**
     * Generated from protobuf field <code>string engine = 5;</code>
     */
    protected $engine = '';
    /**
     * Generated from protobuf field <code>string engineVersion = 6;</code>
     */
    protected $engineVersion = '';
    /**
     * Generated from protobuf field <code>string browser = 7;</code>
     */
    protected $browser = '';
    /**
     * Generated from protobuf field <code>string browserVersion = 8;</code>
     */
    protected $browserVersion = '';
    /**
     * Generated from protobuf field <code>string localization = 9;</code>
     */
    protected $localization = '';
    /**
     * Generated from protobuf field <code>bool mobile = 10;</code>
     */
    protected $mobile = false;
    /**
     * Generated from protobuf field <code>bool walletCompatible = 11;</code>
     */
    protected $walletCompatible = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $raw
     *     @type string $platform
     *     @type string $os
     *     @type string $osVersion
     *     @type string $engine
     *     @type string $engineVersion
     *     @type string $browser
     *     @type string $browserVersion
     *     @type string $localization
     *     @type bool $mobile
     *     @type bool $walletCompatible
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Useragent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string raw = 1;</code>
     * @return string
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * Generated from protobuf field <code>string raw = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRaw($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string platform = 2;</code>
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>string platform = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string os = 3;</code>
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Generated from protobuf field <code>string os = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOs($var)
    {
        GPBUtil::checkString($var, True);
        $this->os = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string osVersion = 4;</code>
     * @return string
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }

    /**
     * Generated from protobuf field <code>string osVersion = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOsVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->osVersion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string engine = 5;</code>
     * @return string
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Generated from protobuf field <code>string engine = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEngine($var)
    {
        GPBUtil::checkString($var, True);
        $this->engine = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string engineVersion = 6;</code>
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }

    /**
     * Generated from protobuf field <code>string engineVersion = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEngineVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->engineVersion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string browser = 7;</code>
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Generated from protobuf field <code>string browser = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBrowser($var)
    {
        GPBUtil::checkString($var, True);
        $this->browser = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string browserVersion = 8;</code>
     * @return string
     */
    public function getBrowserVersion()
    {
        return $this->browserVersion;
    }

    /**
     * Generated from protobuf field <code>string browserVersion = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBrowserVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->browserVersion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string localization = 9;</code>
     * @return string
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    /**
     * Generated from protobuf field <code>string localization = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalization($var)
    {
        GPBUtil::checkString($var, True);
        $this->localization = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool mobile = 10;</code>
     * @return bool
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>bool mobile = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkBool($var);
        $this->mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool walletCompatible = 11;</code>
     * @return bool
     */
    public function getWalletCompatible()
    {
        return $this->walletCompatible;
    }

    /**
     * Generated from protobuf field <code>bool walletCompatible = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setWalletCompatible($var)
    {
        GPBUtil::checkBool($var);
        $this->walletCompatible = $var;

        return $this;
    }

}
