<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/distribution.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EmailTemplate contains details for sending an email to a customer.
 * Uses the default PassKit email provider and sending credentials
 *
 * Generated from protobuf message <code>io.EmailTemplate</code>
 */
class EmailTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc..
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     */
    protected $subject = '';
    /**
     * Localized subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedSubject = 2;</code>
     */
    protected $localizedSubject = null;
    /**
     * Text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string bodyTextContent = 3;</code>
     */
    protected $bodyTextContent = '';
    /**
     * Localized text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedBodyTextContent = 4;</code>
     */
    protected $localizedBodyTextContent = null;
    /**
     * Content for HTML email rendered above the pass install button. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string bodyHtmlContent = 5;</code>
     */
    protected $bodyHtmlContent = '';
    /**
     * Localized content for HTML email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedBodyHtmlContent = 6;</code>
     */
    protected $localizedBodyHtmlContent = null;
    /**
     * 7 is reserved for custom email SMTP configuration
     *
     * Generated from protobuf field <code>.io.EmailConfiguration configuration = 7;</code>
     */
    protected $configuration = null;
    /**
     * Text of the pass install button.
     *
     * Generated from protobuf field <code>string buttonText = 8;</code>
     */
    protected $buttonText = '';
    /**
     * Text color of the pass install button.
     *
     * Generated from protobuf field <code>string buttonTextColor = 9;</code>
     */
    protected $buttonTextColor = '';
    /**
     * Color of the pass install button.
     *
     * Generated from protobuf field <code>string buttonBackgroundColor = 10;</code>
     */
    protected $buttonBackgroundColor = '';
    /**
     * Radius of the pass install button. The unit can be px or %. Default is px.
     *
     * Generated from protobuf field <code>string buttonBorderRadius = 11;</code>
     */
    protected $buttonBorderRadius = '';
    /**
     * Footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *
     * Generated from protobuf field <code>string footerTextContent = 12;</code>
     */
    protected $footerTextContent = '';
    /**
     * Localized footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterTextContent = 13;</code>
     */
    protected $localizedFooterTextContent = null;
    /**
     * Footer HTML content rendered below the pass install button.
     *
     * Generated from protobuf field <code>string footerHtmlContent = 14;</code>
     */
    protected $footerHtmlContent = '';
    /**
     * Localized content for HTML footer content which is rendered below the pass install button.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterHtmlContent = 15;</code>
     */
    protected $localizedFooterHtmlContent = null;
    /**
     * Background color for the message content section.
     *
     * Generated from protobuf field <code>string messageBackgroundColor = 16;</code>
     */
    protected $messageBackgroundColor = '';
    /**
     * Background color for the margin space surrounding the message content. This setting is relevant for PC viewers.
     *
     * Generated from protobuf field <code>string pageBackgroundColor = 17;</code>
     */
    protected $pageBackgroundColor = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subject
     *           Subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc..
     *     @type \Io\LocalizedString $localizedSubject
     *           Localized subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *     @type string $bodyTextContent
     *           Text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *     @type \Io\LocalizedString $localizedBodyTextContent
     *           Localized text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *     @type string $bodyHtmlContent
     *           Content for HTML email rendered above the pass install button. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *     @type \Io\LocalizedString $localizedBodyHtmlContent
     *           Localized content for HTML email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *     @type \Io\EmailConfiguration $configuration
     *           7 is reserved for custom email SMTP configuration
     *     @type string $buttonText
     *           Text of the pass install button.
     *     @type string $buttonTextColor
     *           Text color of the pass install button.
     *     @type string $buttonBackgroundColor
     *           Color of the pass install button.
     *     @type string $buttonBorderRadius
     *           Radius of the pass install button. The unit can be px or %. Default is px.
     *     @type string $footerTextContent
     *           Footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *     @type \Io\LocalizedString $localizedFooterTextContent
     *           Localized footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *     @type string $footerHtmlContent
     *           Footer HTML content rendered below the pass install button.
     *     @type \Io\LocalizedString $localizedFooterHtmlContent
     *           Localized content for HTML footer content which is rendered below the pass install button.
     *     @type string $messageBackgroundColor
     *           Background color for the message content section.
     *     @type string $pageBackgroundColor
     *           Background color for the margin space surrounding the message content. This setting is relevant for PC viewers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc..
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc..
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Localized subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedSubject = 2;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedSubject()
    {
        return isset($this->localizedSubject) ? $this->localizedSubject : null;
    }

    public function hasLocalizedSubject()
    {
        return isset($this->localizedSubject);
    }

    public function clearLocalizedSubject()
    {
        unset($this->localizedSubject);
    }

    /**
     * Localized subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedSubject = 2;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedSubject($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedSubject = $var;

        return $this;
    }

    /**
     * Text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string bodyTextContent = 3;</code>
     * @return string
     */
    public function getBodyTextContent()
    {
        return $this->bodyTextContent;
    }

    /**
     * Text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string bodyTextContent = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBodyTextContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->bodyTextContent = $var;

        return $this;
    }

    /**
     * Localized text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedBodyTextContent = 4;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedBodyTextContent()
    {
        return isset($this->localizedBodyTextContent) ? $this->localizedBodyTextContent : null;
    }

    public function hasLocalizedBodyTextContent()
    {
        return isset($this->localizedBodyTextContent);
    }

    public function clearLocalizedBodyTextContent()
    {
        unset($this->localizedBodyTextContent);
    }

    /**
     * Localized text content of the email (for email clients that don't support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedBodyTextContent = 4;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedBodyTextContent($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedBodyTextContent = $var;

        return $this;
    }

    /**
     * Content for HTML email rendered above the pass install button. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string bodyHtmlContent = 5;</code>
     * @return string
     */
    public function getBodyHtmlContent()
    {
        return $this->bodyHtmlContent;
    }

    /**
     * Content for HTML email rendered above the pass install button. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string bodyHtmlContent = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBodyHtmlContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->bodyHtmlContent = $var;

        return $this;
    }

    /**
     * Localized content for HTML email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedBodyHtmlContent = 6;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedBodyHtmlContent()
    {
        return isset($this->localizedBodyHtmlContent) ? $this->localizedBodyHtmlContent : null;
    }

    public function hasLocalizedBodyHtmlContent()
    {
        return isset($this->localizedBodyHtmlContent);
    }

    public function clearLocalizedBodyHtmlContent()
    {
        unset($this->localizedBodyHtmlContent);
    }

    /**
     * Localized content for HTML email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedBodyHtmlContent = 6;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedBodyHtmlContent($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedBodyHtmlContent = $var;

        return $this;
    }

    /**
     * 7 is reserved for custom email SMTP configuration
     *
     * Generated from protobuf field <code>.io.EmailConfiguration configuration = 7;</code>
     * @return \Io\EmailConfiguration
     */
    public function getConfiguration()
    {
        return isset($this->configuration) ? $this->configuration : null;
    }

    public function hasConfiguration()
    {
        return isset($this->configuration);
    }

    public function clearConfiguration()
    {
        unset($this->configuration);
    }

    /**
     * 7 is reserved for custom email SMTP configuration
     *
     * Generated from protobuf field <code>.io.EmailConfiguration configuration = 7;</code>
     * @param \Io\EmailConfiguration $var
     * @return $this
     */
    public function setConfiguration($var)
    {
        GPBUtil::checkMessage($var, \Io\EmailConfiguration::class);
        $this->configuration = $var;

        return $this;
    }

    /**
     * Text of the pass install button.
     *
     * Generated from protobuf field <code>string buttonText = 8;</code>
     * @return string
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * Text of the pass install button.
     *
     * Generated from protobuf field <code>string buttonText = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->buttonText = $var;

        return $this;
    }

    /**
     * Text color of the pass install button.
     *
     * Generated from protobuf field <code>string buttonTextColor = 9;</code>
     * @return string
     */
    public function getButtonTextColor()
    {
        return $this->buttonTextColor;
    }

    /**
     * Text color of the pass install button.
     *
     * Generated from protobuf field <code>string buttonTextColor = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setButtonTextColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->buttonTextColor = $var;

        return $this;
    }

    /**
     * Color of the pass install button.
     *
     * Generated from protobuf field <code>string buttonBackgroundColor = 10;</code>
     * @return string
     */
    public function getButtonBackgroundColor()
    {
        return $this->buttonBackgroundColor;
    }

    /**
     * Color of the pass install button.
     *
     * Generated from protobuf field <code>string buttonBackgroundColor = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setButtonBackgroundColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->buttonBackgroundColor = $var;

        return $this;
    }

    /**
     * Radius of the pass install button. The unit can be px or %. Default is px.
     *
     * Generated from protobuf field <code>string buttonBorderRadius = 11;</code>
     * @return string
     */
    public function getButtonBorderRadius()
    {
        return $this->buttonBorderRadius;
    }

    /**
     * Radius of the pass install button. The unit can be px or %. Default is px.
     *
     * Generated from protobuf field <code>string buttonBorderRadius = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setButtonBorderRadius($var)
    {
        GPBUtil::checkString($var, True);
        $this->buttonBorderRadius = $var;

        return $this;
    }

    /**
     * Footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *
     * Generated from protobuf field <code>string footerTextContent = 12;</code>
     * @return string
     */
    public function getFooterTextContent()
    {
        return $this->footerTextContent;
    }

    /**
     * Footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *
     * Generated from protobuf field <code>string footerTextContent = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setFooterTextContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->footerTextContent = $var;

        return $this;
    }

    /**
     * Localized footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterTextContent = 13;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedFooterTextContent()
    {
        return isset($this->localizedFooterTextContent) ? $this->localizedFooterTextContent : null;
    }

    public function hasLocalizedFooterTextContent()
    {
        return isset($this->localizedFooterTextContent);
    }

    public function clearLocalizedFooterTextContent()
    {
        unset($this->localizedFooterTextContent);
    }

    /**
     * Localized footer text content (for email clients that don't support HTML). The footer text is rendered below the pass install url text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterTextContent = 13;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedFooterTextContent($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedFooterTextContent = $var;

        return $this;
    }

    /**
     * Footer HTML content rendered below the pass install button.
     *
     * Generated from protobuf field <code>string footerHtmlContent = 14;</code>
     * @return string
     */
    public function getFooterHtmlContent()
    {
        return $this->footerHtmlContent;
    }

    /**
     * Footer HTML content rendered below the pass install button.
     *
     * Generated from protobuf field <code>string footerHtmlContent = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setFooterHtmlContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->footerHtmlContent = $var;

        return $this;
    }

    /**
     * Localized content for HTML footer content which is rendered below the pass install button.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterHtmlContent = 15;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedFooterHtmlContent()
    {
        return isset($this->localizedFooterHtmlContent) ? $this->localizedFooterHtmlContent : null;
    }

    public function hasLocalizedFooterHtmlContent()
    {
        return isset($this->localizedFooterHtmlContent);
    }

    public function clearLocalizedFooterHtmlContent()
    {
        unset($this->localizedFooterHtmlContent);
    }

    /**
     * Localized content for HTML footer content which is rendered below the pass install button.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedFooterHtmlContent = 15;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedFooterHtmlContent($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedFooterHtmlContent = $var;

        return $this;
    }

    /**
     * Background color for the message content section.
     *
     * Generated from protobuf field <code>string messageBackgroundColor = 16;</code>
     * @return string
     */
    public function getMessageBackgroundColor()
    {
        return $this->messageBackgroundColor;
    }

    /**
     * Background color for the message content section.
     *
     * Generated from protobuf field <code>string messageBackgroundColor = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageBackgroundColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->messageBackgroundColor = $var;

        return $this;
    }

    /**
     * Background color for the margin space surrounding the message content. This setting is relevant for PC viewers.
     *
     * Generated from protobuf field <code>string pageBackgroundColor = 17;</code>
     * @return string
     */
    public function getPageBackgroundColor()
    {
        return $this->pageBackgroundColor;
    }

    /**
     * Background color for the margin space surrounding the message content. This setting is relevant for PC viewers.
     *
     * Generated from protobuf field <code>string pageBackgroundColor = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setPageBackgroundColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->pageBackgroundColor = $var;

        return $this;
    }

}

