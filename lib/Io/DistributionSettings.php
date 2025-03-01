<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/distribution.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DistributionSettings can be used by protocol top level elements to define the email / sms-es
 *
 * Generated from protobuf message <code>io.DistributionSettings</code>
 */
class DistributionSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .io.DistributionChannel distributionChannels = 1;</code>
     */
    private $distributionChannels;
    /**
     * Welcome email settings
     *
     * Generated from protobuf field <code>.io.EmailTemplate welcomeEmail = 2;</code>
     */
    protected $welcomeEmail = null;
    /**
     * Welcome SMS settings
     *
     * Generated from protobuf field <code>.io.SmsTemplate welcomeSms = 3;</code>
     */
    protected $welcomeSms = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $distributionChannels
     *     @type \Io\EmailTemplate $welcomeEmail
     *           Welcome email settings
     *     @type \Io\SmsTemplate $welcomeSms
     *           Welcome SMS settings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .io.DistributionChannel distributionChannels = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDistributionChannels()
    {
        return $this->distributionChannels;
    }

    /**
     * Generated from protobuf field <code>repeated .io.DistributionChannel distributionChannels = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDistributionChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\DistributionChannel::class);
        $this->distributionChannels = $arr;

        return $this;
    }

    /**
     * Welcome email settings
     *
     * Generated from protobuf field <code>.io.EmailTemplate welcomeEmail = 2;</code>
     * @return \Io\EmailTemplate|null
     */
    public function getWelcomeEmail()
    {
        return $this->welcomeEmail;
    }

    public function hasWelcomeEmail()
    {
        return isset($this->welcomeEmail);
    }

    public function clearWelcomeEmail()
    {
        unset($this->welcomeEmail);
    }

    /**
     * Welcome email settings
     *
     * Generated from protobuf field <code>.io.EmailTemplate welcomeEmail = 2;</code>
     * @param \Io\EmailTemplate $var
     * @return $this
     */
    public function setWelcomeEmail($var)
    {
        GPBUtil::checkMessage($var, \Io\EmailTemplate::class);
        $this->welcomeEmail = $var;

        return $this;
    }

    /**
     * Welcome SMS settings
     *
     * Generated from protobuf field <code>.io.SmsTemplate welcomeSms = 3;</code>
     * @return \Io\SmsTemplate|null
     */
    public function getWelcomeSms()
    {
        return $this->welcomeSms;
    }

    public function hasWelcomeSms()
    {
        return isset($this->welcomeSms);
    }

    public function clearWelcomeSms()
    {
        unset($this->welcomeSms);
    }

    /**
     * Welcome SMS settings
     *
     * Generated from protobuf field <code>.io.SmsTemplate welcomeSms = 3;</code>
     * @param \Io\SmsTemplate $var
     * @return $this
     */
    public function setWelcomeSms($var)
    {
        GPBUtil::checkMessage($var, \Io\SmsTemplate::class);
        $this->welcomeSms = $var;

        return $this;
    }

}

