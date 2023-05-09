<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.PersonalizationDetails</code>
 */
class PersonalizationDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * A brief description of the program for a pass that appears on the signup sheet, under the personalization logo.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     */
    protected $description = '';
    /**
     * An array of the required validation items. [PERSONALIZE_NAME, PERSONALIZE_EMAIL_ADDRESS, PERSONALIZE_PHONE_NUMBER, PERSONALIZE_POSTAL_CODE]
     *
     * Generated from protobuf field <code>repeated .io.PersonalizedDataField requiredPersonalizationData = 2;</code>
     */
    private $requiredPersonalizationData;
    /**
     * A description of the program’s terms and conditions. This string can contain HTML link tags to external content.
     * If present, this information appears after the user enters their personal information and taps the Next button. The user then has the option to agree to the terms, or to cancel the sign-up process.
     *
     * Generated from protobuf field <code>string termsAndConditions = 3;</code>
     */
    protected $termsAndConditions = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           A brief description of the program for a pass that appears on the signup sheet, under the personalization logo.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $requiredPersonalizationData
     *           An array of the required validation items. [PERSONALIZE_NAME, PERSONALIZE_EMAIL_ADDRESS, PERSONALIZE_PHONE_NUMBER, PERSONALIZE_POSTAL_CODE]
     *     @type string $termsAndConditions
     *           A description of the program’s terms and conditions. This string can contain HTML link tags to external content.
     *           If present, this information appears after the user enters their personal information and taps the Next button. The user then has the option to agree to the terms, or to cancel the sign-up process.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * A brief description of the program for a pass that appears on the signup sheet, under the personalization logo.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A brief description of the program for a pass that appears on the signup sheet, under the personalization logo.
     *
     * Generated from protobuf field <code>string description = 1;</code>
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
     * An array of the required validation items. [PERSONALIZE_NAME, PERSONALIZE_EMAIL_ADDRESS, PERSONALIZE_PHONE_NUMBER, PERSONALIZE_POSTAL_CODE]
     *
     * Generated from protobuf field <code>repeated .io.PersonalizedDataField requiredPersonalizationData = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredPersonalizationData()
    {
        return $this->requiredPersonalizationData;
    }

    /**
     * An array of the required validation items. [PERSONALIZE_NAME, PERSONALIZE_EMAIL_ADDRESS, PERSONALIZE_PHONE_NUMBER, PERSONALIZE_POSTAL_CODE]
     *
     * Generated from protobuf field <code>repeated .io.PersonalizedDataField requiredPersonalizationData = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequiredPersonalizationData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\PersonalizedDataField::class);
        $this->requiredPersonalizationData = $arr;

        return $this;
    }

    /**
     * A description of the program’s terms and conditions. This string can contain HTML link tags to external content.
     * If present, this information appears after the user enters their personal information and taps the Next button. The user then has the option to agree to the terms, or to cancel the sign-up process.
     *
     * Generated from protobuf field <code>string termsAndConditions = 3;</code>
     * @return string
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    /**
     * A description of the program’s terms and conditions. This string can contain HTML link tags to external content.
     * If present, this information appears after the user enters their personal information and taps the Next button. The user then has the option to agree to the terms, or to cancel the sign-up process.
     *
     * Generated from protobuf field <code>string termsAndConditions = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTermsAndConditions($var)
    {
        GPBUtil::checkString($var, True);
        $this->termsAndConditions = $var;

        return $this;
    }

}

