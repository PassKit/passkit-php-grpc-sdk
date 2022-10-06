<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/links.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used to specify links put on the back of the pass.
 *
 * Generated from protobuf message <code>io.Link</code>
 */
class Link extends \Google\Protobuf\Internal\Message
{
    /**
     * Link Id. Not writable.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * A link text.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';
    /**
     * Title for the link.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * Type of link data.
     *
     * Generated from protobuf field <code>.io.LinkType type = 4;</code>
     */
    protected $type = 0;
    /**
     * This customises link text for different languages. Ignored by Google Pay passes.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLink = 5;</code>
     */
    protected $localizedLink = null;
    /**
     * This translates link title in different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 6;</code>
     */
    protected $localizedTitle = null;
    /**
     * Indicates which wallets the link should be rendered for (this allows to hide certain link on Apple Wallet, and vise versa).
     *
     * Generated from protobuf field <code>repeated .io.UsageType usage = 7;</code>
     */
    private $usage;
    /**
     * Links will be rendered in order of their position, from lowest to highest. Position can be any value, E.g. 3 links with positions 30, 10, 20 would render 10 first, 20 second and 30 third.  If no position is provided, the order of the links cannot be guaranteed.
     *
     * Generated from protobuf field <code>uint32 position = 8;</code>
     */
    protected $position = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Link Id. Not writable.
     *     @type string $url
     *           A link text.
     *     @type string $title
     *           Title for the link.
     *     @type int $type
     *           Type of link data.
     *     @type \Io\LocalizedString $localizedLink
     *           This customises link text for different languages. Ignored by Google Pay passes.
     *     @type \Io\LocalizedString $localizedTitle
     *           This translates link title in different languages.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $usage
     *           Indicates which wallets the link should be rendered for (this allows to hide certain link on Apple Wallet, and vise versa).
     *     @type int $position
     *           Links will be rendered in order of their position, from lowest to highest. Position can be any value, E.g. 3 links with positions 30, 10, 20 would render 10 first, 20 second and 30 third.  If no position is provided, the order of the links cannot be guaranteed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Links::initOnce();
        parent::__construct($data);
    }

    /**
     * Link Id. Not writable.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Link Id. Not writable.
     *
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
     * A link text.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * A link text.
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
     * Title for the link.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Title for the link.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Type of link data.
     *
     * Generated from protobuf field <code>.io.LinkType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of link data.
     *
     * Generated from protobuf field <code>.io.LinkType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Io\LinkType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * This customises link text for different languages. Ignored by Google Pay passes.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLink = 5;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedLink()
    {
        return $this->localizedLink;
    }

    public function hasLocalizedLink()
    {
        return isset($this->localizedLink);
    }

    public function clearLocalizedLink()
    {
        unset($this->localizedLink);
    }

    /**
     * This customises link text for different languages. Ignored by Google Pay passes.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLink = 5;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedLink($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedLink = $var;

        return $this;
    }

    /**
     * This translates link title in different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 6;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedTitle()
    {
        return $this->localizedTitle;
    }

    public function hasLocalizedTitle()
    {
        return isset($this->localizedTitle);
    }

    public function clearLocalizedTitle()
    {
        unset($this->localizedTitle);
    }

    /**
     * This translates link title in different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 6;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedTitle($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedTitle = $var;

        return $this;
    }

    /**
     * Indicates which wallets the link should be rendered for (this allows to hide certain link on Apple Wallet, and vise versa).
     *
     * Generated from protobuf field <code>repeated .io.UsageType usage = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Indicates which wallets the link should be rendered for (this allows to hide certain link on Apple Wallet, and vise versa).
     *
     * Generated from protobuf field <code>repeated .io.UsageType usage = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\UsageType::class);
        $this->usage = $arr;

        return $this;
    }

    /**
     * Links will be rendered in order of their position, from lowest to highest. Position can be any value, E.g. 3 links with positions 30, 10, 20 would render 10 first, 20 second and 30 third.  If no position is provided, the order of the links cannot be guaranteed.
     *
     * Generated from protobuf field <code>uint32 position = 8;</code>
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Links will be rendered in order of their position, from lowest to highest. Position can be any value, E.g. 3 links with positions 30, 10, 20 would render 10 first, 20 second and 30 third.  If no position is provided, the order of the links cannot be guaranteed.
     *
     * Generated from protobuf field <code>uint32 position = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkUint32($var);
        $this->position = $var;

        return $this;
    }

}

