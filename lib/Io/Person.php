<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/personal.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A person represents a single, identifiable individual.
 *
 * Generated from protobuf message <code>io.Person</code>
 */
class Person extends \Google\Protobuf\Internal\Message
{
    /**
     * Surname / Family name.
     *
     * Generated from protobuf field <code>string surname = 1;</code>
     */
    protected $surname = '';
    /**
     * Forename / Given name.
     *
     * Generated from protobuf field <code>string forename = 2;</code>
     */
    protected $forename = '';
    /**
     * Other names.
     *
     * Generated from protobuf field <code>repeated string otherNames = 3;</code>
     */
    private $otherNames;
    /**
     * Salutation or title.
     *
     * Generated from protobuf field <code>string salutation = 4;</code>
     */
    protected $salutation = '';
    /**
     * Suffix. For multiple suffixes, separate with spaces.
     *
     * Generated from protobuf field <code>string suffix = 5;</code>
     */
    protected $suffix = '';
    /**
     * If required, a string representing the user's preferred designation.
     *
     * Generated from protobuf field <code>string displayName = 6;</code>
     */
    protected $displayName = '';
    /**
     * Gender, as per government issued id.
     *
     * Generated from protobuf field <code>.io.Gender gender = 7;</code>
     */
    protected $gender = 0;
    /**
     * Date of birth.
     *
     * Generated from protobuf field <code>.io.Date dateOfBirth = 8;</code>
     */
    protected $dateOfBirth = null;
    /**
     * Email address.
     *
     * Generated from protobuf field <code>string emailAddress = 9;</code>
     */
    protected $emailAddress = '';
    /**
     * Telephone number. Enter in the format +{countryCode}{telephoneNumber} with no commas, spaces or other delimiters.
     *
     * Generated from protobuf field <code>string mobileNumber = 10;</code>
     */
    protected $mobileNumber = '';
    /**
     * External id. Not editable.
     *
     * Generated from protobuf field <code>string externalId = 11;</code>
     */
    protected $externalId = '';
    /**
     * Ids used for integration purpose. Key is enum of ConfigurationType (e.g. WEBHOOK, DB_MYSQL, ZOHO). Not Writable.
     *
     * Generated from protobuf field <code>map<int32, string> externalIds = 12;</code>
     */
    private $externalIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $surname
     *           Surname / Family name.
     *     @type string $forename
     *           Forename / Given name.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $otherNames
     *           Other names.
     *     @type string $salutation
     *           Salutation or title.
     *     @type string $suffix
     *           Suffix. For multiple suffixes, separate with spaces.
     *     @type string $displayName
     *           If required, a string representing the user's preferred designation.
     *     @type int $gender
     *           Gender, as per government issued id.
     *     @type \Io\Date $dateOfBirth
     *           Date of birth.
     *     @type string $emailAddress
     *           Email address.
     *     @type string $mobileNumber
     *           Telephone number. Enter in the format +{countryCode}{telephoneNumber} with no commas, spaces or other delimiters.
     *     @type string $externalId
     *           External id. Not editable.
     *     @type array|\Google\Protobuf\Internal\MapField $externalIds
     *           Ids used for integration purpose. Key is enum of ConfigurationType (e.g. WEBHOOK, DB_MYSQL, ZOHO). Not Writable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Personal::initOnce();
        parent::__construct($data);
    }

    /**
     * Surname / Family name.
     *
     * Generated from protobuf field <code>string surname = 1;</code>
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Surname / Family name.
     *
     * Generated from protobuf field <code>string surname = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSurname($var)
    {
        GPBUtil::checkString($var, True);
        $this->surname = $var;

        return $this;
    }

    /**
     * Forename / Given name.
     *
     * Generated from protobuf field <code>string forename = 2;</code>
     * @return string
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * Forename / Given name.
     *
     * Generated from protobuf field <code>string forename = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setForename($var)
    {
        GPBUtil::checkString($var, True);
        $this->forename = $var;

        return $this;
    }

    /**
     * Other names.
     *
     * Generated from protobuf field <code>repeated string otherNames = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOtherNames()
    {
        return $this->otherNames;
    }

    /**
     * Other names.
     *
     * Generated from protobuf field <code>repeated string otherNames = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOtherNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->otherNames = $arr;

        return $this;
    }

    /**
     * Salutation or title.
     *
     * Generated from protobuf field <code>string salutation = 4;</code>
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Salutation or title.
     *
     * Generated from protobuf field <code>string salutation = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSalutation($var)
    {
        GPBUtil::checkString($var, True);
        $this->salutation = $var;

        return $this;
    }

    /**
     * Suffix. For multiple suffixes, separate with spaces.
     *
     * Generated from protobuf field <code>string suffix = 5;</code>
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Suffix. For multiple suffixes, separate with spaces.
     *
     * Generated from protobuf field <code>string suffix = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->suffix = $var;

        return $this;
    }

    /**
     * If required, a string representing the user's preferred designation.
     *
     * Generated from protobuf field <code>string displayName = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * If required, a string representing the user's preferred designation.
     *
     * Generated from protobuf field <code>string displayName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayName = $var;

        return $this;
    }

    /**
     * Gender, as per government issued id.
     *
     * Generated from protobuf field <code>.io.Gender gender = 7;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Gender, as per government issued id.
     *
     * Generated from protobuf field <code>.io.Gender gender = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Io\Gender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Date of birth.
     *
     * Generated from protobuf field <code>.io.Date dateOfBirth = 8;</code>
     * @return \Io\Date|null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function hasDateOfBirth()
    {
        return isset($this->dateOfBirth);
    }

    public function clearDateOfBirth()
    {
        unset($this->dateOfBirth);
    }

    /**
     * Date of birth.
     *
     * Generated from protobuf field <code>.io.Date dateOfBirth = 8;</code>
     * @param \Io\Date $var
     * @return $this
     */
    public function setDateOfBirth($var)
    {
        GPBUtil::checkMessage($var, \Io\Date::class);
        $this->dateOfBirth = $var;

        return $this;
    }

    /**
     * Email address.
     *
     * Generated from protobuf field <code>string emailAddress = 9;</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Email address.
     *
     * Generated from protobuf field <code>string emailAddress = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->emailAddress = $var;

        return $this;
    }

    /**
     * Telephone number. Enter in the format +{countryCode}{telephoneNumber} with no commas, spaces or other delimiters.
     *
     * Generated from protobuf field <code>string mobileNumber = 10;</code>
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Telephone number. Enter in the format +{countryCode}{telephoneNumber} with no commas, spaces or other delimiters.
     *
     * Generated from protobuf field <code>string mobileNumber = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMobileNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobileNumber = $var;

        return $this;
    }

    /**
     * External id. Not editable.
     *
     * Generated from protobuf field <code>string externalId = 11;</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * External id. Not editable.
     *
     * Generated from protobuf field <code>string externalId = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->externalId = $var;

        return $this;
    }

    /**
     * Ids used for integration purpose. Key is enum of ConfigurationType (e.g. WEBHOOK, DB_MYSQL, ZOHO). Not Writable.
     *
     * Generated from protobuf field <code>map<int32, string> externalIds = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getExternalIds()
    {
        return $this->externalIds;
    }

    /**
     * Ids used for integration purpose. Key is enum of ConfigurationType (e.g. WEBHOOK, DB_MYSQL, ZOHO). Not Writable.
     *
     * Generated from protobuf field <code>map<int32, string> externalIds = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setExternalIds($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::STRING);
        $this->externalIds = $arr;

        return $this;
    }

}

