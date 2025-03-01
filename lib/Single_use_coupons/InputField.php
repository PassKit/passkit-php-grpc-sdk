<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/single_use_coupons/offer.proto

namespace Single_use_coupons;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>single_use_coupons.InputField</code>
 */
class InputField extends \Google\Protobuf\Internal\Message
{
    /**
     * The label of input field.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     */
    protected $label = '';
    /**
     * Localized label of input field.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLabel = 2;</code>
     */
    protected $localizedLabel = null;
    /**
     * Help text shown below the input field.
     *
     * Generated from protobuf field <code>string helperText = 3;</code>
     */
    protected $helperText = '';
    /**
     * Localized help text shown below the input field.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedHelperText = 4;</code>
     */
    protected $localizedHelperText = null;
    /**
     * Optional message that is displayed if the user provides an invalid input value.
     *
     * Generated from protobuf field <code>string errorMessage = 5;</code>
     */
    protected $errorMessage = '';
    /**
     * Localized invalid code error message.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedErrorMessage = 6;</code>
     */
    protected $localizedErrorMessage = null;
    /**
     * Default input value.
     *
     * Generated from protobuf field <code>string defaultValue = 7;</code>
     */
    protected $defaultValue = '';
    /**
     * Localized default value.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDefaultValue = 8;</code>
     */
    protected $localizedDefaultValue = null;
    /**
     * Placeholder text for the input field.
     *
     * Generated from protobuf field <code>string placeholder = 9;</code>
     */
    protected $placeholder = '';
    /**
     * Localized placeholder text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedPlaceholder = 10;</code>
     */
    protected $localizedPlaceholder = null;
    /**
     * A regex which allows you to set custom validation rules for the input value.
     *
     * Generated from protobuf field <code>string validation = 11;</code>
     */
    protected $validation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $label
     *           The label of input field.
     *     @type \Io\LocalizedString $localizedLabel
     *           Localized label of input field.
     *     @type string $helperText
     *           Help text shown below the input field.
     *     @type \Io\LocalizedString $localizedHelperText
     *           Localized help text shown below the input field.
     *     @type string $errorMessage
     *           Optional message that is displayed if the user provides an invalid input value.
     *     @type \Io\LocalizedString $localizedErrorMessage
     *           Localized invalid code error message.
     *     @type string $defaultValue
     *           Default input value.
     *     @type \Io\LocalizedString $localizedDefaultValue
     *           Localized default value.
     *     @type string $placeholder
     *           Placeholder text for the input field.
     *     @type \Io\LocalizedString $localizedPlaceholder
     *           Localized placeholder text.
     *     @type string $validation
     *           A regex which allows you to set custom validation rules for the input value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\SingleUseCoupons\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * The label of input field.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The label of input field.
     *
     * Generated from protobuf field <code>string label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * Localized label of input field.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLabel = 2;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedLabel()
    {
        return $this->localizedLabel;
    }

    public function hasLocalizedLabel()
    {
        return isset($this->localizedLabel);
    }

    public function clearLocalizedLabel()
    {
        unset($this->localizedLabel);
    }

    /**
     * Localized label of input field.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLabel = 2;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedLabel($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedLabel = $var;

        return $this;
    }

    /**
     * Help text shown below the input field.
     *
     * Generated from protobuf field <code>string helperText = 3;</code>
     * @return string
     */
    public function getHelperText()
    {
        return $this->helperText;
    }

    /**
     * Help text shown below the input field.
     *
     * Generated from protobuf field <code>string helperText = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHelperText($var)
    {
        GPBUtil::checkString($var, True);
        $this->helperText = $var;

        return $this;
    }

    /**
     * Localized help text shown below the input field.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedHelperText = 4;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedHelperText()
    {
        return $this->localizedHelperText;
    }

    public function hasLocalizedHelperText()
    {
        return isset($this->localizedHelperText);
    }

    public function clearLocalizedHelperText()
    {
        unset($this->localizedHelperText);
    }

    /**
     * Localized help text shown below the input field.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedHelperText = 4;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedHelperText($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedHelperText = $var;

        return $this;
    }

    /**
     * Optional message that is displayed if the user provides an invalid input value.
     *
     * Generated from protobuf field <code>string errorMessage = 5;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Optional message that is displayed if the user provides an invalid input value.
     *
     * Generated from protobuf field <code>string errorMessage = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->errorMessage = $var;

        return $this;
    }

    /**
     * Localized invalid code error message.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedErrorMessage = 6;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedErrorMessage()
    {
        return $this->localizedErrorMessage;
    }

    public function hasLocalizedErrorMessage()
    {
        return isset($this->localizedErrorMessage);
    }

    public function clearLocalizedErrorMessage()
    {
        unset($this->localizedErrorMessage);
    }

    /**
     * Localized invalid code error message.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedErrorMessage = 6;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedErrorMessage($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedErrorMessage = $var;

        return $this;
    }

    /**
     * Default input value.
     *
     * Generated from protobuf field <code>string defaultValue = 7;</code>
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Default input value.
     *
     * Generated from protobuf field <code>string defaultValue = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->defaultValue = $var;

        return $this;
    }

    /**
     * Localized default value.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDefaultValue = 8;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedDefaultValue()
    {
        return $this->localizedDefaultValue;
    }

    public function hasLocalizedDefaultValue()
    {
        return isset($this->localizedDefaultValue);
    }

    public function clearLocalizedDefaultValue()
    {
        unset($this->localizedDefaultValue);
    }

    /**
     * Localized default value.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDefaultValue = 8;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedDefaultValue($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedDefaultValue = $var;

        return $this;
    }

    /**
     * Placeholder text for the input field.
     *
     * Generated from protobuf field <code>string placeholder = 9;</code>
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Placeholder text for the input field.
     *
     * Generated from protobuf field <code>string placeholder = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceholder($var)
    {
        GPBUtil::checkString($var, True);
        $this->placeholder = $var;

        return $this;
    }

    /**
     * Localized placeholder text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedPlaceholder = 10;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedPlaceholder()
    {
        return $this->localizedPlaceholder;
    }

    public function hasLocalizedPlaceholder()
    {
        return isset($this->localizedPlaceholder);
    }

    public function clearLocalizedPlaceholder()
    {
        unset($this->localizedPlaceholder);
    }

    /**
     * Localized placeholder text.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedPlaceholder = 10;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedPlaceholder($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedPlaceholder = $var;

        return $this;
    }

    /**
     * A regex which allows you to set custom validation rules for the input value.
     *
     * Generated from protobuf field <code>string validation = 11;</code>
     * @return string
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * A regex which allows you to set custom validation rules for the input value.
     *
     * Generated from protobuf field <code>string validation = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setValidation($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation = $var;

        return $this;
    }

}

