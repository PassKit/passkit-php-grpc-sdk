<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Controls the sharing settings for the program. Sharing settings only apply to Apple Wallet.
 *
 * Generated from protobuf message <code>io.Sharing</code>
 */
class Sharing extends \Google\Protobuf\Internal\Message
{
    /**
     * If not disabled will show the 'Share Pass' button on the back of an Apple Wallet pass. Setting a url and description will redirect sharing to a URL (such as a sign-up or info url) instead of sharing the pass.
     *
     * Generated from protobuf field <code>bool prohibitSharing = 1;</code>
     */
    protected $prohibitSharing = false;
    /**
     * If provided will allow for a custom share URL to be triggered from 'Share Pass' butto.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';
    /**
     * If provided will allow for a custom description text to be inserted in the sharing message.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Sharing description in localized language.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDescription = 4;</code>
     */
    protected $localizedDescription = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $prohibitSharing
     *           If not disabled will show the 'Share Pass' button on the back of an Apple Wallet pass. Setting a url and description will redirect sharing to a URL (such as a sign-up or info url) instead of sharing the pass.
     *     @type string $url
     *           If provided will allow for a custom share URL to be triggered from 'Share Pass' butto.
     *     @type string $description
     *           If provided will allow for a custom description text to be inserted in the sharing message.
     *     @type \Io\LocalizedString $localizedDescription
     *           Sharing description in localized language.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * If not disabled will show the 'Share Pass' button on the back of an Apple Wallet pass. Setting a url and description will redirect sharing to a URL (such as a sign-up or info url) instead of sharing the pass.
     *
     * Generated from protobuf field <code>bool prohibitSharing = 1;</code>
     * @return bool
     */
    public function getProhibitSharing()
    {
        return $this->prohibitSharing;
    }

    /**
     * If not disabled will show the 'Share Pass' button on the back of an Apple Wallet pass. Setting a url and description will redirect sharing to a URL (such as a sign-up or info url) instead of sharing the pass.
     *
     * Generated from protobuf field <code>bool prohibitSharing = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setProhibitSharing($var)
    {
        GPBUtil::checkBool($var);
        $this->prohibitSharing = $var;

        return $this;
    }

    /**
     * If provided will allow for a custom share URL to be triggered from 'Share Pass' butto.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * If provided will allow for a custom share URL to be triggered from 'Share Pass' butto.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * If provided will allow for a custom description text to be inserted in the sharing message.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * If provided will allow for a custom description text to be inserted in the sharing message.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Sharing description in localized language.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDescription = 4;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedDescription()
    {
        return isset($this->localizedDescription) ? $this->localizedDescription : null;
    }

    public function hasLocalizedDescription()
    {
        return isset($this->localizedDescription);
    }

    public function clearLocalizedDescription()
    {
        unset($this->localizedDescription);
    }

    /**
     * Sharing description in localized language.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDescription = 4;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedDescription($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedDescription = $var;

        return $this;
    }

}
