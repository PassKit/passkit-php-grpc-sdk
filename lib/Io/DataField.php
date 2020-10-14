<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data Field allows you to define set of data you store against each pass holder.
 * When data field is created, DataField for Terms & Conditions and optIn will be autogenerated.
 *
 * Generated from protobuf message <code>io.DataField</code>
 */
class DataField extends \Google\Protobuf\Internal\Message
{
    /**
     * If PII key is set as an unique name of the field, collected data will be stored under PII (ex. surname, forename).
     * Else, uniqueName (key) and value are stored under meta object.
     *
     * Generated from protobuf field <code>string uniqueName = 1;</code>
     */
    protected $uniqueName = '';
    /**
     * The template id which this field belongs to.
     *
     * Generated from protobuf field <code>string templateId = 2;</code>
     */
    protected $templateId = '';
    /**
     * Generated from protobuf field <code>.io.FieldType fieldType = 3;</code>
     */
    protected $fieldType = 0;
    /**
     * If set true, the field is mandatory. If set false, the field is optional.
     *
     * Generated from protobuf field <code>bool isRequired = 4;</code>
     */
    protected $isRequired = false;
    /**
     * A text used for the data collection field label and pass field title.
     *
     * Generated from protobuf field <code>string label = 5;</code>
     */
    protected $label = '';
    /**
     * This translates label text into different language.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLabel = 6;</code>
     */
    protected $localizedLabel = null;
    /**
     * Data type you want to receive from your users.
     *
     * Generated from protobuf field <code>.io.DataType dataType = 7;</code>
     */
    protected $dataType = 0;
    /**
     * An optional default value or text. E.g. a default set of terms an conditions. Value can contain a protocol field in the format of ${member.externalId}.
     *
     * Generated from protobuf field <code>string defaultValue = 8;</code>
     */
    protected $defaultValue = '';
    /**
     * This translates default value of the field into different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDefaultValue = 9;</code>
     */
    protected $localizedDefaultValue = null;
    /**
     * A regex which allows you to set set custom validation rules for the data stored.
     *
     * Generated from protobuf field <code>string validation = 10;</code>
     */
    protected $validation = '';
    /**
     * If false, a defaultValue or listOptions[0] will be used.
     *
     * Generated from protobuf field <code>bool userCanSetValue = 11;</code>
     */
    protected $userCanSetValue = false;
    /**
     * The currency code (e.g. USD, EUR) to display with money value if data type is set as currency.
     *
     * Generated from protobuf field <code>string currencyCode = 12;</code>
     */
    protected $currencyCode = '';
    /**
     * Generated from protobuf field <code>.io.AppleWalletFieldRenderOptions appleWalletFieldRenderOptions = 13;</code>
     */
    protected $appleWalletFieldRenderOptions = null;
    /**
     * Generated from protobuf field <code>.io.DataCollectionFieldRenderOptions dataCollectionFieldRenderOptions = 14;</code>
     */
    protected $dataCollectionFieldRenderOptions = null;
    /**
     * Usage: indicates where the field is used (apple render, google render, data collection page)
     *
     * Generated from protobuf field <code>repeated .io.UsageType usage = 15;</code>
     */
    private $usage;
    /**
     * Generated from protobuf field <code>.io.GooglePayFieldRenderOptions googlePayFieldRenderOptions = 16;</code>
     */
    protected $googlePayFieldRenderOptions = null;
    /**
     * Default international telephone code determines the default country flag of the tel input field (e.g. +852, +44).
     *
     * Generated from protobuf field <code>string defaultTelCountryCode = 17;</code>
     */
    protected $defaultTelCountryCode = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uniqueName
     *           If PII key is set as an unique name of the field, collected data will be stored under PII (ex. surname, forename).
     *           Else, uniqueName (key) and value are stored under meta object.
     *     @type string $templateId
     *           The template id which this field belongs to.
     *     @type int $fieldType
     *     @type bool $isRequired
     *           If set true, the field is mandatory. If set false, the field is optional.
     *     @type string $label
     *           A text used for the data collection field label and pass field title.
     *     @type \Io\LocalizedString $localizedLabel
     *           This translates label text into different language.
     *     @type int $dataType
     *           Data type you want to receive from your users.
     *     @type string $defaultValue
     *           An optional default value or text. E.g. a default set of terms an conditions. Value can contain a protocol field in the format of ${member.externalId}.
     *     @type \Io\LocalizedString $localizedDefaultValue
     *           This translates default value of the field into different languages.
     *     @type string $validation
     *           A regex which allows you to set set custom validation rules for the data stored.
     *     @type bool $userCanSetValue
     *           If false, a defaultValue or listOptions[0] will be used.
     *     @type string $currencyCode
     *           The currency code (e.g. USD, EUR) to display with money value if data type is set as currency.
     *     @type \Io\AppleWalletFieldRenderOptions $appleWalletFieldRenderOptions
     *     @type \Io\DataCollectionFieldRenderOptions $dataCollectionFieldRenderOptions
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $usage
     *           Usage: indicates where the field is used (apple render, google render, data collection page)
     *     @type \Io\GooglePayFieldRenderOptions $googlePayFieldRenderOptions
     *     @type string $defaultTelCountryCode
     *           Default international telephone code determines the default country flag of the tel input field (e.g. +852, +44).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * If PII key is set as an unique name of the field, collected data will be stored under PII (ex. surname, forename).
     * Else, uniqueName (key) and value are stored under meta object.
     *
     * Generated from protobuf field <code>string uniqueName = 1;</code>
     * @return string
     */
    public function getUniqueName()
    {
        return $this->uniqueName;
    }

    /**
     * If PII key is set as an unique name of the field, collected data will be stored under PII (ex. surname, forename).
     * Else, uniqueName (key) and value are stored under meta object.
     *
     * Generated from protobuf field <code>string uniqueName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueName($var)
    {
        GPBUtil::checkString($var, True);
        $this->uniqueName = $var;

        return $this;
    }

    /**
     * The template id which this field belongs to.
     *
     * Generated from protobuf field <code>string templateId = 2;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * The template id which this field belongs to.
     *
     * Generated from protobuf field <code>string templateId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->templateId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.FieldType fieldType = 3;</code>
     * @return int
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Generated from protobuf field <code>.io.FieldType fieldType = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFieldType($var)
    {
        GPBUtil::checkEnum($var, \Io\FieldType::class);
        $this->fieldType = $var;

        return $this;
    }

    /**
     * If set true, the field is mandatory. If set false, the field is optional.
     *
     * Generated from protobuf field <code>bool isRequired = 4;</code>
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * If set true, the field is mandatory. If set false, the field is optional.
     *
     * Generated from protobuf field <code>bool isRequired = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->isRequired = $var;

        return $this;
    }

    /**
     * A text used for the data collection field label and pass field title.
     *
     * Generated from protobuf field <code>string label = 5;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A text used for the data collection field label and pass field title.
     *
     * Generated from protobuf field <code>string label = 5;</code>
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
     * This translates label text into different language.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLabel = 6;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedLabel()
    {
        return isset($this->localizedLabel) ? $this->localizedLabel : null;
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
     * This translates label text into different language.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedLabel = 6;</code>
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
     * Data type you want to receive from your users.
     *
     * Generated from protobuf field <code>.io.DataType dataType = 7;</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Data type you want to receive from your users.
     *
     * Generated from protobuf field <code>.io.DataType dataType = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Io\DataType::class);
        $this->dataType = $var;

        return $this;
    }

    /**
     * An optional default value or text. E.g. a default set of terms an conditions. Value can contain a protocol field in the format of ${member.externalId}.
     *
     * Generated from protobuf field <code>string defaultValue = 8;</code>
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * An optional default value or text. E.g. a default set of terms an conditions. Value can contain a protocol field in the format of ${member.externalId}.
     *
     * Generated from protobuf field <code>string defaultValue = 8;</code>
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
     * This translates default value of the field into different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDefaultValue = 9;</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedDefaultValue()
    {
        return isset($this->localizedDefaultValue) ? $this->localizedDefaultValue : null;
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
     * This translates default value of the field into different languages.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedDefaultValue = 9;</code>
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
     * A regex which allows you to set set custom validation rules for the data stored.
     *
     * Generated from protobuf field <code>string validation = 10;</code>
     * @return string
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * A regex which allows you to set set custom validation rules for the data stored.
     *
     * Generated from protobuf field <code>string validation = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setValidation($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation = $var;

        return $this;
    }

    /**
     * If false, a defaultValue or listOptions[0] will be used.
     *
     * Generated from protobuf field <code>bool userCanSetValue = 11;</code>
     * @return bool
     */
    public function getUserCanSetValue()
    {
        return $this->userCanSetValue;
    }

    /**
     * If false, a defaultValue or listOptions[0] will be used.
     *
     * Generated from protobuf field <code>bool userCanSetValue = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setUserCanSetValue($var)
    {
        GPBUtil::checkBool($var);
        $this->userCanSetValue = $var;

        return $this;
    }

    /**
     * The currency code (e.g. USD, EUR) to display with money value if data type is set as currency.
     *
     * Generated from protobuf field <code>string currencyCode = 12;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * The currency code (e.g. USD, EUR) to display with money value if data type is set as currency.
     *
     * Generated from protobuf field <code>string currencyCode = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currencyCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.AppleWalletFieldRenderOptions appleWalletFieldRenderOptions = 13;</code>
     * @return \Io\AppleWalletFieldRenderOptions
     */
    public function getAppleWalletFieldRenderOptions()
    {
        return isset($this->appleWalletFieldRenderOptions) ? $this->appleWalletFieldRenderOptions : null;
    }

    public function hasAppleWalletFieldRenderOptions()
    {
        return isset($this->appleWalletFieldRenderOptions);
    }

    public function clearAppleWalletFieldRenderOptions()
    {
        unset($this->appleWalletFieldRenderOptions);
    }

    /**
     * Generated from protobuf field <code>.io.AppleWalletFieldRenderOptions appleWalletFieldRenderOptions = 13;</code>
     * @param \Io\AppleWalletFieldRenderOptions $var
     * @return $this
     */
    public function setAppleWalletFieldRenderOptions($var)
    {
        GPBUtil::checkMessage($var, \Io\AppleWalletFieldRenderOptions::class);
        $this->appleWalletFieldRenderOptions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.DataCollectionFieldRenderOptions dataCollectionFieldRenderOptions = 14;</code>
     * @return \Io\DataCollectionFieldRenderOptions
     */
    public function getDataCollectionFieldRenderOptions()
    {
        return isset($this->dataCollectionFieldRenderOptions) ? $this->dataCollectionFieldRenderOptions : null;
    }

    public function hasDataCollectionFieldRenderOptions()
    {
        return isset($this->dataCollectionFieldRenderOptions);
    }

    public function clearDataCollectionFieldRenderOptions()
    {
        unset($this->dataCollectionFieldRenderOptions);
    }

    /**
     * Generated from protobuf field <code>.io.DataCollectionFieldRenderOptions dataCollectionFieldRenderOptions = 14;</code>
     * @param \Io\DataCollectionFieldRenderOptions $var
     * @return $this
     */
    public function setDataCollectionFieldRenderOptions($var)
    {
        GPBUtil::checkMessage($var, \Io\DataCollectionFieldRenderOptions::class);
        $this->dataCollectionFieldRenderOptions = $var;

        return $this;
    }

    /**
     * Usage: indicates where the field is used (apple render, google render, data collection page)
     *
     * Generated from protobuf field <code>repeated .io.UsageType usage = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Usage: indicates where the field is used (apple render, google render, data collection page)
     *
     * Generated from protobuf field <code>repeated .io.UsageType usage = 15;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\UsageType::class);
        $this->usage = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.GooglePayFieldRenderOptions googlePayFieldRenderOptions = 16;</code>
     * @return \Io\GooglePayFieldRenderOptions
     */
    public function getGooglePayFieldRenderOptions()
    {
        return isset($this->googlePayFieldRenderOptions) ? $this->googlePayFieldRenderOptions : null;
    }

    public function hasGooglePayFieldRenderOptions()
    {
        return isset($this->googlePayFieldRenderOptions);
    }

    public function clearGooglePayFieldRenderOptions()
    {
        unset($this->googlePayFieldRenderOptions);
    }

    /**
     * Generated from protobuf field <code>.io.GooglePayFieldRenderOptions googlePayFieldRenderOptions = 16;</code>
     * @param \Io\GooglePayFieldRenderOptions $var
     * @return $this
     */
    public function setGooglePayFieldRenderOptions($var)
    {
        GPBUtil::checkMessage($var, \Io\GooglePayFieldRenderOptions::class);
        $this->googlePayFieldRenderOptions = $var;

        return $this;
    }

    /**
     * Default international telephone code determines the default country flag of the tel input field (e.g. +852, +44).
     *
     * Generated from protobuf field <code>string defaultTelCountryCode = 17;</code>
     * @return string
     */
    public function getDefaultTelCountryCode()
    {
        return $this->defaultTelCountryCode;
    }

    /**
     * Default international telephone code determines the default country flag of the tel input field (e.g. +852, +44).
     *
     * Generated from protobuf field <code>string defaultTelCountryCode = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultTelCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->defaultTelCountryCode = $var;

        return $this;
    }

}

