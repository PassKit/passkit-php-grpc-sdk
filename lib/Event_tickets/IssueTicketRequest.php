<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/event_tickets/ticket.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.IssueTicketRequest</code>
 */
class IssueTicketRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit generated ticketType id (22 characters).
     *
     * Generated from protobuf field <code>string ticketTypeId = 3;</code>
     */
    protected $ticketTypeId = '';
    /**
     * Optional user generated ticket number. Unique within the Production.
     *
     * Generated from protobuf field <code>string ticketNumber = 4;</code>
     */
    protected $ticketNumber = '';
    /**
     * Optional order / confirmation / booking code. Unique within the Production.
     *
     * Generated from protobuf field <code>string orderNumber = 5;</code>
     */
    protected $orderNumber = '';
    /**
     * Optional PassKit generated grouping ID. The system automatically groups tickets based by order number. Grouped tickets can be downloaded together from our multi-pass download pages. Not writable.
     *
     * Generated from protobuf field <code>string groupingId = 6;</code>
     */
    protected $groupingId = '';
    /**
     * The contents to embed in the barcode for this ticket. If not provided, the default value from the Ticket Type Pass Template Design is used.
     *
     * Generated from protobuf field <code>string barcodeContents = 7;</code>
     */
    protected $barcodeContents = '';
    /**
     * The seat info for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.Seat seatInfo = 8;</code>
     */
    protected $seatInfo = null;
    /**
     * The face value details for the ticket.
     *
     * Generated from protobuf field <code>.event_tickets.FaceValue faceValue = 9;</code>
     */
    protected $faceValue = null;
    /**
     * The ticket holder information. Stored encrypted in PassKit's database.
     *
     * Generated from protobuf field <code>.io.Person person = 10;</code>
     */
    protected $person = null;
    /**
     * Any other meta fields for the ticket that are not covered in the Ticket Object / API (i.e. you might want to capture ticket information specific to your process).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 11;</code>
     */
    private $metaData;
    /**
     * Indicates if the holder of the ticket opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 12;</code>
     */
    protected $optOut = false;
    /**
     * Holds the ticket status.
     *
     * Generated from protobuf field <code>.event_tickets.TicketStatus status = 13;</code>
     */
    protected $status = 0;
    /**
     * Optional field to set when the ticket expires. When the expiry date hits, it will automatically gray out the barcode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 14;</code>
     */
    protected $expiryDate = null;
    /**
     * Contains details about the redemption (if the ticket is in a redeemed state). Not writable; set by the redeem endpoint.
     *
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 15;</code>
     */
    protected $redemptionDetails = null;
    /**
     * Contains details about when the ticket was validated. Tickets can be validated multiple times. Not writable; set by the validate endpoint.
     *
     * Generated from protobuf field <code>repeated .event_tickets.ValidateDetails validateDetails = 16;</code>
     */
    private $validateDetails;
    /**
     * Optional Pass level overrides for proximity & images.
     *
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 17;</code>
     */
    protected $passOverrides = null;
    /**
     * Pass Metadata hold meta data about the pass like status, lifecycle, utm details and installation data. Cannot be set via the API.
     *
     * Generated from protobuf field <code>.io.Metadata passMetaData = 18;</code>
     */
    protected $passMetaData = null;
    /**
     * The date the ticket was created. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 19;</code>
     */
    protected $created = null;
    /**
     * The date the ticket last updated. Not writable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 20;</code>
     */
    protected $updated = null;
    protected $eventInfo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $eventId
     *           PassKit generated event id (22 characters). Required if event is not provided.
     *     @type \Event_tickets\EventLimitedFieldsRequest $event
     *           Event details. Event is auto generated if the record does not exist. Required if eventId is not provided.
     *     @type string $ticketTypeId
     *           PassKit generated ticketType id (22 characters).
     *     @type string $ticketNumber
     *           Optional user generated ticket number. Unique within the Production.
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
     *     @type array<\Event_tickets\ValidateDetails>|\Google\Protobuf\Internal\RepeatedField $validateDetails
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
     * PassKit generated event id (22 characters). Required if event is not provided.
     *
     * Generated from protobuf field <code>string eventId = 1;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->readOneof(1);
    }

    public function hasEventId()
    {
        return $this->hasOneof(1);
    }

    /**
     * PassKit generated event id (22 characters). Required if event is not provided.
     *
     * Generated from protobuf field <code>string eventId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Event details. Event is auto generated if the record does not exist. Required if eventId is not provided.
     *
     * Generated from protobuf field <code>.event_tickets.EventLimitedFieldsRequest event = 2;</code>
     * @return \Event_tickets\EventLimitedFieldsRequest|null
     */
    public function getEvent()
    {
        return $this->readOneof(2);
    }

    public function hasEvent()
    {
        return $this->hasOneof(2);
    }

    /**
     * Event details. Event is auto generated if the record does not exist. Required if eventId is not provided.
     *
     * Generated from protobuf field <code>.event_tickets.EventLimitedFieldsRequest event = 2;</code>
     * @param \Event_tickets\EventLimitedFieldsRequest $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Event_tickets\EventLimitedFieldsRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * PassKit generated ticketType id (22 characters).
     *
     * Generated from protobuf field <code>string ticketTypeId = 3;</code>
     * @return string
     */
    public function getTicketTypeId()
    {
        return $this->ticketTypeId;
    }

    /**
     * PassKit generated ticketType id (22 characters).
     *
     * Generated from protobuf field <code>string ticketTypeId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticketTypeId = $var;

        return $this;
    }

    /**
     * Optional user generated ticket number. Unique within the Production.
     *
     * Generated from protobuf field <code>string ticketNumber = 4;</code>
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Optional user generated ticket number. Unique within the Production.
     *
     * Generated from protobuf field <code>string ticketNumber = 4;</code>
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
     * Optional order / confirmation / booking code. Unique within the Production.
     *
     * Generated from protobuf field <code>string orderNumber = 5;</code>
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Optional order / confirmation / booking code. Unique within the Production.
     *
     * Generated from protobuf field <code>string orderNumber = 5;</code>
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
     * Generated from protobuf field <code>string groupingId = 6;</code>
     * @return string
     */
    public function getGroupingId()
    {
        return $this->groupingId;
    }

    /**
     * Optional PassKit generated grouping ID. The system automatically groups tickets based by order number. Grouped tickets can be downloaded together from our multi-pass download pages. Not writable.
     *
     * Generated from protobuf field <code>string groupingId = 6;</code>
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
     * Generated from protobuf field <code>string barcodeContents = 7;</code>
     * @return string
     */
    public function getBarcodeContents()
    {
        return $this->barcodeContents;
    }

    /**
     * The contents to embed in the barcode for this ticket. If not provided, the default value from the Ticket Type Pass Template Design is used.
     *
     * Generated from protobuf field <code>string barcodeContents = 7;</code>
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
     * Generated from protobuf field <code>.event_tickets.Seat seatInfo = 8;</code>
     * @return \Event_tickets\Seat|null
     */
    public function getSeatInfo()
    {
        return $this->seatInfo;
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
     * Generated from protobuf field <code>.event_tickets.Seat seatInfo = 8;</code>
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
     * Generated from protobuf field <code>.event_tickets.FaceValue faceValue = 9;</code>
     * @return \Event_tickets\FaceValue|null
     */
    public function getFaceValue()
    {
        return $this->faceValue;
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
     * Generated from protobuf field <code>.event_tickets.FaceValue faceValue = 9;</code>
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
     * Generated from protobuf field <code>.io.Person person = 10;</code>
     * @return \Io\Person|null
     */
    public function getPerson()
    {
        return $this->person;
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
     * Generated from protobuf field <code>.io.Person person = 10;</code>
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
     * Generated from protobuf field <code>map<string, string> metaData = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * Any other meta fields for the ticket that are not covered in the Ticket Object / API (i.e. you might want to capture ticket information specific to your process).
     *
     * Generated from protobuf field <code>map<string, string> metaData = 11;</code>
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
     * Generated from protobuf field <code>bool optOut = 12;</code>
     * @return bool
     */
    public function getOptOut()
    {
        return $this->optOut;
    }

    /**
     * Indicates if the holder of the ticket opted out to receive marketing promotions (defaults to false).
     *
     * Generated from protobuf field <code>bool optOut = 12;</code>
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
     * Generated from protobuf field <code>.event_tickets.TicketStatus status = 13;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Holds the ticket status.
     *
     * Generated from protobuf field <code>.event_tickets.TicketStatus status = 13;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 14;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiryDate = 14;</code>
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
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 15;</code>
     * @return \Event_tickets\RedemptionDetails|null
     */
    public function getRedemptionDetails()
    {
        return $this->redemptionDetails;
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
     * Generated from protobuf field <code>.event_tickets.RedemptionDetails redemptionDetails = 15;</code>
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
     * Generated from protobuf field <code>repeated .event_tickets.ValidateDetails validateDetails = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidateDetails()
    {
        return $this->validateDetails;
    }

    /**
     * Contains details about when the ticket was validated. Tickets can be validated multiple times. Not writable; set by the validate endpoint.
     *
     * Generated from protobuf field <code>repeated .event_tickets.ValidateDetails validateDetails = 16;</code>
     * @param array<\Event_tickets\ValidateDetails>|\Google\Protobuf\Internal\RepeatedField $var
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
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 17;</code>
     * @return \Io\PassOverrides|null
     */
    public function getPassOverrides()
    {
        return $this->passOverrides;
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
     * Generated from protobuf field <code>.io.PassOverrides passOverrides = 17;</code>
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
     * Generated from protobuf field <code>.io.Metadata passMetaData = 18;</code>
     * @return \Io\Metadata|null
     */
    public function getPassMetaData()
    {
        return $this->passMetaData;
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
     * Generated from protobuf field <code>.io.Metadata passMetaData = 18;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 19;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreated()
    {
        return $this->created;
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 19;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 20;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdated()
    {
        return $this->updated;
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 20;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventInfo()
    {
        return $this->whichOneof("eventInfo");
    }

}

