<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/event_tickets/venue.proto

namespace Event_tickets;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_tickets.EventUrls</code>
 */
class EventUrls extends \Google\Protobuf\Internal\Message
{
    /**
     * A URL that launches the user into the issuer's flow for selling their current ticket. We recommend providing as deep a link as possible into the sale flow.
     *
     * Generated from protobuf field <code>string sellURL = 1;</code>
     */
    protected $sellURL = '';
    /**
     * A URL that launches the user into the issuer's flow for transferring the current ticket. We recommend providing as deep a link as possible into the transfer flow.
     *
     * Generated from protobuf field <code>string transferURL = 2;</code>
     */
    protected $transferURL = '';
    /**
     * A URL that links out to the bag policy of the venue.
     *
     * Generated from protobuf field <code>string bagPolicyURL = 3;</code>
     */
    protected $bagPolicyURL = '';
    /**
     * A URL that links out to the food ordering page for the venue. This can be in-seat food delivery, pre-order for pickup at a vendor, or any other appropriate food ordering service.
     *
     * Generated from protobuf field <code>string orderFoodURL = 4;</code>
     */
    protected $orderFoodURL = '';
    /**
     * A URL that links to order merchandise for the specific event. This can be a ship-to-home ecommerce site, a pre-order to pickup at the venue, or any other appropriate merchandise flow.
     *
     * Generated from protobuf field <code>string merchandiseURL = 5;</code>
     */
    protected $merchandiseURL = '';
    /**
     * A URL that links to any documentation you have about public or private transit to the venue.
     *
     * Generated from protobuf field <code>string transitInformationURL = 6;</code>
     */
    protected $transitInformationURL = '';
    /**
     * A URL that links to any information you have about parking.
     *
     * Generated from protobuf field <code>string parkingInformationURL = 7;</code>
     */
    protected $parkingInformationURL = '';
    /**
     * A URL that links to any content you have about getting to the venue.
     *
     * Generated from protobuf field <code>string directionsInformationURL = 8;</code>
     */
    protected $directionsInformationURL = '';
    /**
     * A URL that links to your or the venue's accessibility content.
     *
     * Generated from protobuf field <code>string accessibilityURL = 9;</code>
     */
    protected $accessibilityURL = '';
    /**
     * A URL that links to your experience to buy or access pre-paid parking, or general parking information.
     *
     * Generated from protobuf field <code>string purchaseParkingURL = 10;</code>
     */
    protected $purchaseParkingURL = '';
    /**
     * A URL that can link to experiences that you can add on to your ticket (e.g. loaded value, upgrades, etc.), or access your existing pre-purchased or pre-loaded add-on experiences, including any necessary links to QR or barcodes to access the experience.
     *
     * Generated from protobuf field <code>string addOnURL = 11;</code>
     */
    protected $addOnURL = '';
    /**
     * The preferred email address to contact the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenueEmail = 12;</code>
     */
    protected $contactVenueEmail = '';
    /**
     * A URL that links the user to the website of the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenueWebsite = 13;</code>
     */
    protected $contactVenueWebsite = '';
    /**
     * The phone number that can be used to contact the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenuePhoneNumber = 14;</code>
     */
    protected $contactVenuePhoneNumber = '';
    /**
     * A URL to a portal with additional event information. If a deep link is required, provide it in the Seat Information object which will override a value in the Venue object.
     *
     * Generated from protobuf field <code>string portalUrl = 15;</code>
     */
    protected $portalUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sellURL
     *           A URL that launches the user into the issuer's flow for selling their current ticket. We recommend providing as deep a link as possible into the sale flow.
     *     @type string $transferURL
     *           A URL that launches the user into the issuer's flow for transferring the current ticket. We recommend providing as deep a link as possible into the transfer flow.
     *     @type string $bagPolicyURL
     *           A URL that links out to the bag policy of the venue.
     *     @type string $orderFoodURL
     *           A URL that links out to the food ordering page for the venue. This can be in-seat food delivery, pre-order for pickup at a vendor, or any other appropriate food ordering service.
     *     @type string $merchandiseURL
     *           A URL that links to order merchandise for the specific event. This can be a ship-to-home ecommerce site, a pre-order to pickup at the venue, or any other appropriate merchandise flow.
     *     @type string $transitInformationURL
     *           A URL that links to any documentation you have about public or private transit to the venue.
     *     @type string $parkingInformationURL
     *           A URL that links to any information you have about parking.
     *     @type string $directionsInformationURL
     *           A URL that links to any content you have about getting to the venue.
     *     @type string $accessibilityURL
     *           A URL that links to your or the venue's accessibility content.
     *     @type string $purchaseParkingURL
     *           A URL that links to your experience to buy or access pre-paid parking, or general parking information.
     *     @type string $addOnURL
     *           A URL that can link to experiences that you can add on to your ticket (e.g. loaded value, upgrades, etc.), or access your existing pre-purchased or pre-loaded add-on experiences, including any necessary links to QR or barcodes to access the experience.
     *     @type string $contactVenueEmail
     *           The preferred email address to contact the venue, event, or issuer.
     *     @type string $contactVenueWebsite
     *           A URL that links the user to the website of the venue, event, or issuer.
     *     @type string $contactVenuePhoneNumber
     *           The phone number that can be used to contact the venue, event, or issuer.
     *     @type string $portalUrl
     *           A URL to a portal with additional event information. If a deep link is required, provide it in the Seat Information object which will override a value in the Venue object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\EventTickets\Venue::initOnce();
        parent::__construct($data);
    }

    /**
     * A URL that launches the user into the issuer's flow for selling their current ticket. We recommend providing as deep a link as possible into the sale flow.
     *
     * Generated from protobuf field <code>string sellURL = 1;</code>
     * @return string
     */
    public function getSellURL()
    {
        return $this->sellURL;
    }

    /**
     * A URL that launches the user into the issuer's flow for selling their current ticket. We recommend providing as deep a link as possible into the sale flow.
     *
     * Generated from protobuf field <code>string sellURL = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSellURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->sellURL = $var;

        return $this;
    }

    /**
     * A URL that launches the user into the issuer's flow for transferring the current ticket. We recommend providing as deep a link as possible into the transfer flow.
     *
     * Generated from protobuf field <code>string transferURL = 2;</code>
     * @return string
     */
    public function getTransferURL()
    {
        return $this->transferURL;
    }

    /**
     * A URL that launches the user into the issuer's flow for transferring the current ticket. We recommend providing as deep a link as possible into the transfer flow.
     *
     * Generated from protobuf field <code>string transferURL = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransferURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->transferURL = $var;

        return $this;
    }

    /**
     * A URL that links out to the bag policy of the venue.
     *
     * Generated from protobuf field <code>string bagPolicyURL = 3;</code>
     * @return string
     */
    public function getBagPolicyURL()
    {
        return $this->bagPolicyURL;
    }

    /**
     * A URL that links out to the bag policy of the venue.
     *
     * Generated from protobuf field <code>string bagPolicyURL = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBagPolicyURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->bagPolicyURL = $var;

        return $this;
    }

    /**
     * A URL that links out to the food ordering page for the venue. This can be in-seat food delivery, pre-order for pickup at a vendor, or any other appropriate food ordering service.
     *
     * Generated from protobuf field <code>string orderFoodURL = 4;</code>
     * @return string
     */
    public function getOrderFoodURL()
    {
        return $this->orderFoodURL;
    }

    /**
     * A URL that links out to the food ordering page for the venue. This can be in-seat food delivery, pre-order for pickup at a vendor, or any other appropriate food ordering service.
     *
     * Generated from protobuf field <code>string orderFoodURL = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderFoodURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->orderFoodURL = $var;

        return $this;
    }

    /**
     * A URL that links to order merchandise for the specific event. This can be a ship-to-home ecommerce site, a pre-order to pickup at the venue, or any other appropriate merchandise flow.
     *
     * Generated from protobuf field <code>string merchandiseURL = 5;</code>
     * @return string
     */
    public function getMerchandiseURL()
    {
        return $this->merchandiseURL;
    }

    /**
     * A URL that links to order merchandise for the specific event. This can be a ship-to-home ecommerce site, a pre-order to pickup at the venue, or any other appropriate merchandise flow.
     *
     * Generated from protobuf field <code>string merchandiseURL = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMerchandiseURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->merchandiseURL = $var;

        return $this;
    }

    /**
     * A URL that links to any documentation you have about public or private transit to the venue.
     *
     * Generated from protobuf field <code>string transitInformationURL = 6;</code>
     * @return string
     */
    public function getTransitInformationURL()
    {
        return $this->transitInformationURL;
    }

    /**
     * A URL that links to any documentation you have about public or private transit to the venue.
     *
     * Generated from protobuf field <code>string transitInformationURL = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTransitInformationURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->transitInformationURL = $var;

        return $this;
    }

    /**
     * A URL that links to any information you have about parking.
     *
     * Generated from protobuf field <code>string parkingInformationURL = 7;</code>
     * @return string
     */
    public function getParkingInformationURL()
    {
        return $this->parkingInformationURL;
    }

    /**
     * A URL that links to any information you have about parking.
     *
     * Generated from protobuf field <code>string parkingInformationURL = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setParkingInformationURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->parkingInformationURL = $var;

        return $this;
    }

    /**
     * A URL that links to any content you have about getting to the venue.
     *
     * Generated from protobuf field <code>string directionsInformationURL = 8;</code>
     * @return string
     */
    public function getDirectionsInformationURL()
    {
        return $this->directionsInformationURL;
    }

    /**
     * A URL that links to any content you have about getting to the venue.
     *
     * Generated from protobuf field <code>string directionsInformationURL = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDirectionsInformationURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->directionsInformationURL = $var;

        return $this;
    }

    /**
     * A URL that links to your or the venue's accessibility content.
     *
     * Generated from protobuf field <code>string accessibilityURL = 9;</code>
     * @return string
     */
    public function getAccessibilityURL()
    {
        return $this->accessibilityURL;
    }

    /**
     * A URL that links to your or the venue's accessibility content.
     *
     * Generated from protobuf field <code>string accessibilityURL = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessibilityURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->accessibilityURL = $var;

        return $this;
    }

    /**
     * A URL that links to your experience to buy or access pre-paid parking, or general parking information.
     *
     * Generated from protobuf field <code>string purchaseParkingURL = 10;</code>
     * @return string
     */
    public function getPurchaseParkingURL()
    {
        return $this->purchaseParkingURL;
    }

    /**
     * A URL that links to your experience to buy or access pre-paid parking, or general parking information.
     *
     * Generated from protobuf field <code>string purchaseParkingURL = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPurchaseParkingURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->purchaseParkingURL = $var;

        return $this;
    }

    /**
     * A URL that can link to experiences that you can add on to your ticket (e.g. loaded value, upgrades, etc.), or access your existing pre-purchased or pre-loaded add-on experiences, including any necessary links to QR or barcodes to access the experience.
     *
     * Generated from protobuf field <code>string addOnURL = 11;</code>
     * @return string
     */
    public function getAddOnURL()
    {
        return $this->addOnURL;
    }

    /**
     * A URL that can link to experiences that you can add on to your ticket (e.g. loaded value, upgrades, etc.), or access your existing pre-purchased or pre-loaded add-on experiences, including any necessary links to QR or barcodes to access the experience.
     *
     * Generated from protobuf field <code>string addOnURL = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setAddOnURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->addOnURL = $var;

        return $this;
    }

    /**
     * The preferred email address to contact the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenueEmail = 12;</code>
     * @return string
     */
    public function getContactVenueEmail()
    {
        return $this->contactVenueEmail;
    }

    /**
     * The preferred email address to contact the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenueEmail = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setContactVenueEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->contactVenueEmail = $var;

        return $this;
    }

    /**
     * A URL that links the user to the website of the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenueWebsite = 13;</code>
     * @return string
     */
    public function getContactVenueWebsite()
    {
        return $this->contactVenueWebsite;
    }

    /**
     * A URL that links the user to the website of the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenueWebsite = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setContactVenueWebsite($var)
    {
        GPBUtil::checkString($var, True);
        $this->contactVenueWebsite = $var;

        return $this;
    }

    /**
     * The phone number that can be used to contact the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenuePhoneNumber = 14;</code>
     * @return string
     */
    public function getContactVenuePhoneNumber()
    {
        return $this->contactVenuePhoneNumber;
    }

    /**
     * The phone number that can be used to contact the venue, event, or issuer.
     *
     * Generated from protobuf field <code>string contactVenuePhoneNumber = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setContactVenuePhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->contactVenuePhoneNumber = $var;

        return $this;
    }

    /**
     * A URL to a portal with additional event information. If a deep link is required, provide it in the Seat Information object which will override a value in the Venue object.
     *
     * Generated from protobuf field <code>string portalUrl = 15;</code>
     * @return string
     */
    public function getPortalUrl()
    {
        return $this->portalUrl;
    }

    /**
     * A URL to a portal with additional event information. If a deep link is required, provide it in the Seat Information object which will override a value in the Venue object.
     *
     * Generated from protobuf field <code>string portalUrl = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setPortalUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->portalUrl = $var;

        return $this;
    }

}

