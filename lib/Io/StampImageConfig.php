<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/image/image.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.StampImageConfig</code>
 */
class StampImageConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>float padding = 2;</code>
     */
    protected $padding = 0.0;
    /**
     * Generated from protobuf field <code>uint32 totalStamps = 3;</code>
     */
    protected $totalStamps = 0;
    /**
     * Generated from protobuf field <code>string stampImage = 4;</code>
     */
    protected $stampImage = '';
    /**
     * Generated from protobuf field <code>string unstampImage = 5;</code>
     */
    protected $unstampImage = '';
    /**
     * Generated from protobuf field <code>string backgroundImage = 6;</code>
     */
    protected $backgroundImage = '';
    /**
     * Generated from protobuf field <code>string backgroundColor = 7;</code>
     */
    protected $backgroundColor = '';
    /**
     * Generated from protobuf field <code>float backgroundOpacity = 8;</code>
     */
    protected $backgroundOpacity = 0.0;
    /**
     * Generated from protobuf field <code>string stampColor = 9;</code>
     */
    protected $stampColor = '';
    /**
     * Generated from protobuf field <code>float stampOpacity = 10;</code>
     */
    protected $stampOpacity = 0.0;
    /**
     * Generated from protobuf field <code>string unstampColor = 11;</code>
     */
    protected $unstampColor = '';
    /**
     * Generated from protobuf field <code>float unstampOpacity = 12;</code>
     */
    protected $unstampOpacity = 0.0;
    /**
     * Generated from protobuf field <code>bool placeholders = 13;</code>
     */
    protected $placeholders = false;
    /**
     * Generated from protobuf field <code>string placeholderColor = 14;</code>
     */
    protected $placeholderColor = '';
    /**
     * Generated from protobuf field <code>float placeholderOpacity = 15;</code>
     */
    protected $placeholderOpacity = 0.0;
    /**
     * Generated from protobuf field <code>string placeholderBorderColor = 16;</code>
     */
    protected $placeholderBorderColor = '';
    /**
     * Generated from protobuf field <code>float placeholderBorderOpacity = 17;</code>
     */
    protected $placeholderBorderOpacity = 0.0;
    /**
     * Generated from protobuf field <code>bool rewardPlaceholders = 18;</code>
     */
    protected $rewardPlaceholders = false;
    /**
     * Generated from protobuf field <code>string rewardBorderColor = 19;</code>
     */
    protected $rewardBorderColor = '';
    /**
     * Generated from protobuf field <code>float rewardBorderOpacity = 20;</code>
     */
    protected $rewardBorderOpacity = 0.0;
    /**
     * Generated from protobuf field <code>string rewardBackgroundColor = 21;</code>
     */
    protected $rewardBackgroundColor = '';
    /**
     * Generated from protobuf field <code>float rewardBackgroundOpacity = 22;</code>
     */
    protected $rewardBackgroundOpacity = 0.0;
    /**
     * takes a bitmask of rewards positions.
     *
     * Generated from protobuf field <code>uint64 rewardPositions = 23;</code>
     */
    protected $rewardPositions = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type float $padding
     *     @type int $totalStamps
     *     @type string $stampImage
     *     @type string $unstampImage
     *     @type string $backgroundImage
     *     @type string $backgroundColor
     *     @type float $backgroundOpacity
     *     @type string $stampColor
     *     @type float $stampOpacity
     *     @type string $unstampColor
     *     @type float $unstampOpacity
     *     @type bool $placeholders
     *     @type string $placeholderColor
     *     @type float $placeholderOpacity
     *     @type string $placeholderBorderColor
     *     @type float $placeholderBorderOpacity
     *     @type bool $rewardPlaceholders
     *     @type string $rewardBorderColor
     *     @type float $rewardBorderOpacity
     *     @type string $rewardBackgroundColor
     *     @type float $rewardBackgroundOpacity
     *     @type int|string $rewardPositions
     *           takes a bitmask of rewards positions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Image\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float padding = 2;</code>
     * @return float
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * Generated from protobuf field <code>float padding = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setPadding($var)
    {
        GPBUtil::checkFloat($var);
        $this->padding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 totalStamps = 3;</code>
     * @return int
     */
    public function getTotalStamps()
    {
        return $this->totalStamps;
    }

    /**
     * Generated from protobuf field <code>uint32 totalStamps = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalStamps($var)
    {
        GPBUtil::checkUint32($var);
        $this->totalStamps = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stampImage = 4;</code>
     * @return string
     */
    public function getStampImage()
    {
        return $this->stampImage;
    }

    /**
     * Generated from protobuf field <code>string stampImage = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStampImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->stampImage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string unstampImage = 5;</code>
     * @return string
     */
    public function getUnstampImage()
    {
        return $this->unstampImage;
    }

    /**
     * Generated from protobuf field <code>string unstampImage = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUnstampImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->unstampImage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string backgroundImage = 6;</code>
     * @return string
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    /**
     * Generated from protobuf field <code>string backgroundImage = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBackgroundImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->backgroundImage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string backgroundColor = 7;</code>
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * Generated from protobuf field <code>string backgroundColor = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBackgroundColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->backgroundColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float backgroundOpacity = 8;</code>
     * @return float
     */
    public function getBackgroundOpacity()
    {
        return $this->backgroundOpacity;
    }

    /**
     * Generated from protobuf field <code>float backgroundOpacity = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setBackgroundOpacity($var)
    {
        GPBUtil::checkFloat($var);
        $this->backgroundOpacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stampColor = 9;</code>
     * @return string
     */
    public function getStampColor()
    {
        return $this->stampColor;
    }

    /**
     * Generated from protobuf field <code>string stampColor = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setStampColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->stampColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float stampOpacity = 10;</code>
     * @return float
     */
    public function getStampOpacity()
    {
        return $this->stampOpacity;
    }

    /**
     * Generated from protobuf field <code>float stampOpacity = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setStampOpacity($var)
    {
        GPBUtil::checkFloat($var);
        $this->stampOpacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string unstampColor = 11;</code>
     * @return string
     */
    public function getUnstampColor()
    {
        return $this->unstampColor;
    }

    /**
     * Generated from protobuf field <code>string unstampColor = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setUnstampColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->unstampColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float unstampOpacity = 12;</code>
     * @return float
     */
    public function getUnstampOpacity()
    {
        return $this->unstampOpacity;
    }

    /**
     * Generated from protobuf field <code>float unstampOpacity = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setUnstampOpacity($var)
    {
        GPBUtil::checkFloat($var);
        $this->unstampOpacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool placeholders = 13;</code>
     * @return bool
     */
    public function getPlaceholders()
    {
        return $this->placeholders;
    }

    /**
     * Generated from protobuf field <code>bool placeholders = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setPlaceholders($var)
    {
        GPBUtil::checkBool($var);
        $this->placeholders = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string placeholderColor = 14;</code>
     * @return string
     */
    public function getPlaceholderColor()
    {
        return $this->placeholderColor;
    }

    /**
     * Generated from protobuf field <code>string placeholderColor = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceholderColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->placeholderColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float placeholderOpacity = 15;</code>
     * @return float
     */
    public function getPlaceholderOpacity()
    {
        return $this->placeholderOpacity;
    }

    /**
     * Generated from protobuf field <code>float placeholderOpacity = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setPlaceholderOpacity($var)
    {
        GPBUtil::checkFloat($var);
        $this->placeholderOpacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string placeholderBorderColor = 16;</code>
     * @return string
     */
    public function getPlaceholderBorderColor()
    {
        return $this->placeholderBorderColor;
    }

    /**
     * Generated from protobuf field <code>string placeholderBorderColor = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceholderBorderColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->placeholderBorderColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float placeholderBorderOpacity = 17;</code>
     * @return float
     */
    public function getPlaceholderBorderOpacity()
    {
        return $this->placeholderBorderOpacity;
    }

    /**
     * Generated from protobuf field <code>float placeholderBorderOpacity = 17;</code>
     * @param float $var
     * @return $this
     */
    public function setPlaceholderBorderOpacity($var)
    {
        GPBUtil::checkFloat($var);
        $this->placeholderBorderOpacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool rewardPlaceholders = 18;</code>
     * @return bool
     */
    public function getRewardPlaceholders()
    {
        return $this->rewardPlaceholders;
    }

    /**
     * Generated from protobuf field <code>bool rewardPlaceholders = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setRewardPlaceholders($var)
    {
        GPBUtil::checkBool($var);
        $this->rewardPlaceholders = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rewardBorderColor = 19;</code>
     * @return string
     */
    public function getRewardBorderColor()
    {
        return $this->rewardBorderColor;
    }

    /**
     * Generated from protobuf field <code>string rewardBorderColor = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setRewardBorderColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->rewardBorderColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float rewardBorderOpacity = 20;</code>
     * @return float
     */
    public function getRewardBorderOpacity()
    {
        return $this->rewardBorderOpacity;
    }

    /**
     * Generated from protobuf field <code>float rewardBorderOpacity = 20;</code>
     * @param float $var
     * @return $this
     */
    public function setRewardBorderOpacity($var)
    {
        GPBUtil::checkFloat($var);
        $this->rewardBorderOpacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rewardBackgroundColor = 21;</code>
     * @return string
     */
    public function getRewardBackgroundColor()
    {
        return $this->rewardBackgroundColor;
    }

    /**
     * Generated from protobuf field <code>string rewardBackgroundColor = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setRewardBackgroundColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->rewardBackgroundColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float rewardBackgroundOpacity = 22;</code>
     * @return float
     */
    public function getRewardBackgroundOpacity()
    {
        return $this->rewardBackgroundOpacity;
    }

    /**
     * Generated from protobuf field <code>float rewardBackgroundOpacity = 22;</code>
     * @param float $var
     * @return $this
     */
    public function setRewardBackgroundOpacity($var)
    {
        GPBUtil::checkFloat($var);
        $this->rewardBackgroundOpacity = $var;

        return $this;
    }

    /**
     * takes a bitmask of rewards positions.
     *
     * Generated from protobuf field <code>uint64 rewardPositions = 23;</code>
     * @return int|string
     */
    public function getRewardPositions()
    {
        return $this->rewardPositions;
    }

    /**
     * takes a bitmask of rewards positions.
     *
     * Generated from protobuf field <code>uint64 rewardPositions = 23;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardPositions($var)
    {
        GPBUtil::checkUint64($var);
        $this->rewardPositions = $var;

        return $this;
    }

}

