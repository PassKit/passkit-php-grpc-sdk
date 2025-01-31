<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Customise how data field is rendered on the front and back of the pass.
 *
 * Generated from protobuf message <code>io.AppleWalletFieldRenderOptions</code>
 */
class AppleWalletFieldRenderOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Alignment for field title and body text for fields which are displayed on the front of Apple Wallet pass.
     *
     * Generated from protobuf field <code>.io.TextAlignment textAlignment = 2;</code>
     */
    protected $textAlignment = 0;
    /**
     * Generated from protobuf field <code>.io.PositionSettings positionSettings = 3;</code>
     */
    protected $positionSettings = null;
    /**
     * This message will be displayed as a notification when this field is updated. If %\@ is used in the change message it will be replaced with the new field value when the message is displayed. E.g. Your registered name has been changed to %\@.
     *
     * Generated from protobuf field <code>string changeMessage = 4;</code>
     */
    protected $changeMessage = '';
    /**
     * Localize push notification message for different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedChangeMessage = 5;</code>
     */
    protected $localizedChangeMessage = null;
    /**
     * Generated from protobuf field <code>.io.DateTimeStyle dateStyle = 6;</code>
     */
    protected $dateStyle = 0;
    /**
     * Generated from protobuf field <code>.io.DateTimeStyle timeStyle = 7;</code>
     */
    protected $timeStyle = 0;
    /**
     * Generated from protobuf field <code>.io.NumberStyle numberStyle = 8;</code>
     */
    protected $numberStyle = 0;
    /**
     * Generated from protobuf field <code>repeated .io.LinkDetector suppressLinkDetection = 9;</code>
     */
    private $suppressLinkDetection;
    /**
     * Render date and time values in the provided time, rather than switching to the local time of the user.
     *
     * Generated from protobuf field <code>bool ignoreTimezone = 10;</code>
     */
    protected $ignoreTimezone = false;
    /**
     * Render date as a relavent date, rather than an absolute date.
     *
     * Generated from protobuf field <code>bool isRelativeDate = 11;</code>
     */
    protected $isRelativeDate = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $textAlignment
     *           Alignment for field title and body text for fields which are displayed on the front of Apple Wallet pass.
     *     @type \Io\PositionSettings $positionSettings
     *     @type string $changeMessage
     *           This message will be displayed as a notification when this field is updated. If %\@ is used in the change message it will be replaced with the new field value when the message is displayed. E.g. Your registered name has been changed to %\@.
     *     @type \Io\LocalizedString $localizedChangeMessage
     *           Localize push notification message for different languages.
     *     @type int $dateStyle
     *     @type int $timeStyle
     *     @type int $numberStyle
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $suppressLinkDetection
     *     @type bool $ignoreTimezone
     *           Render date and time values in the provided time, rather than switching to the local time of the user.
     *     @type bool $isRelativeDate
     *           Render date as a relavent date, rather than an absolute date.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * Alignment for field title and body text for fields which are displayed on the front of Apple Wallet pass.
     *
     * Generated from protobuf field <code>.io.TextAlignment textAlignment = 2;</code>
     * @return int
     */
    public function getTextAlignment()
    {
        return $this->textAlignment;
    }

    /**
     * Alignment for field title and body text for fields which are displayed on the front of Apple Wallet pass.
     *
     * Generated from protobuf field <code>.io.TextAlignment textAlignment = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTextAlignment($var)
    {
        GPBUtil::checkEnum($var, \Io\TextAlignment::class);
        $this->textAlignment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.PositionSettings positionSettings = 3;</code>
     * @return \Io\PositionSettings|null
     */
    public function getPositionSettings()
    {
        return $this->positionSettings;
    }

    public function hasPositionSettings()
    {
        return isset($this->positionSettings);
    }

    public function clearPositionSettings()
    {
        unset($this->positionSettings);
    }

    /**
     * Generated from protobuf field <code>.io.PositionSettings positionSettings = 3;</code>
     * @param \Io\PositionSettings $var
     * @return $this
     */
    public function setPositionSettings($var)
    {
        GPBUtil::checkMessage($var, \Io\PositionSettings::class);
        $this->positionSettings = $var;

        return $this;
    }

    /**
     * This message will be displayed as a notification when this field is updated. If %\@ is used in the change message it will be replaced with the new field value when the message is displayed. E.g. Your registered name has been changed to %\@.
     *
     * Generated from protobuf field <code>string changeMessage = 4;</code>
     * @return string
     */
    public function getChangeMessage()
    {
        return $this->changeMessage;
    }

    /**
     * This message will be displayed as a notification when this field is updated. If %\@ is used in the change message it will be replaced with the new field value when the message is displayed. E.g. Your registered name has been changed to %\@.
     *
     * Generated from protobuf field <code>string changeMessage = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setChangeMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->changeMessage = $var;

        return $this;
    }

    /**
     * Localize push notification message for different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedChangeMessage = 5;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedChangeMessage()
    {
        return $this->localizedChangeMessage;
    }

    public function hasLocalizedChangeMessage()
    {
        return isset($this->localizedChangeMessage);
    }

    public function clearLocalizedChangeMessage()
    {
        unset($this->localizedChangeMessage);
    }

    /**
     * Localize push notification message for different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedChangeMessage = 5;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedChangeMessage($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedChangeMessage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.DateTimeStyle dateStyle = 6;</code>
     * @return int
     */
    public function getDateStyle()
    {
        return $this->dateStyle;
    }

    /**
     * Generated from protobuf field <code>.io.DateTimeStyle dateStyle = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDateStyle($var)
    {
        GPBUtil::checkEnum($var, \Io\DateTimeStyle::class);
        $this->dateStyle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.DateTimeStyle timeStyle = 7;</code>
     * @return int
     */
    public function getTimeStyle()
    {
        return $this->timeStyle;
    }

    /**
     * Generated from protobuf field <code>.io.DateTimeStyle timeStyle = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeStyle($var)
    {
        GPBUtil::checkEnum($var, \Io\DateTimeStyle::class);
        $this->timeStyle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.NumberStyle numberStyle = 8;</code>
     * @return int
     */
    public function getNumberStyle()
    {
        return $this->numberStyle;
    }

    /**
     * Generated from protobuf field <code>.io.NumberStyle numberStyle = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNumberStyle($var)
    {
        GPBUtil::checkEnum($var, \Io\NumberStyle::class);
        $this->numberStyle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .io.LinkDetector suppressLinkDetection = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSuppressLinkDetection()
    {
        return $this->suppressLinkDetection;
    }

    /**
     * Generated from protobuf field <code>repeated .io.LinkDetector suppressLinkDetection = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSuppressLinkDetection($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\LinkDetector::class);
        $this->suppressLinkDetection = $arr;

        return $this;
    }

    /**
     * Render date and time values in the provided time, rather than switching to the local time of the user.
     *
     * Generated from protobuf field <code>bool ignoreTimezone = 10;</code>
     * @return bool
     */
    public function getIgnoreTimezone()
    {
        return $this->ignoreTimezone;
    }

    /**
     * Render date and time values in the provided time, rather than switching to the local time of the user.
     *
     * Generated from protobuf field <code>bool ignoreTimezone = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreTimezone($var)
    {
        GPBUtil::checkBool($var);
        $this->ignoreTimezone = $var;

        return $this;
    }

    /**
     * Render date as a relavent date, rather than an absolute date.
     *
     * Generated from protobuf field <code>bool isRelativeDate = 11;</code>
     * @return bool
     */
    public function getIsRelativeDate()
    {
        return $this->isRelativeDate;
    }

    /**
     * Render date as a relavent date, rather than an absolute date.
     *
     * Generated from protobuf field <code>bool isRelativeDate = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRelativeDate($var)
    {
        GPBUtil::checkBool($var);
        $this->isRelativeDate = $var;

        return $this;
    }

}

