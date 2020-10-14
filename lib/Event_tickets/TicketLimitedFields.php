<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.TicketLimitedFields</code>
 */
class TicketLimitedFields extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated ticket id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * User generated ticket number. Unique within the Production.
     *
     * Generated from protobuf field <code>string ticketNumber = 2;</code>
     */
    protected $ticketNumber = '';
    /**
     * The production information.
     *
     * Generated from protobuf field <code>.event_tickets.ProductionLimitedFieldsResponse production = 3;</code>
     */
    protected $production = null;
    /**
     * The event information. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.EventLimitedFieldsResponse event = 4;</code>
     */
    protected $event = null;
    /**
     * Venue information. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.VenueLimitedFieldsResponse venue = 5;</code>
     */
    protected $venue = null;
    /**
     * The ticket type the ticket is for. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.TicketTypeLimitedFields ticketType = 6;</code>
     */
    protected $ticketType = null;
    /**
     * Optional order / confirmation / booking code. Unique within the Production.
     *
     * Generated from protobuf field <code>string orderNumber = 7;</code>
     */
    protected $orderNumber = '';
    /**
     * Optional PassKit generated grouping ID. The system automatically groups tickets based by order number. Grouped tickets can be downloaded together from our multi-pass download pages. Not writable.
     *
     * Generated from protobuf field <code>string groupingId = 8;</code>
     */
    protected $groupingId = '';
    /**
     * The contents to embed in the barcode for this ticket. If not provided, the default value from the Ticket Type Pass Template Design is used.
     *
     * Generated from protobuf field <code>string barcodeContents = 9;</code>
     */
    protected $barcodeContents = '';
    /**
     * The seat info for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.Seat seatInfo = 10;</code>
     */
    protected $seatInfo = null;
    /**
     * The face value details for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.FaceValue faceValue = 11;</code>
     */
    protected $faceValue = null;
    /**
     * The ticket holder information. Stored encrypted in PassKit's database.
     *
     * Generated from protobuf field <code>.io.Person person = 12;</code>
     */
    protected $person = null;
    /**
     * Any other meta fields for the ticket that are not covered in the Ticket Object / API (i.e. you might want to capture ticket information specific to your process).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 13;</code>
     */
    private $metaData;
    /**
     * Indicates if the holder of the ticket opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 14;</code>
     */
    protected $optOut = false;
    /**
     * Holds the ticket status.
     *
     * Generated from protobuf field <code>.event_tickets.TicketStatus status = 15;</code>
     */
    protected $status = 0;
    /**
     * Optional field to set when the ticket expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 16;</code>
     */
    protected $expiryDate = null;
    /**
     * Contains details about the redemption (if the ticket is in a redeemed state). Not writable; set by the redeem endpoint.
     *
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 17;</code>
     */
    protected $redemptionDetails = null;
    /**
     * Contains details about when the ticket was validated. Tickets can be validated multiple times. Not writable; set by the validate endpoint.
     *
     * Generated from protobuf field <code>repeated .event_tickets.ValidateDetails validateDetails = 18;</code>
     */
    private $validateDetails;
    /**
     * Optional Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 19;</code>
     */
    protected $passOverrides = null;
    /**
     * Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data. Cannot be set via the API.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 20;</code>
     */
    protected $passMetaData = null;
    /**
     * The date the ticket was created. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 21;</code>
     */
    protected $created = null;
    /**
     * The date the ticket last updated. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 22;</code>
     */
    protected $updated = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           PassKit generated ticket id (22 characters).
     *     @type string $ticketNumber
     *           User generated ticket number. Unique within the Production.
     *     @type \Event_tickets\ProductionLimitedFieldsResponse $production
     *           The production information.
     *     @type \Event_tickets\EventLimitedFieldsResponse $event
     *           The event information. Only specific fields are returned.
     *     @type \Event_tickets\VenueLimitedFieldsResponse $venue
     *           Venue information. Only specific fields are returned.
     *     @type \Event_tickets\TicketTypeLimitedFields $ticketType
     *           The ticket type the ticket is for. Only specific fields are returned.
     *     @type string $orderNumber
     *           Optional order / confirmation / booking code. Unique within the Production.
     *     @type string $groupingId
     *           Optional PassKit generated grouping ID. The system automatically groups tickets based by order number. Grouped tickets can be downloaded together from our multi-pass download pages. Not writable.
     *     @type string $barcodeContents
     *           The contents to embed in the barcode for this ticket. If not provided, the default value from the Ticket Type Pass Template Design is used.
     *     @type \Event_tickets\Seat $seatInfo
     *           The seat info for the ticket.
     *     @type \Event_tickets\FaceValue $faceValue
     *           The face value details for the ticket.
     *     @type \Io\Person $person
     *           The ticket holder information. Stored encrypted in PassKit's database.
     *     @type array|\Google\Protobuf\Internal\MapField $metaData
     *           Any other meta fields for the ticket that are not covered in the Ticket Object / API (i.e. you might want to capture ticket information specific to your process).
     *     @type bool $optOut
     *           Indicates if the holder of the ticket opted out to receive marketing promotions (defaults to false).
     *     @type int $status
     *           Holds the ticket status.
     *     @type \Google\Protobuf\Timestamp $expiryDate
     *           Optional field to set when the ticket expires. When the expiry date hits, it will automatically gray out the barcode.
     *     @type \Event_tickets\RedemptionDetails $redemptionDetails
     *           Contains details about the redemption (if the ticket is in a redeemed state). Not writable; set by the redeem endpoint.
     *     @type \Event_tickets\ValidateDetails[]|\Google\Protobuf\Internal\RepeatedField $validateDetails
     *           Contains details about when the ticket was validated. Tickets can be validated multiple times. Not writable; set by the validate endpoint.
     *     @type \Io\PassOverrides $passOverrides
     *           Optional Pass level overrides for proximity & images.
     *     @type \Io\Metadata $passMetaData
     *           Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data. Cannot be set via the API.
     *     @type \Google\Protobuf\Timestamp $created
     *           The date the ticket was created. Not writable.
     *     @type \Google\Protobuf\Timestamp $updated
     *           The date the ticket last updated. Not writable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Ticket::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit generated ticket id (22 characters).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * PassKit generated ticket id (22 characters).
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
     * User generated ticket number. Unique within the Production.
     *
     * Generated from protobuf field <code>string ticketNumber = 2;</code>
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * User generated ticket number. Unique within the Production.
     *
     * Generated from protobuf field <code>string ticketNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticketNumber = $var;

        return $this;
    }

    /**
     * The production information.
     *
     * Generated from protobuf field <code>.event_tickets.ProductionLimitedFieldsResponse production = 3;</code>
     * @return \Event_tickets\ProductionLimitedFieldsResponse
     */
    public function getProduction()
    {
        return isset($this->production) ? $this->production : null;
    }

    public function hasProduction()
    {
        return isset($this->production);
    }

    public function clearProduction()
    {
        unset($this->production);
    }

    /**
     * The production information.
     *
     * Generated from protobuf field <code>.event_tickets.ProductionLimitedFieldsResponse production = 3;</code>
     * @param \Event_tickets\ProductionLimitedFieldsResponse $var
     * @return $this
     */
    public function setProduction($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\ProductionLimitedFieldsResponse::class);
        $this->production = $var;

        return $this;
    }

    /**
     * The event information. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.EventLimitedFieldsResponse event = 4;</code>
     * @return \Event_tickets\EventLimitedFieldsResponse
     */
    public function getEvent()
    {
        return isset($this->event) ? $this->event : null;
    }

    public function hasEvent()
    {
        return isset($this->event);
    }

    public function clearEvent()
    {
        unset($this->event);
    }

    /**
     * The event information. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.EventLimitedFieldsResponse event = 4;</code>
     * @param \Event_tickets\EventLimitedFieldsResponse $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\EventLimitedFieldsResponse::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Venue information. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.VenueLimitedFieldsResponse venue = 5;</code>
     * @return \Event_tickets\VenueLimitedFieldsResponse
     */
    public function getVenue()
    {
        return isset($this->venue) ? $this->venue : null;
    }

    public function hasVenue()
    {
        return isset($this->venue);
    }

    public function clearVenue()
    {
        unset($this->venue);
    }

    /**
     * Venue information. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.VenueLimitedFieldsResponse venue = 5;</code>
     * @param \Event_tickets\VenueLimitedFieldsResponse $var
     * @return $this
     */
    public function setVenue($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\VenueLimitedFieldsResponse::class);
        $this->venue = $var;

        return $this;
    }

    /**
     * The ticket type the ticket is for. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.TicketTypeLimitedFields ticketType = 6;</code>
     * @return \Event_tickets\TicketTypeLimitedFields
     */
    public function getTicketType()
    {
        return isset($this->ticketType) ? $this->ticketType : null;
    }

    public function hasTicketType()
    {
        return isset($this->ticketType);
    }

    public function clearTicketType()
    {
        unset($this->ticketType);
    }

    /**
     * The ticket type the ticket is for. Only specific fields are returned.
     *
     * Generated from protobuf field <code>.event_tickets.TicketTypeLimitedFields ticketType = 6;</code>
     * @param \Event_tickets\TicketTypeLimitedFields $var
     * @return $this
     */
    public function setTicketType($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\TicketTypeLimitedFields::class);
        $this->ticketType = $var;

        return $this;
    }

    /**
     * Optional order / confirmation / booking code. Unique within the Production.
     *
     * Generated from protobuf field <code>string orderNumber = 7;</code>
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Optional order / confirmation / booking code. Unique within the Production.
     *
     * Generated from protobuf field <code>string orderNumber = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->orderNumber = $var;

        return $this;
    }

    /**
     * Optional PassKit generated grouping ID. The system automatically groups tickets based by order number. Grouped tickets can be downloaded together from our multi-pass download pages. Not writable.
     *
     * Generated from protobuf field <code>string groupingId = 8;</code>
     * @return string
     */
    public function getGroupingId()
    {
        return $this->groupingId;
    }

    /**
     * Optional PassKit generated grouping ID. The system automatically groups tickets based by order number. Grouped tickets can be downloaded together from our multi-pass download pages. Not writable.
     *
     * Generated from protobuf field <code>string groupingId = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupingId = $var;

        return $this;
    }

    /**
     * The contents to embed in the barcode for this ticket. If not provided, the default value from the Ticket Type Pass Template Design is used.
     *
     * Generated from protobuf field <code>string barcodeContents = 9;</code>
     * @return string
     */
    public function getBarcodeContents()
    {
        return $this->barcodeContents;
    }

    /**
     * The contents to embed in the barcode for this ticket. If not provided, the default value from the Ticket Type Pass Template Design is used.
     *
     * Generated from protobuf field <code>string barcodeContents = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBarcodeContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->barcodeContents = $var;

        return $this;
    }

    /**
     * The seat info for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.Seat seatInfo = 10;</code>
     * @return \Event_tickets\Seat
     */
    public function getSeatInfo()
    {
        return isset($this->seatInfo) ? $this->seatInfo : null;
    }

    public function hasSeatInfo()
    {
        return isset($this->seatInfo);
    }

    public function clearSeatInfo()
    {
        unset($this->seatInfo);
    }

    /**
     * The seat info for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.Seat seatInfo = 10;</code>
     * @param \Event_tickets\Seat $var
     * @return $this
     */
    public function setSeatInfo($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\Seat::class);
        $this->seatInfo = $var;

        return $this;
    }

    /**
     * The face value details for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.FaceValue faceValue = 11;</code>
     * @return \Event_tickets\FaceValue
     */
    public function getFaceValue()
    {
        return isset($this->faceValue) ? $this->faceValue : null;
    }

    public function hasFaceValue()
    {
        return isset($this->faceValue);
    }

    public function clearFaceValue()
    {
        unset($this->faceValue);
    }

    /**
     * The face value details for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.FaceValue faceValue = 11;</code>
     * @param \Event_tickets\FaceValue $var
     * @return $this
     */
    public function setFaceValue($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\FaceValue::class);
        $this->faceValue = $var;

        return $this;
    }

    /**
     * The ticket holder information. Stored encrypted in PassKit's database.
     *
     * Generated from protobuf field <code>.io.Person person = 12;</code>
     * @return \Io\Person
     */
    public function getPerson()
    {
        return isset($this->person) ? $this->person : null;
    }

    public function hasPerson()
    {
        return isset($this->person);
    }

    public function clearPerson()
    {
        unset($this->person);
    }

    /**
     * The ticket holder information. Stored encrypted in PassKit's database.
     *
     * Generated from protobuf field <code>.io.Person person = 12;</code>
     * @param \Io\Person $var
     * @return $this
     */
    public function setPerson($var)
    {
        GPBUtil::checkMessage($var, \Io\Person::class);
        $this->person = $var;

        return $this;
    }

    /**
     * Any other meta fields for the ticket that are not covered in the Ticket Object / API (i.e. you might want to capture ticket information specific to your process).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * Any other meta fields for the ticket that are not covered in the Ticket Object / API (i.e. you might want to capture ticket information specific to your process).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetaData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metaData = $arr;

        return $this;
    }

    /**
     * Indicates if the holder of the ticket opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 14;</code>
     * @return bool
     */
    public function getOptOut()
    {
        return $this->optOut;
    }

    /**
     * Indicates if the holder of the ticket opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setOptOut($var)
    {
        GPBUtil::checkBool($var);
        $this->optOut = $var;

        return $this;
    }

    /**
     * Holds the ticket status.
     *
     * Generated from protobuf field <code>.event_tickets.TicketStatus status = 15;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Holds the ticket status.
     *
     * Generated from protobuf field <code>.event_tickets.TicketStatus status = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Event_tickets\TicketStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Optional field to set when the ticket expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 16;</code>
     * @return \Google\Protobuf\Timestamp
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
     * Optional field to set when the ticket expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiryDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiryDate = $var;

        return $this;
    }

    /**
     * Contains details about the redemption (if the ticket is in a redeemed state). Not writable; set by the redeem endpoint.
     *
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 17;</code>
     * @return \Event_tickets\RedemptionDetails
     */
    public function getRedemptionDetails()
    {
        return isset($this->redemptionDetails) ? $this->redemptionDetails : null;
    }

    public function hasRedemptionDetails()
    {
        return isset($this->redemptionDetails);
    }

    public function clearRedemptionDetails()
    {
        unset($this->redemptionDetails);
    }

    /**
     * Contains details about the redemption (if the ticket is in a redeemed state). Not writable; set by the redeem endpoint.
     *
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 17;</code>
     * @param \Event_tickets\RedemptionDetails $var
     * @return $this
     */
    public function setRedemptionDetails($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\RedemptionDetails::class);
        $this->redemptionDetails = $var;

        return $this;
    }

    /**
     * Contains details about when the ticket was validated. Tickets can be validated multiple times. Not writable; set by the validate endpoint.
     *
     * Generated from protobuf field <code>repeated .event_tickets.ValidateDetails validateDetails = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidateDetails()
    {
        return $this->validateDetails;
    }

    /**
     * Contains details about when the ticket was validated. Tickets can be validated multiple times. Not writable; set by the validate endpoint.
     *
     * Generated from protobuf field <code>repeated .event_tickets.ValidateDetails validateDetails = 18;</code>
     * @param \Event_tickets\ValidateDetails[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidateDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Event_tickets\ValidateDetails::class);
        $this->validateDetails = $arr;

        return $this;
    }

    /**
     * Optional Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 19;</code>
     * @return \Io\PassOverrides
     */
    public function getPassOverrides()
    {
        return isset($this->passOverrides) ? $this->passOverrides : null;
    }

    public function hasPassOverrides()
    {
        return isset($this->passOverrides);
    }

    public function clearPassOverrides()
    {
        unset($this->passOverrides);
    }

    /**
     * Optional Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 19;</code>
     * @param \Io\PassOverrides $var
     * @return $this
     */
    public function setPassOverrides($var)
    {
        GPBUtil::checkMessage($var, \Io\PassOverrides::class);
        $this->passOverrides = $var;

        return $this;
    }

    /**
     * Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data. Cannot be set via the API.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 20;</code>
     * @return \Io\Metadata
     */
    public function getPassMetaData()
    {
        return isset($this->passMetaData) ? $this->passMetaData : null;
    }

    public function hasPassMetaData()
    {
        return isset($this->passMetaData);
    }

    public function clearPassMetaData()
    {
        unset($this->passMetaData);
    }

    /**
     * Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data. Cannot be set via the API.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 20;</code>
     * @param \Io\Metadata $var
     * @return $this
     */
    public function setPassMetaData($var)
    {
        GPBUtil::checkMessage($var, \Io\Metadata::class);
        $this->passMetaData = $var;

        return $this;
    }

    /**
     * The date the ticket was created. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 21;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreated()
    {
        return isset($this->created) ? $this->created : null;
    }

    public function hasCreated()
    {
        return isset($this->created);
    }

    public function clearCreated()
    {
        unset($this->created);
    }

    /**
     * The date the ticket was created. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created = $var;

        return $this;
    }

    /**
     * The date the ticket last updated. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 22;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdated()
    {
        return isset($this->updated) ? $this->updated : null;
    }

    public function hasUpdated()
    {
        return isset($this->updated);
    }

    public function clearUpdated()
    {
        unset($this->updated);
    }

    /**
     * The date the ticket last updated. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 22;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated = $var;

        return $this;
    }

}

