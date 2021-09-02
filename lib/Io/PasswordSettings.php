<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PasswordSettings holds the settings for the password protection page.
 *
 * Generated from protobuf message <code>io.PasswordSettings</code>
 */
class PasswordSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Configures the type of password.
     *
     * Generated from protobuf field <code>.io.PasswordType passwordType = 1;</code>
     */
    protected $passwordType = 0;
    /**
     * Password users need to provide to access the data collection page.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';
    /**
     * Label text for the password field.
     *
     * Generated from protobuf field <code>string inputLabelText = 3;</code>
     */
    protected $inputLabelText = '';
    /**
     * Localized input label text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedInputLabelText = 4;</code>
     */
    protected $localizedInputLabelText = null;
    /**
     * Error text to be shown when an incorrect password is shown.
     *
     * Generated from protobuf field <code>string errorText = 5;</code>
     */
    protected $errorText = '';
    /**
     * Localized error text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedErrorText = 6;</code>
     */
    protected $localizedErrorText = null;
    /**
     * Header text to be displayed above the password input box.
     *
     * Generated from protobuf field <code>string headerText = 7;</code>
     */
    protected $headerText = '';
    /**
     * Localized header text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedHeaderText = 8;</code>
     */
    protected $localizedHeaderText = null;
    /**
     * Text for the submit button.
     *
     * Generated from protobuf field <code>string buttonText = 9;</code>
     */
    protected $buttonText = '';
    /**
     * Localized button text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedButtonText = 10;</code>
     */
    protected $localizedButtonText = null;
    /**
     * Text for the submit button.
     *
     * Generated from protobuf field <code>string titleText = 11;</code>
     */
    protected $titleText = '';
    /**
     * Localized button text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitleText = 12;</code>
     */
    protected $localizedTitleText = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $passwordType
     *           Configures the type of password.
     *     @type string $password
     *           Password users need to provide to access the data collection page.
     *     @type string $inputLabelText
     *           Label text for the password field.
     *     @type \Io\LocalizedString $localizedInputLabelText
     *           Localized input label text.
     *     @type string $errorText
     *           Error text to be shown when an incorrect password is shown.
     *     @type \Io\LocalizedString $localizedErrorText
     *           Localized error text.
     *     @type string $headerText
     *           Header text to be displayed above the password input box.
     *     @type \Io\LocalizedString $localizedHeaderText
     *           Localized header text.
     *     @type string $buttonText
     *           Text for the submit button.
     *     @type \Io\LocalizedString $localizedButtonText
     *           Localized button text.
     *     @type string $titleText
     *           Text for the submit button.
     *     @type \Io\LocalizedString $localizedTitleText
     *           Localized button text.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * Configures the type of password.
     *
     * Generated from protobuf field <code>.io.PasswordType passwordType = 1;</code>
     * @return int
     */
    public function getPasswordType()
    {
        return $this->passwordType;
    }

    /**
     * Configures the type of password.
     *
     * Generated from protobuf field <code>.io.PasswordType passwordType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPasswordType($var)
    {
        GPBUtil::checkEnum($var, \Io\PasswordType::class);
        $this->passwordType = $var;

        return $this;
    }

    /**
     * Password users need to provide to access the data collection page.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Password users need to provide to access the data collection page.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Label text for the password field.
     *
     * Generated from protobuf field <code>string inputLabelText = 3;</code>
     * @return string
     */
    public function getInputLabelText()
    {
        return $this->inputLabelText;
    }

    /**
     * Label text for the password field.
     *
     * Generated from protobuf field <code>string inputLabelText = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInputLabelText($var)
    {
        GPBUtil::checkString($var, True);
        $this->inputLabelText = $var;

        return $this;
    }

    /**
     * Localized input label text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedInputLabelText = 4;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedInputLabelText()
    {
        return isset($this->localizedInputLabelText) ? $this->localizedInputLabelText : null;
    }

    public function hasLocalizedInputLabelText()
    {
        return isset($this->localizedInputLabelText);
    }

    public function clearLocalizedInputLabelText()
    {
        unset($this->localizedInputLabelText);
    }

    /**
     * Localized input label text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedInputLabelText = 4;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedInputLabelText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedInputLabelText = $var;

        return $this;
    }

    /**
     * Error text to be shown when an incorrect password is shown.
     *
     * Generated from protobuf field <code>string errorText = 5;</code>
     * @return string
     */
    public function getErrorText()
    {
        return $this->errorText;
    }

    /**
     * Error text to be shown when an incorrect password is shown.
     *
     * Generated from protobuf field <code>string errorText = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorText($var)
    {
        GPBUtil::checkString($var, True);
        $this->errorText = $var;

        return $this;
    }

    /**
     * Localized error text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedErrorText = 6;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedErrorText()
    {
        return isset($this->localizedErrorText) ? $this->localizedErrorText : null;
    }

    public function hasLocalizedErrorText()
    {
        return isset($this->localizedErrorText);
    }

    public function clearLocalizedErrorText()
    {
        unset($this->localizedErrorText);
    }

    /**
     * Localized error text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedErrorText = 6;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedErrorText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedErrorText = $var;

        return $this;
    }

    /**
     * Header text to be displayed above the password input box.
     *
     * Generated from protobuf field <code>string headerText = 7;</code>
     * @return string
     */
    public function getHeaderText()
    {
        return $this->headerText;
    }

    /**
     * Header text to be displayed above the password input box.
     *
     * Generated from protobuf field <code>string headerText = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderText($var)
    {
        GPBUtil::checkString($var, True);
        $this->headerText = $var;

        return $this;
    }

    /**
     * Localized header text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedHeaderText = 8;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedHeaderText()
    {
        return isset($this->localizedHeaderText) ? $this->localizedHeaderText : null;
    }

    public function hasLocalizedHeaderText()
    {
        return isset($this->localizedHeaderText);
    }

    public function clearLocalizedHeaderText()
    {
        unset($this->localizedHeaderText);
    }

    /**
     * Localized header text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedHeaderText = 8;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedHeaderText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedHeaderText = $var;

        return $this;
    }

    /**
     * Text for the submit button.
     *
     * Generated from protobuf field <code>string buttonText = 9;</code>
     * @return string
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * Text for the submit button.
     *
     * Generated from protobuf field <code>string buttonText = 9;</code>
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
     * Localized button text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedButtonText = 10;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedButtonText()
    {
        return isset($this->localizedButtonText) ? $this->localizedButtonText : null;
    }

    public function hasLocalizedButtonText()
    {
        return isset($this->localizedButtonText);
    }

    public function clearLocalizedButtonText()
    {
        unset($this->localizedButtonText);
    }

    /**
     * Localized button text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedButtonText = 10;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedButtonText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedButtonText = $var;

        return $this;
    }

    /**
     * Text for the submit button.
     *
     * Generated from protobuf field <code>string titleText = 11;</code>
     * @return string
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Text for the submit button.
     *
     * Generated from protobuf field <code>string titleText = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setTitleText($var)
    {
        GPBUtil::checkString($var, True);
        $this->titleText = $var;

        return $this;
    }

    /**
     * Localized button text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitleText = 12;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedTitleText()
    {
        return isset($this->localizedTitleText) ? $this->localizedTitleText : null;
    }

    public function hasLocalizedTitleText()
    {
        return isset($this->localizedTitleText);
    }

    public function clearLocalizedTitleText()
    {
        unset($this->localizedTitleText);
    }

    /**
     * Localized button text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedTitleText = 12;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedTitleText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedTitleText = $var;

        return $this;
    }

}
