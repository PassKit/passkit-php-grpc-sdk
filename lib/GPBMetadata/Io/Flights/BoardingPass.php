<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/boarding_pass.proto

namespace GPBMetadata\Io\Flights;

class BoardingPass
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Flights\Passenger::initOnce();
        \GPBMetadata\Io\Flights\Barcode::initOnce();
        \GPBMetadata\Io\Flights\CabinCodes\CabinCodes::initOnce();
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Proximity::initOnce();
        \GPBMetadata\Io\Common\Links::initOnce();
        \GPBMetadata\Io\Common\Metrics::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
io/flights/boarding_pass.protoflightsio/flights/barcode.proto(io/flights/cabin_codes/cabin_codes.protoio/common/common_objects.protoio/common/proximity.protoio/common/links.protoio/common/metrics.proto.protoc-gen-openapiv2/options/annotations.proto"�
BoardingPassRecord

id (	2
operatingCarrierPNR (	B�A�^[A-Z0-9]{5,7}$�
relatedPNRs (	B��A�2�Related PNRs can be used to index the record and can be the marketing carrier PNR or a master PNR containing multiple bookings. If required, a related PNR can be followed by the two or three character designator of the carrier or CRS controlling the PNR, separated by an oblique.�!^[A-Z0-9]{5,7}(\\/[A-Z0-9]{2,3})?$*
ticketNumber (	B�A�^([0-9]{3,10}$
	ticketLeg (B�A	i      �?)
boardingPoint (	B�A�^[A-Z]{3,4}$*
deplaningPoint (	B�A�^[A-Z]{3,4}$
carrierCode (	B�Ax�
flightNumber	 (	B�Ax
departureDate (2.io.Date%
	passenger (2.flights.Passenger
class (	5
compartmentCode (2.cabin_codes.CompartmentCode

seatNumber (	B�Ax
sequenceNumber (
boardingGroup (	
boardingPosition (	&
freeBaggageAllowance (	B�Ax�"
carryOnAllowance (	B�Ax�
ssrCodes (	
osi (	
remarks (	1
passengerStatus (2.flights.PassengerStatus3
conditionalItems (2.flights.ConditionalItems
barcodePayload (	
securityImage (	
privilegeImage (	
footerImage (	1
locationMessages (2.io.GPSLocationB�A�
*
beaconMessages (2
.io.BeaconB�A�

links  (2.io.LinkB�A�

barcodeAdditionalData! (	
infantPassId" (	*
additionalDataItems# (2.io.DataItems
metadata$ (2.io.Metadata:��A�
�*Boarding Pass Record2�A Boarding Pass record is unique to an individual passenger journey form a boarding point to a deplaning point. A Carrier and a Flight Designation record must exist. If a Flight record does not already exist, then it will be auto-generated based on the Flight Designation record (and other publicly available data if subscribed to data updates).�operatingCarrierPNR�sequenceNumber�boardingPoint�deplaningPoint�flightNumber�departureDate�	passenger�carrierCode"�
\'BoardingPassRecordRequestByTicketNumber*
ticketNumber (	B�A�^([0-9]{3,10}$
	ticketLeg (
boardingPoint (	:��A�
�*%Boarding Pass Record By Ticket Number2xUsed to access a single boarding pass or boarding pass record.  Either a ticket leg or boarding point should be provided�ticketNumber"�
 BoardingPassRecordRequestByIndex
carrierCode (	B�Ax�
flightNumber (	B�Ax
departureDate (2.io.Date)
boardingPoint (	B�A�^[A-Z]{3,4}$
sequenceNumber (:��A�
�*Boarding Pass Record By Index2>Used to access a single boarding pass or boarding pass record.�carrierCode�flightNumber�departureDate�boardingPoint�sequenceNumber"�
BoardingPassRequestH
ticketNumber (20.flights.BoardingPassRecordRequestByTicketNumberH :
index (2).flights.BoardingPassRecordRequestByIndexH 7
pnr (2(.flights.BoardingPassesForBookingRequestH 
passId (2.io.IdH $
format (2.io.PassBundleFormatB	
request"�
BoardingPassRecordRequestH
ticketNumber (20.flights.BoardingPassRecordRequestByTicketNumberH :
index (2).flights.BoardingPassRecordRequestByIndexH 
passId (2.io.IdH B	
request"�
BoardingPassesForBookingRequest
pnr (	
	ticketLeg (
boardingPoint (	:~�A{
y*"Boarding Pass Record By PNR record2MUsed to access a single or multiple boarding passed or boarding pass records.�pnr"@
BoardingPassesResponse&
boardingPasses (2.io.PassBundleB_
com.passkit.grpc.FlightsZ,stash.passkit.com/io/model/sdk/go/io/flights�PassKit.Grpc.Flightsbproto3'
        , true);

        static::$is_initialized = true;
    }
}

