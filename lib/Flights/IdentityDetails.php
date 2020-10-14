<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/passenger.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of document used to identify the traveler's identity.
 *
 * Generated from protobuf message <code>flights.IdentityDetails</code>
 */
class IdentityDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of document used to validate the traveler's identity.
     *
     * Generated from protobuf field <code>.flights.IdentityDocument identityDocument = 1;</code>
     */
    protected $identityDocument = 0;
    /**
     * The two digit ISO 3166 country code of the country of the travel document issuing authority.
     *
     * Generated from protobuf field <code>string issuingCountry = 2;</code>
     */
    protected $issuingCountry = '';
    /**
     * The two digit ISO 3166 country code of the traveler's nationality.
     *
     * Generated from protobuf field <code>string nationality = 3;</code>
     */
    protected $nationality = '';
    /**
     * The number or other unique identifying reference of the traveler's document.
     *
     * Generated from protobuf field <code>string documentNumber = 4;</code>
     */
    protected $documentNumber = '';
    /**
     * The date of birth as marked on the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date dateOfBirth = 5;</code>
     */
    protected $dateOfBirth = null;
    /**
     * The gender as marked on the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Gender gender = 6;</code>
     */
    protected $gender = 0;
    /**
     * The issue date of the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date issuedDate = 7;</code>
     */
    protected $issuedDate = null;
    /**
     * The expiry date of the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date expiryDate = 8;</code>
     */
    protected $expiryDate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $identityDocument
     *           Type of document used to validate the traveler's identity.
     *     @type string $issuingCountry
     *           The two digit ISO 3166 country code of the country of the travel document issuing authority.
     *     @type string $nationality
     *           The two digit ISO 3166 country code of the traveler's nationality.
     *     @type string $documentNumber
     *           The number or other unique identifying reference of the traveler's document.
     *     @type \Io\Date $dateOfBirth
     *           The date of birth as marked on the traveler's identity document.
     *     @type int $gender
     *           The gender as marked on the traveler's identity document.
     *     @type \Io\Date $issuedDate
     *           The issue date of the traveler's identity document.
     *     @type \Io\Date $expiryDate
     *           The expiry date of the traveler's identity document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\Passenger::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of document used to validate the traveler's identity.
     *
     * Generated from protobuf field <code>.flights.IdentityDocument identityDocument = 1;</code>
     * @return int
     */
    public function getIdentityDocument()
    {
        return $this->identityDocument;
    }

    /**
     * Type of document used to validate the traveler's identity.
     *
     * Generated from protobuf field <code>.flights.IdentityDocument identityDocument = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIdentityDocument($var)
    {
        GPBUtil::checkEnum($var, \Flights\IdentityDocument::class);
        $this->identityDocument = $var;

        return $this;
    }

    /**
     * The two digit ISO 3166 country code of the country of the travel document issuing authority.
     *
     * Generated from protobuf field <code>string issuingCountry = 2;</code>
     * @return string
     */
    public function getIssuingCountry()
    {
        return $this->issuingCountry;
    }

    /**
     * The two digit ISO 3166 country code of the country of the travel document issuing authority.
     *
     * Generated from protobuf field <code>string issuingCountry = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuingCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuingCountry = $var;

        return $this;
    }

    /**
     * The two digit ISO 3166 country code of the traveler's nationality.
     *
     * Generated from protobuf field <code>string nationality = 3;</code>
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * The two digit ISO 3166 country code of the traveler's nationality.
     *
     * Generated from protobuf field <code>string nationality = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNationality($var)
    {
        GPBUtil::checkString($var, True);
        $this->nationality = $var;

        return $this;
    }

    /**
     * The number or other unique identifying reference of the traveler's document.
     *
     * Generated from protobuf field <code>string documentNumber = 4;</code>
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * The number or other unique identifying reference of the traveler's document.
     *
     * Generated from protobuf field <code>string documentNumber = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->documentNumber = $var;

        return $this;
    }

    /**
     * The date of birth as marked on the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date dateOfBirth = 5;</code>
     * @return \Io\Date
     */
    public function getDateOfBirth()
    {
        return isset($this->dateOfBirth) ? $this->dateOfBirth : null;
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
     * The date of birth as marked on the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date dateOfBirth = 5;</code>
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
     * The gender as marked on the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Gender gender = 6;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * The gender as marked on the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Gender gender = 6;</code>
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
     * The issue date of the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date issuedDate = 7;</code>
     * @return \Io\Date
     */
    public function getIssuedDate()
    {
        return isset($this->issuedDate) ? $this->issuedDate : null;
    }

    public function hasIssuedDate()
    {
        return isset($this->issuedDate);
    }

    public function clearIssuedDate()
    {
        unset($this->issuedDate);
    }

    /**
     * The issue date of the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date issuedDate = 7;</code>
     * @param \Io\Date $var
     * @return $this
     */
    public function setIssuedDate($var)
    {
        GPBUtil::checkMessage($var, \Io\Date::class);
        $this->issuedDate = $var;

        return $this;
    }

    /**
     * The expiry date of the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date expiryDate = 8;</code>
     * @return \Io\Date
     */
    public function getExpiryDate()
    {
        return isset($this->expiryDate) ? $this->expiryDate : null;
    }

    public function hasExpiryDate()
    {
        return isset($this->expiryDate);
    }

    public function clearExpiryDate()
    {
        unset($this->expiryDate);
    }

    /**
     * The expiry date of the traveler's identity document.
     *
     * Generated from protobuf field <code>.io.Date expiryDate = 8;</code>
     * @param \Io\Date $var
     * @return $this
     */
    public function setExpiryDate($var)
    {
        GPBUtil::checkMessage($var, \Io\Date::class);
        $this->expiryDate = $var;

        return $this;
    }

}
