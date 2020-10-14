<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/image/image.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * See image 'Use' enum for descriptions and sizes.
 *
 * Generated from protobuf message <code>io.ImageIds</code>
 */
class ImageIds extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string icon = 1;</code>
     */
    protected $icon = '';
    /**
     * Generated from protobuf field <code>string logo = 2;</code>
     */
    protected $logo = '';
    /**
     * Generated from protobuf field <code>string appleLogo = 3;</code>
     */
    protected $appleLogo = '';
    /**
     * Generated from protobuf field <code>string hero = 4;</code>
     */
    protected $hero = '';
    /**
     * Generated from protobuf field <code>string eventStrip = 5;</code>
     */
    protected $eventStrip = '';
    /**
     * Generated from protobuf field <code>string strip = 6;</code>
     */
    protected $strip = '';
    /**
     * Generated from protobuf field <code>string thumbnail = 7;</code>
     */
    protected $thumbnail = '';
    /**
     * Generated from protobuf field <code>string background = 8;</code>
     */
    protected $background = '';
    /**
     * Generated from protobuf field <code>string footer = 9;</code>
     */
    protected $footer = '';
    /**
     * Generated from protobuf field <code>string security = 10;</code>
     */
    protected $security = '';
    /**
     * Generated from protobuf field <code>string privilege = 11;</code>
     */
    protected $privilege = '';
    /**
     * Generated from protobuf field <code>string airlineAlliance = 12;</code>
     */
    protected $airlineAlliance = '';
    /**
     * Generated from protobuf field <code>string personalization = 13;</code>
     */
    protected $personalization = '';
    /**
     * Generated from protobuf field <code>string banner = 14;</code>
     */
    protected $banner = '';
    /**
     * Generated from protobuf field <code>string message = 15;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>string profile = 16;</code>
     */
    protected $profile = '';
    /**
     * Generated from protobuf field <code>string appImage = 17;</code>
     */
    protected $appImage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $icon
     *     @type string $logo
     *     @type string $appleLogo
     *     @type string $hero
     *     @type string $eventStrip
     *     @type string $strip
     *     @type string $thumbnail
     *     @type string $background
     *     @type string $footer
     *     @type string $security
     *     @type string $privilege
     *     @type string $airlineAlliance
     *     @type string $personalization
     *     @type string $banner
     *     @type string $message
     *     @type string $profile
     *     @type string $appImage
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Image\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string icon = 1;</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Generated from protobuf field <code>string icon = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string logo = 2;</code>
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Generated from protobuf field <code>string logo = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLogo($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string appleLogo = 3;</code>
     * @return string
     */
    public function getAppleLogo()
    {
        return $this->appleLogo;
    }

    /**
     * Generated from protobuf field <code>string appleLogo = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppleLogo($var)
    {
        GPBUtil::checkString($var, True);
        $this->appleLogo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hero = 4;</code>
     * @return string
     */
    public function getHero()
    {
        return $this->hero;
    }

    /**
     * Generated from protobuf field <code>string hero = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHero($var)
    {
        GPBUtil::checkString($var, True);
        $this->hero = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string eventStrip = 5;</code>
     * @return string
     */
    public function getEventStrip()
    {
        return $this->eventStrip;
    }

    /**
     * Generated from protobuf field <code>string eventStrip = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEventStrip($var)
    {
        GPBUtil::checkString($var, True);
        $this->eventStrip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string strip = 6;</code>
     * @return string
     */
    public function getStrip()
    {
        return $this->strip;
    }

    /**
     * Generated from protobuf field <code>string strip = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setStrip($var)
    {
        GPBUtil::checkString($var, True);
        $this->strip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string thumbnail = 7;</code>
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Generated from protobuf field <code>string thumbnail = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbnail($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbnail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string background = 8;</code>
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Generated from protobuf field <code>string background = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBackground($var)
    {
        GPBUtil::checkString($var, True);
        $this->background = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string footer = 9;</code>
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Generated from protobuf field <code>string footer = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setFooter($var)
    {
        GPBUtil::checkString($var, True);
        $this->footer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string security = 10;</code>
     * @return string
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Generated from protobuf field <code>string security = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSecurity($var)
    {
        GPBUtil::checkString($var, True);
        $this->security = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privilege = 11;</code>
     * @return string
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * Generated from protobuf field <code>string privilege = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivilege($var)
    {
        GPBUtil::checkString($var, True);
        $this->privilege = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string airlineAlliance = 12;</code>
     * @return string
     */
    public function getAirlineAlliance()
    {
        return $this->airlineAlliance;
    }

    /**
     * Generated from protobuf field <code>string airlineAlliance = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAirlineAlliance($var)
    {
        GPBUtil::checkString($var, True);
        $this->airlineAlliance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string personalization = 13;</code>
     * @return string
     */
    public function getPersonalization()
    {
        return $this->personalization;
    }

    /**
     * Generated from protobuf field <code>string personalization = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setPersonalization($var)
    {
        GPBUtil::checkString($var, True);
        $this->personalization = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string banner = 14;</code>
     * @return string
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Generated from protobuf field <code>string banner = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setBanner($var)
    {
        GPBUtil::checkString($var, True);
        $this->banner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 15;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string profile = 16;</code>
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Generated from protobuf field <code>string profile = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkString($var, True);
        $this->profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string appImage = 17;</code>
     * @return string
     */
    public function getAppImage()
    {
        return $this->appImage;
    }

    /**
     * Generated from protobuf field <code>string appImage = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setAppImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->appImage = $var;

        return $this;
    }

}

