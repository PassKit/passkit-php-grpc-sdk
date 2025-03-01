<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.RedemptionTimerSettings</code>
 */
class RedemptionTimerSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of seconds the redemption page displays the redemption code. When the times runs out, the redemption page will show the 'redemption period expired' message.
     *
     * Generated from protobuf field <code>uint32 timeoutSeconds = 1;</code>
     */
    protected $timeoutSeconds = 0;
    /**
     * Help text rendered above redemption timer.
     *
     * Generated from protobuf field <code>string timerHelpText = 2;</code>
     */
    protected $timerHelpText = '';
    /**
     * Localized help text for redemption timer.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTimeHelpText = 3;</code>
     */
    protected $localizedTimeHelpText = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $timeoutSeconds
     *           The number of seconds the redemption page displays the redemption code. When the times runs out, the redemption page will show the 'redemption period expired' message.
     *     @type string $timerHelpText
     *           Help text rendered above redemption timer.
     *     @type \Io\LocalizedString $localizedTimeHelpText
     *           Localized help text for redemption timer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of seconds the redemption page displays the redemption code. When the times runs out, the redemption page will show the 'redemption period expired' message.
     *
     * Generated from protobuf field <code>uint32 timeoutSeconds = 1;</code>
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds;
    }

    /**
     * The number of seconds the redemption page displays the redemption code. When the times runs out, the redemption page will show the 'redemption period expired' message.
     *
     * Generated from protobuf field <code>uint32 timeoutSeconds = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeoutSeconds($var)
    {
        GPBUtil::checkUint32($var);
        $this->timeoutSeconds = $var;

        return $this;
    }

    /**
     * Help text rendered above redemption timer.
     *
     * Generated from protobuf field <code>string timerHelpText = 2;</code>
     * @return string
     */
    public function getTimerHelpText()
    {
        return $this->timerHelpText;
    }

    /**
     * Help text rendered above redemption timer.
     *
     * Generated from protobuf field <code>string timerHelpText = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTimerHelpText($var)
    {
        GPBUtil::checkString($var, True);
        $this->timerHelpText = $var;

        return $this;
    }

    /**
     * Localized help text for redemption timer.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTimeHelpText = 3;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedTimeHelpText()
    {
        return $this->localizedTimeHelpText;
    }

    public function hasLocalizedTimeHelpText()
    {
        return isset($this->localizedTimeHelpText);
    }

    public function clearLocalizedTimeHelpText()
    {
        unset($this->localizedTimeHelpText);
    }

    /**
     * Localized help text for redemption timer.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTimeHelpText = 3;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedTimeHelpText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedTimeHelpText = $var;

        return $this;
    }

}

