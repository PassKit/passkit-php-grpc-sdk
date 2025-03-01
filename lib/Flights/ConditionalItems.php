<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/barcode.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Conditional items for the flight segment as described in IATA PSC Resolution 792.  Note: items supplied or derived through other objects (E.g. Frequent Flyer information) are not supplied here.
 *
 * Generated from protobuf message <code>flights.ConditionalItems</code>
 */
class ConditionalItems extends \Google\Protobuf\Internal\Message
{
    /**
     * Passenger Status as detailed in IATA PSC Resolution 792 Attachment 'C'. Note: all values other than 0 indicate that the passenger has checked in.
     *
     * Generated from protobuf field <code>.flights.PassengerDescription passengerDescription = 1;</code>
     */
    protected $passengerDescription = 0;
    /**
     * Source of checkin as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.Source checkInSource = 2;</code>
     */
    protected $checkInSource = 0;
    /**
     * Source of boarding pass issuance as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.Source boardingPassIssuanceSource = 3;</code>
     */
    protected $boardingPassIssuanceSource = 0;
    /**
     * Date of boarding pass issuance, local to the boarding point.
     *
     * Generated from protobuf field <code>.io.Date boardingPassIssueDate = 4;</code>
     */
    protected $boardingPassIssueDate = null;
    /**
     * Document type that the barcode represents.
     *
     * Generated from protobuf field <code>.flights.DocType documentType = 5;</code>
     */
    protected $documentType = 0;
    /**
     * IATA or ICAO designator of boarding pass issuer.
     *
     * Generated from protobuf field <code>string boardingPassIssuer = 6;</code>
     */
    protected $boardingPassIssuer = '';
    /**
     * This field allows carriers to populate baggage tag numbers and the number of consecutive bags. It contains 13 characters corresponding to the 10 digit bag tag number, as per IATA BCM specifications, Resolution 740 and 3 digits identifying the number of consecutive tags.\n1: leading digit – 0 for interline tag, 1 for fall-back tag, 2 for interline rush tag.\n2-4: carrier numeric code.\n5-10: carrier initial tag number (leading zeros).\n11-13: number of consecutive tags (allows for up to 999 tags).\nUp to 2 additional, non-consecutive tags can be added.
     *
     * Generated from protobuf field <code>repeated string baggageTagNumber = 7 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $baggageTagNumber;
    /**
     * Passenger security status. Note: in practical terms, this is always likely to be NOT_SELECTEE or TSA_PRECHECK since current DHS Pre-Departure Regulations only allow on-site printing of boarding passes. It is mandatory when US travel is involved.
     *
     * Generated from protobuf field <code>.flights.SelecteeIndicator selecteeIndicator = 8;</code>
     */
    protected $selecteeIndicator = 0;
    /**
     * International Documentation Verification status as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.InternationalDocVerification internationalDocVerification = 9;</code>
     */
    protected $internationalDocVerification = 0;
    /**
     * Industry Discount / Airline Discount codes. See IATA Recommended Practice 1788.
     *
     * Generated from protobuf field <code>.flights.IDADIndicator idadIndicator = 10;</code>
     */
    protected $idadIndicator = 0;
    /**
     * Passenger eligibility for Fast-track privileges.
     *
     * Generated from protobuf field <code>.flights.FastTrack fastTrack = 11;</code>
     */
    protected $fastTrack = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $passengerDescription
     *           Passenger Status as detailed in IATA PSC Resolution 792 Attachment 'C'. Note: all values other than 0 indicate that the passenger has checked in.
     *     @type int $checkInSource
     *           Source of checkin as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *     @type int $boardingPassIssuanceSource
     *           Source of boarding pass issuance as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *     @type \Io\Date $boardingPassIssueDate
     *           Date of boarding pass issuance, local to the boarding point.
     *     @type int $documentType
     *           Document type that the barcode represents.
     *     @type string $boardingPassIssuer
     *           IATA or ICAO designator of boarding pass issuer.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $baggageTagNumber
     *           This field allows carriers to populate baggage tag numbers and the number of consecutive bags. It contains 13 characters corresponding to the 10 digit bag tag number, as per IATA BCM specifications, Resolution 740 and 3 digits identifying the number of consecutive tags.\n1: leading digit – 0 for interline tag, 1 for fall-back tag, 2 for interline rush tag.\n2-4: carrier numeric code.\n5-10: carrier initial tag number (leading zeros).\n11-13: number of consecutive tags (allows for up to 999 tags).\nUp to 2 additional, non-consecutive tags can be added.
     *     @type int $selecteeIndicator
     *           Passenger security status. Note: in practical terms, this is always likely to be NOT_SELECTEE or TSA_PRECHECK since current DHS Pre-Departure Regulations only allow on-site printing of boarding passes. It is mandatory when US travel is involved.
     *     @type int $internationalDocVerification
     *           International Documentation Verification status as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *     @type int $idadIndicator
     *           Industry Discount / Airline Discount codes. See IATA Recommended Practice 1788.
     *     @type int $fastTrack
     *           Passenger eligibility for Fast-track privileges.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\Barcode::initOnce();
        parent::__construct($data);
    }

    /**
     * Passenger Status as detailed in IATA PSC Resolution 792 Attachment 'C'. Note: all values other than 0 indicate that the passenger has checked in.
     *
     * Generated from protobuf field <code>.flights.PassengerDescription passengerDescription = 1;</code>
     * @return int
     */
    public function getPassengerDescription()
    {
        return $this->passengerDescription;
    }

    /**
     * Passenger Status as detailed in IATA PSC Resolution 792 Attachment 'C'. Note: all values other than 0 indicate that the passenger has checked in.
     *
     * Generated from protobuf field <code>.flights.PassengerDescription passengerDescription = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPassengerDescription($var)
    {
        GPBUtil::checkEnum($var, \Flights\PassengerDescription::class);
        $this->passengerDescription = $var;

        return $this;
    }

    /**
     * Source of checkin as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.Source checkInSource = 2;</code>
     * @return int
     */
    public function getCheckInSource()
    {
        return $this->checkInSource;
    }

    /**
     * Source of checkin as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.Source checkInSource = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckInSource($var)
    {
        GPBUtil::checkEnum($var, \Flights\Source::class);
        $this->checkInSource = $var;

        return $this;
    }

    /**
     * Source of boarding pass issuance as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.Source boardingPassIssuanceSource = 3;</code>
     * @return int
     */
    public function getBoardingPassIssuanceSource()
    {
        return $this->boardingPassIssuanceSource;
    }

    /**
     * Source of boarding pass issuance as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.Source boardingPassIssuanceSource = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBoardingPassIssuanceSource($var)
    {
        GPBUtil::checkEnum($var, \Flights\Source::class);
        $this->boardingPassIssuanceSource = $var;

        return $this;
    }

    /**
     * Date of boarding pass issuance, local to the boarding point.
     *
     * Generated from protobuf field <code>.io.Date boardingPassIssueDate = 4;</code>
     * @return \Io\Date|null
     */
    public function getBoardingPassIssueDate()
    {
        return $this->boardingPassIssueDate;
    }

    public function hasBoardingPassIssueDate()
    {
        return isset($this->boardingPassIssueDate);
    }

    public function clearBoardingPassIssueDate()
    {
        unset($this->boardingPassIssueDate);
    }

    /**
     * Date of boarding pass issuance, local to the boarding point.
     *
     * Generated from protobuf field <code>.io.Date boardingPassIssueDate = 4;</code>
     * @param \Io\Date $var
     * @return $this
     */
    public function setBoardingPassIssueDate($var)
    {
        GPBUtil::checkMessage($var, \Io\Date::class);
        $this->boardingPassIssueDate = $var;

        return $this;
    }

    /**
     * Document type that the barcode represents.
     *
     * Generated from protobuf field <code>.flights.DocType documentType = 5;</code>
     * @return int
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Document type that the barcode represents.
     *
     * Generated from protobuf field <code>.flights.DocType documentType = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentType($var)
    {
        GPBUtil::checkEnum($var, \Flights\DocType::class);
        $this->documentType = $var;

        return $this;
    }

    /**
     * IATA or ICAO designator of boarding pass issuer.
     *
     * Generated from protobuf field <code>string boardingPassIssuer = 6;</code>
     * @return string
     */
    public function getBoardingPassIssuer()
    {
        return $this->boardingPassIssuer;
    }

    /**
     * IATA or ICAO designator of boarding pass issuer.
     *
     * Generated from protobuf field <code>string boardingPassIssuer = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBoardingPassIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->boardingPassIssuer = $var;

        return $this;
    }

    /**
     * This field allows carriers to populate baggage tag numbers and the number of consecutive bags. It contains 13 characters corresponding to the 10 digit bag tag number, as per IATA BCM specifications, Resolution 740 and 3 digits identifying the number of consecutive tags.\n1: leading digit – 0 for interline tag, 1 for fall-back tag, 2 for interline rush tag.\n2-4: carrier numeric code.\n5-10: carrier initial tag number (leading zeros).\n11-13: number of consecutive tags (allows for up to 999 tags).\nUp to 2 additional, non-consecutive tags can be added.
     *
     * Generated from protobuf field <code>repeated string baggageTagNumber = 7 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBaggageTagNumber()
    {
        return $this->baggageTagNumber;
    }

    /**
     * This field allows carriers to populate baggage tag numbers and the number of consecutive bags. It contains 13 characters corresponding to the 10 digit bag tag number, as per IATA BCM specifications, Resolution 740 and 3 digits identifying the number of consecutive tags.\n1: leading digit – 0 for interline tag, 1 for fall-back tag, 2 for interline rush tag.\n2-4: carrier numeric code.\n5-10: carrier initial tag number (leading zeros).\n11-13: number of consecutive tags (allows for up to 999 tags).\nUp to 2 additional, non-consecutive tags can be added.
     *
     * Generated from protobuf field <code>repeated string baggageTagNumber = 7 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBaggageTagNumber($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->baggageTagNumber = $arr;

        return $this;
    }

    /**
     * Passenger security status. Note: in practical terms, this is always likely to be NOT_SELECTEE or TSA_PRECHECK since current DHS Pre-Departure Regulations only allow on-site printing of boarding passes. It is mandatory when US travel is involved.
     *
     * Generated from protobuf field <code>.flights.SelecteeIndicator selecteeIndicator = 8;</code>
     * @return int
     */
    public function getSelecteeIndicator()
    {
        return $this->selecteeIndicator;
    }

    /**
     * Passenger security status. Note: in practical terms, this is always likely to be NOT_SELECTEE or TSA_PRECHECK since current DHS Pre-Departure Regulations only allow on-site printing of boarding passes. It is mandatory when US travel is involved.
     *
     * Generated from protobuf field <code>.flights.SelecteeIndicator selecteeIndicator = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSelecteeIndicator($var)
    {
        GPBUtil::checkEnum($var, \Flights\SelecteeIndicator::class);
        $this->selecteeIndicator = $var;

        return $this;
    }

    /**
     * International Documentation Verification status as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.InternationalDocVerification internationalDocVerification = 9;</code>
     * @return int
     */
    public function getInternationalDocVerification()
    {
        return $this->internationalDocVerification;
    }

    /**
     * International Documentation Verification status as detailed in IATA PSC Resolution 792 Attachment 'C'.
     *
     * Generated from protobuf field <code>.flights.InternationalDocVerification internationalDocVerification = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setInternationalDocVerification($var)
    {
        GPBUtil::checkEnum($var, \Flights\InternationalDocVerification::class);
        $this->internationalDocVerification = $var;

        return $this;
    }

    /**
     * Industry Discount / Airline Discount codes. See IATA Recommended Practice 1788.
     *
     * Generated from protobuf field <code>.flights.IDADIndicator idadIndicator = 10;</code>
     * @return int
     */
    public function getIdadIndicator()
    {
        return $this->idadIndicator;
    }

    /**
     * Industry Discount / Airline Discount codes. See IATA Recommended Practice 1788.
     *
     * Generated from protobuf field <code>.flights.IDADIndicator idadIndicator = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIdadIndicator($var)
    {
        GPBUtil::checkEnum($var, \Flights\IDADIndicator::class);
        $this->idadIndicator = $var;

        return $this;
    }

    /**
     * Passenger eligibility for Fast-track privileges.
     *
     * Generated from protobuf field <code>.flights.FastTrack fastTrack = 11;</code>
     * @return int
     */
    public function getFastTrack()
    {
        return $this->fastTrack;
    }

    /**
     * Passenger eligibility for Fast-track privileges.
     *
     * Generated from protobuf field <code>.flights.FastTrack fastTrack = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setFastTrack($var)
    {
        GPBUtil::checkEnum($var, \Flights\FastTrack::class);
        $this->fastTrack = $var;

        return $this;
    }

}

