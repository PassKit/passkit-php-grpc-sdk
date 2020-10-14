<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/passenger.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of infant under 2 years not occupying a seat.
 *
 * Generated from protobuf message <code>flights.Infant</code>
 */
class Infant extends \Google\Protobuf\Internal\Message
{
    /**
     * Personal details of the infant.
     *
     * Generated from protobuf field <code>.io.Person infantDetails = 1;</code>
     */
    protected $infantDetails = null;
    /**
     * Optional identity details, only required if need to be rendered on the pass, or for analytics purposes.
     *
     * Generated from protobuf field <code>.flights.IdentityDetails identityDetails = 2;</code>
     */
    protected $identityDetails = null;
    /**
     * The barcode payload to be rendered on the infant boarding pass. If not provided, an IATA barcode will be compiled, based on the adult boarding pass barcode data.
     *
     * Generated from protobuf field <code>string barcodePayload = 3;</code>
     */
    protected $barcodePayload = '';
    /**
     * Optional conditional items for the infant barcode.  Not required if barcode payload is set.
     *
     * Generated from protobuf field <code>.flights.ConditionalItems conditionalItems = 4;</code>
     */
    protected $conditionalItems = null;
    /**
     * Optional additional barcode data. If PassKit are generating barcodes, airline use data (IATA item 4) to be included in the infant barcode.
     *
     * Generated from protobuf field <code>string barcodeAdditionalData = 5;</code>
     */
    protected $barcodeAdditionalData = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Person $infantDetails
     *           Personal details of the infant.
     *     @type \Flights\IdentityDetails $identityDetails
     *           Optional identity details, only required if need to be rendered on the pass, or for analytics purposes.
     *     @type string $barcodePayload
     *           The barcode payload to be rendered on the infant boarding pass. If not provided, an IATA barcode will be compiled, based on the adult boarding pass barcode data.
     *     @type \Flights\ConditionalItems $conditionalItems
     *           Optional conditional items for the infant barcode.  Not required if barcode payload is set.
     *     @type string $barcodeAdditionalData
     *           Optional additional barcode data. If PassKit are generating barcodes, airline use data (IATA item 4) to be included in the infant barcode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\Passenger::initOnce();
        parent::__construct($data);
    }

    /**
     * Personal details of the infant.
     *
     * Generated from protobuf field <code>.io.Person infantDetails = 1;</code>
     * @return \Io\Person
     */
    public function getInfantDetails()
    {
        return isset($this->infantDetails) ? $this->infantDetails : null;
    }

    public function hasInfantDetails()
    {
        return isset($this->infantDetails);
    }

    public function clearInfantDetails()
    {
        unset($this->infantDetails);
    }

    /**
     * Personal details of the infant.
     *
     * Generated from protobuf field <code>.io.Person infantDetails = 1;</code>
     * @param \Io\Person $var
     * @return $this
     */
    public function setInfantDetails($var)
    {
        GPBUtil::checkMessage($var, \Io\Person::class);
        $this->infantDetails = $var;

        return $this;
    }

    /**
     * Optional identity details, only required if need to be rendered on the pass, or for analytics purposes.
     *
     * Generated from protobuf field <code>.flights.IdentityDetails identityDetails = 2;</code>
     * @return \Flights\IdentityDetails
     */
    public function getIdentityDetails()
    {
        return isset($this->identityDetails) ? $this->identityDetails : null;
    }

    public function hasIdentityDetails()
    {
        return isset($this->identityDetails);
    }

    public function clearIdentityDetails()
    {
        unset($this->identityDetails);
    }

    /**
     * Optional identity details, only required if need to be rendered on the pass, or for analytics purposes.
     *
     * Generated from protobuf field <code>.flights.IdentityDetails identityDetails = 2;</code>
     * @param \Flights\IdentityDetails $var
     * @return $this
     */
    public function setIdentityDetails($var)
    {
        GPBUtil::checkMessage($var, \Flights\IdentityDetails::class);
        $this->identityDetails = $var;

        return $this;
    }

    /**
     * The barcode payload to be rendered on the infant boarding pass. If not provided, an IATA barcode will be compiled, based on the adult boarding pass barcode data.
     *
     * Generated from protobuf field <code>string barcodePayload = 3;</code>
     * @return string
     */
    public function getBarcodePayload()
    {
        return $this->barcodePayload;
    }

    /**
     * The barcode payload to be rendered on the infant boarding pass. If not provided, an IATA barcode will be compiled, based on the adult boarding pass barcode data.
     *
     * Generated from protobuf field <code>string barcodePayload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBarcodePayload($var)
    {
        GPBUtil::checkString($var, True);
        $this->barcodePayload = $var;

        return $this;
    }

    /**
     * Optional conditional items for the infant barcode.  Not required if barcode payload is set.
     *
     * Generated from protobuf field <code>.flights.ConditionalItems conditionalItems = 4;</code>
     * @return \Flights\ConditionalItems
     */
    public function getConditionalItems()
    {
        return isset($this->conditionalItems) ? $this->conditionalItems : null;
    }

    public function hasConditionalItems()
    {
        return isset($this->conditionalItems);
    }

    public function clearConditionalItems()
    {
        unset($this->conditionalItems);
    }

    /**
     * Optional conditional items for the infant barcode.  Not required if barcode payload is set.
     *
     * Generated from protobuf field <code>.flights.ConditionalItems conditionalItems = 4;</code>
     * @param \Flights\ConditionalItems $var
     * @return $this
     */
    public function setConditionalItems($var)
    {
        GPBUtil::checkMessage($var, \Flights\ConditionalItems::class);
        $this->conditionalItems = $var;

        return $this;
    }

    /**
     * Optional additional barcode data. If PassKit are generating barcodes, airline use data (IATA item 4) to be included in the infant barcode.
     *
     * Generated from protobuf field <code>string barcodeAdditionalData = 5;</code>
     * @return string
     */
    public function getBarcodeAdditionalData()
    {
        return $this->barcodeAdditionalData;
    }

    /**
     * Optional additional barcode data. If PassKit are generating barcodes, airline use data (IATA item 4) to be included in the infant barcode.
     *
     * Generated from protobuf field <code>string barcodeAdditionalData = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBarcodeAdditionalData($var)
    {
        GPBUtil::checkString($var, True);
        $this->barcodeAdditionalData = $var;

        return $this;
    }

}
