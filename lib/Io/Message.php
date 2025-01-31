<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/message.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The message title. This is used as a label in iOS and as the title in Google Pay.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * Localized message title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 3;</code>
     */
    protected $localizedTitle = null;
    /**
     * Plain text content cannot contain hyperlinks. Google Pay messages cannot have links, use URLs instead.
     *
     * Generated from protobuf field <code>string plainTextContent = 4;</code>
     */
    protected $plainTextContent = '';
    /**
     * Localized plain text content.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedPlainTextContent = 5;</code>
     */
    protected $localizedPlainTextContent = null;
    /**
     * Rich text content that can contain hyperlinks. No other markup is accepted. Links will only function on iOS devices. Ignored for Google Pay.
     *
     * Generated from protobuf field <code>string richTextContent = 6;</code>
     */
    protected $richTextContent = '';
    /**
     * Localized rich text content.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedRichTextContent = 7;</code>
     */
    protected $localizedRichTextContent = null;
    /**
     * Urls will be prioritized over existing urls on the Google Pay Pass. They are ignored for Apple Wallet.
     *
     * Generated from protobuf field <code>repeated .io.Url urls = 8;</code>
     */
    private $urls;
    /**
     * Images to display for the duration of the message. For Google Pay, only a 'message' type image will be used. For Apple Wallet, any of strip, eventStrip, background, logo, thumbnail and footer can be used, depending on the underlying pass type.
     *
     * Generated from protobuf field <code>.io.ImageIds images = 9;</code>
     */
    protected $images = null;
    /**
     * Priority the lower the priority, the lower down the message will be rendered when there are multiple messages. Defaults to a value of 10.
     *
     * Generated from protobuf field <code>uint32 priority = 10;</code>
     */
    protected $priority = 0;
    /**
     * The date and time to display the message. The value must be in RFC3339 format. If omitted, the current timestamp will be used.
     *
     * Generated from protobuf field <code>string displayFrom = 11;</code>
     */
    protected $displayFrom = '';
    /**
     * The date and time to remove the message. The value must be in RFC3339 format. If omitted, the message will be displayed indefinitely until it is cancelled.
     *
     * Generated from protobuf field <code>string displayUntil = 12;</code>
     */
    protected $displayUntil = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $title
     *           The message title. This is used as a label in iOS and as the title in Google Pay.
     *     @type \Io\LocalizedString $localizedTitle
     *           Localized message title.
     *     @type string $plainTextContent
     *           Plain text content cannot contain hyperlinks. Google Pay messages cannot have links, use URLs instead.
     *     @type \Io\LocalizedString $localizedPlainTextContent
     *           Localized plain text content.
     *     @type string $richTextContent
     *           Rich text content that can contain hyperlinks. No other markup is accepted. Links will only function on iOS devices. Ignored for Google Pay.
     *     @type \Io\LocalizedString $localizedRichTextContent
     *           Localized rich text content.
     *     @type array<\Io\Url>|\Google\Protobuf\Internal\RepeatedField $urls
     *           Urls will be prioritized over existing urls on the Google Pay Pass. They are ignored for Apple Wallet.
     *     @type \Io\ImageIds $images
     *           Images to display for the duration of the message. For Google Pay, only a 'message' type image will be used. For Apple Wallet, any of strip, eventStrip, background, logo, thumbnail and footer can be used, depending on the underlying pass type.
     *     @type int $priority
     *           Priority the lower the priority, the lower down the message will be rendered when there are multiple messages. Defaults to a value of 10.
     *     @type string $displayFrom
     *           The date and time to display the message. The value must be in RFC3339 format. If omitted, the current timestamp will be used.
     *     @type string $displayUntil
     *           The date and time to remove the message. The value must be in RFC3339 format. If omitted, the message will be displayed indefinitely until it is cancelled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Message::initOnce();
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
     * The message title. This is used as a label in iOS and as the title in Google Pay.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The message title. This is used as a label in iOS and as the title in Google Pay.
     *
     * Generated from protobuf field <code>string title = 2;</code>
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
     * Localized message title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 3;</code>
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
     * Localized message title.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitle = 3;</code>
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
     * Plain text content cannot contain hyperlinks. Google Pay messages cannot have links, use URLs instead.
     *
     * Generated from protobuf field <code>string plainTextContent = 4;</code>
     * @return string
     */
    public function getPlainTextContent()
    {
        return $this->plainTextContent;
    }

    /**
     * Plain text content cannot contain hyperlinks. Google Pay messages cannot have links, use URLs instead.
     *
     * Generated from protobuf field <code>string plainTextContent = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPlainTextContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->plainTextContent = $var;

        return $this;
    }

    /**
     * Localized plain text content.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedPlainTextContent = 5;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedPlainTextContent()
    {
        return $this->localizedPlainTextContent;
    }

    public function hasLocalizedPlainTextContent()
    {
        return isset($this->localizedPlainTextContent);
    }

    public function clearLocalizedPlainTextContent()
    {
        unset($this->localizedPlainTextContent);
    }

    /**
     * Localized plain text content.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedPlainTextContent = 5;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedPlainTextContent($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedPlainTextContent = $var;

        return $this;
    }

    /**
     * Rich text content that can contain hyperlinks. No other markup is accepted. Links will only function on iOS devices. Ignored for Google Pay.
     *
     * Generated from protobuf field <code>string richTextContent = 6;</code>
     * @return string
     */
    public function getRichTextContent()
    {
        return $this->richTextContent;
    }

    /**
     * Rich text content that can contain hyperlinks. No other markup is accepted. Links will only function on iOS devices. Ignored for Google Pay.
     *
     * Generated from protobuf field <code>string richTextContent = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRichTextContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->richTextContent = $var;

        return $this;
    }

    /**
     * Localized rich text content.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedRichTextContent = 7;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedRichTextContent()
    {
        return $this->localizedRichTextContent;
    }

    public function hasLocalizedRichTextContent()
    {
        return isset($this->localizedRichTextContent);
    }

    public function clearLocalizedRichTextContent()
    {
        unset($this->localizedRichTextContent);
    }

    /**
     * Localized rich text content.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedRichTextContent = 7;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedRichTextContent($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedRichTextContent = $var;

        return $this;
    }

    /**
     * Urls will be prioritized over existing urls on the Google Pay Pass. They are ignored for Apple Wallet.
     *
     * Generated from protobuf field <code>repeated .io.Url urls = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Urls will be prioritized over existing urls on the Google Pay Pass. They are ignored for Apple Wallet.
     *
     * Generated from protobuf field <code>repeated .io.Url urls = 8;</code>
     * @param array<\Io\Url>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Url::class);
        $this->urls = $arr;

        return $this;
    }

    /**
     * Images to display for the duration of the message. For Google Pay, only a 'message' type image will be used. For Apple Wallet, any of strip, eventStrip, background, logo, thumbnail and footer can be used, depending on the underlying pass type.
     *
     * Generated from protobuf field <code>.io.ImageIds images = 9;</code>
     * @return \Io\ImageIds|null
     */
    public function getImages()
    {
        return $this->images;
    }

    public function hasImages()
    {
        return isset($this->images);
    }

    public function clearImages()
    {
        unset($this->images);
    }

    /**
     * Images to display for the duration of the message. For Google Pay, only a 'message' type image will be used. For Apple Wallet, any of strip, eventStrip, background, logo, thumbnail and footer can be used, depending on the underlying pass type.
     *
     * Generated from protobuf field <code>.io.ImageIds images = 9;</code>
     * @param \Io\ImageIds $var
     * @return $this
     */
    public function setImages($var)
    {
        GPBUtil::checkMessage($var, \Io\ImageIds::class);
        $this->images = $var;

        return $this;
    }

    /**
     * Priority the lower the priority, the lower down the message will be rendered when there are multiple messages. Defaults to a value of 10.
     *
     * Generated from protobuf field <code>uint32 priority = 10;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Priority the lower the priority, the lower down the message will be rendered when there are multiple messages. Defaults to a value of 10.
     *
     * Generated from protobuf field <code>uint32 priority = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkUint32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * The date and time to display the message. The value must be in RFC3339 format. If omitted, the current timestamp will be used.
     *
     * Generated from protobuf field <code>string displayFrom = 11;</code>
     * @return string
     */
    public function getDisplayFrom()
    {
        return $this->displayFrom;
    }

    /**
     * The date and time to display the message. The value must be in RFC3339 format. If omitted, the current timestamp will be used.
     *
     * Generated from protobuf field <code>string displayFrom = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayFrom($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayFrom = $var;

        return $this;
    }

    /**
     * The date and time to remove the message. The value must be in RFC3339 format. If omitted, the message will be displayed indefinitely until it is cancelled.
     *
     * Generated from protobuf field <code>string displayUntil = 12;</code>
     * @return string
     */
    public function getDisplayUntil()
    {
        return $this->displayUntil;
    }

    /**
     * The date and time to remove the message. The value must be in RFC3339 format. If omitted, the message will be displayed indefinitely until it is cancelled.
     *
     * Generated from protobuf field <code>string displayUntil = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayUntil($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayUntil = $var;

        return $this;
    }

}

