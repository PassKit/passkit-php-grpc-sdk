<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/passenger.proto

namespace GPBMetadata\Io\Flights;

class Passenger
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Flights\Barcode::initOnce();
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Personal::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xD0\x0C\x0A\x1Aio/flights/passenger.proto\x12\x07flights\x1A\x1Eio/common/common_objects.proto\x1A\x18io/common/personal.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xC9\x04\x0A\x09Passenger\x12\$\x0A\x10passengerDetails\x18\x01 \x01(\x0B2\x0A.io.Person\x125\x0A\x11frequentFlyerInfo\x18\x02 \x01(\x0B2\x1A.flights.FrequentFlyerInfo\x121\x0A\x0FidentityDetails\x18\x03 \x01(\x0B2\x18.flights.IdentityDetails\x12\x12\x0A\x0AwithInfant\x18\x04 \x01(\x08\x12&\x0A\x0DinfantDetails\x18\x05 \x01(\x0B2\x0F.flights.Infant\x12\x1B\x0A\x13knownTravelerNumber\x18\x07 \x01(\x09:\xD2\x02\x92A\xCE\x02\x0A\xCB\x02*\x09Passenger2\xAA\x02Passenger information can optionally be provided. All fields are optional with the exception of the Passenger name to be rendered on the boarding pass. All passenger is treated as PII and encrypted at rest. Passenger information is deleted or rendered unusable once the pass record has invalidated.\xD2\x01\x10passengerDetails\"a\x0A\x11FrequentFlyerInfo\x12\x13\x0A\x0BprogramName\x18\x01 \x01(\x09\x12\x19\x0A\x11airlineDesignator\x18\x02 \x01(\x09\x12\x0E\x0A\x06number\x18\x03 \x01(\x09\x12\x0C\x0A\x04tier\x18\x04 \x01(\x09\"\x82\x02\x0A\x0FIdentityDetails\x123\x0A\x10identityDocument\x18\x01 \x01(\x0E2\x19.flights.IdentityDocument\x12\x16\x0A\x0EissuingCountry\x18\x02 \x01(\x09\x12\x13\x0A\x0Bnationality\x18\x03 \x01(\x09\x12\x16\x0A\x0EdocumentNumber\x18\x04 \x01(\x09\x12\x1D\x0A\x0BdateOfBirth\x18\x05 \x01(\x0B2\x08.io.Date\x12\x1A\x0A\x06gender\x18\x06 \x01(\x0E2\x0A.io.Gender\x12\x1C\x0A\x0AissuedDate\x18\x07 \x01(\x0B2\x08.io.Date\x12\x1C\x0A\x0AexpiryDate\x18\x08 \x01(\x0B2\x08.io.Date\"\x8E\x02\x0A\x06Infant\x12!\x0A\x0DinfantDetails\x18\x01 \x01(\x0B2\x0A.io.Person\x121\x0A\x0FidentityDetails\x18\x02 \x01(\x0B2\x18.flights.IdentityDetails\x12\x16\x0A\x0EbarcodePayload\x18\x03 \x01(\x09\x123\x0A\x10conditionalItems\x18\x04 \x01(\x0B2\x19.flights.ConditionalItems\x12\x1D\x0A\x15barcodeAdditionalData\x18\x05 \x01(\x09\x12\x15\x0A\x0DsecurityImage\x18\x06 \x01(\x09\x12\x16\x0A\x0EprivilegeImage\x18\x07 \x01(\x09\x12\x13\x0A\x0BfooterImage\x18\x08 \x01(\x09*\x90\x01\x0A\x10IdentityDocument\x12\x0C\x0A\x08PASSPORT\x10\x00\x12\x14\x0A\x10NATIONAL_ID_CARD\x10\x01\x12\x13\x0A\x0FDRIVING_LICENSE\x10\x02\x12\x0F\x0A\x0BCREDIT_CARD\x10\x03\x12\x17\x0A\x13FREQUENT_FLYER_CARD\x10\x04\x12\x19\x0A\x15OTHER_TRAVEL_DOCUMENT\x10\x05B_\x0A\x18com.passkit.grpc.FlightsZ,stash.passkit.com/io/model/sdk/go/io/flights\xAA\x02\x14PassKit.Grpc.Flightsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

