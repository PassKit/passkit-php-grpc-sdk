<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/barcode.proto

namespace GPBMetadata\Io\Flights;

class Barcode
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xC0\x11\x0A\x18io/flights/barcode.proto\x12\x07flights\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xC2\x08\x0A\x10ConditionalItems\x12;\x0A\x14passengerDescription\x18\x01 \x01(\x0E2\x1D.flights.PassengerDescription\x12&\x0A\x0DcheckInSource\x18\x02 \x01(\x0E2\x0F.flights.Source\x123\x0A\x1AboardingPassIssuanceSource\x18\x03 \x01(\x0E2\x0F.flights.Source\x12'\x0A\x15boardingPassIssueDate\x18\x04 \x01(\x0B2\x08.io.Date\x12&\x0A\x0CdocumentType\x18\x05 \x01(\x0E2\x10.flights.DocType\x12\x1A\x0A\x12boardingPassIssuer\x18\x06 \x01(\x09\x12\xCC\x04\x0A\x10baggageTagNumber\x18\x07 \x03(\x09B\xB1\x04\x92A\xAD\x042\xAA\x04This field allows carriers to populate baggage tag numbers and the number of consecutive bags. It contains 13 characters corresponding to the 10 digit bag tag number, as per IATA BCM specifications, Resolution 740 and 3 digits identifying the number of consecutive tags.\x0A1: leading digit \xE2\x80\x93 0 for interline tag, 1 for fall-back tag, 2 for interline rush tag.\x0A2-4: carrier numeric code.\x0A5-10: carrier initial tag number (leading zeros).\x0A11-13: number of consecutive tags (allows for up to 999 tags).\x0AUp to 2 additional, non-consecutive tags can be added.\x125\x0A\x11selecteeIndicator\x18\x08 \x01(\x0E2\x1A.flights.SelecteeIndicator\x12K\x0A\x1CinternationalDocVerification\x18\x09 \x01(\x0E2%.flights.InternationalDocVerification\x12-\x0A\x0DidadIndicator\x18\x0A \x01(\x0E2\x16.flights.IDADIndicator\x12%\x0A\x09fastTrack\x18\x0B \x01(\x0E2\x12.flights.FastTrack*\xEF\x02\x0A\x0FPassengerStatus\x12\x19\x0A\x15ISSUED_NOT_CHECKED_IN\x10\x00\x12\x15\x0A\x11ISSUED_CHECKED_IN\x10\x01\x12,\x0A(BAGGAGE_CHECKED_PASSENGER_NOT_CHECKED_IN\x10\x02\x12(\x0A\$BAGGAGE_CHECKED_PASSENGER_CHECKED_IN\x10\x03\x12#\x0A\x1FPASSENGER_PASSED_SECURITY_CHECK\x10\x04\x12\x19\x0A\x15PASSENGER_PASSED_GATE\x10\x05\x12\x0B\x0A\x07TRANSIT\x10\x06\x12\x0B\x0A\x07STANDBY\x10\x07\x12#\x0A\x1FBOARDING_DATA_REVALIDATION_DONE\x10\x08\x122\x0A.ORIGINAL_BOARDING_LINE_USED_AT_TICKET_ISSUANCE\x10\x09\x12\x1F\x0A\x1BUP_OR_DOWN_GRADING_REQUIRED\x10\x0A*\x90\x01\x0A\x14PassengerDescription\x12\x09\x0A\x05ADULT\x10\x00\x12\x08\x0A\x04MALE\x10\x01\x12\x0A\x0A\x06FEMALE\x10\x02\x12\x09\x0A\x05CHILD\x10\x03\x12\x0A\x0A\x06INFANT\x10\x04\x12\x10\x0A\x0CNO_PASSENGER\x10\x05\x12\x15\x0A\x11ADULT_WITH_INFANT\x10\x06\x12\x17\x0A\x13UNACCOMPANIED_MINOR\x10\x07*@\x0A\x06Source\x12\x05\x0A\x01W\x10\x00\x12\x05\x0A\x01K\x10\x01\x12\x05\x0A\x01X\x10\x02\x12\x05\x0A\x01R\x10\x03\x12\x05\x0A\x01M\x10\x04\x12\x05\x0A\x01O\x10\x05\x12\x05\x0A\x01T\x10\x06\x12\x05\x0A\x01V\x10\x07*\x17\x0A\x07DocType\x12\x05\x0A\x01B\x10\x00\x12\x05\x0A\x01I\x10\x01*M\x0A\x1CInternationalDocVerification\x12\x10\x0A\x0CNOT_REQUIRED\x10\x00\x12\x0C\x0A\x08REQUIRED\x10\x01\x12\x0D\x0A\x09COMPLETED\x10\x02*\xAB\x01\x0A\x0DIDADIndicator\x12\x08\x0A\x04NONE\x10\x00\x12\x08\x0A\x04IDN1\x10\x01\x12\x08\x0A\x04IDN2\x10\x02\x12\x08\x0A\x04IDB1\x10\x03\x12\x08\x0A\x04IDB2\x10\x04\x12\x06\x0A\x02AD\x10\x05\x12\x06\x0A\x02DG\x10\x06\x12\x06\x0A\x02DM\x10\x07\x12\x06\x0A\x02GE\x10\x08\x12\x06\x0A\x02IG\x10\x09\x12\x06\x0A\x02RG\x10\x0A\x12\x06\x0A\x02UD\x10\x0B\x12\x06\x0A\x02ID\x10\x0C\x12\x09\x0A\x05IDFS1\x10\x0D\x12\x09\x0A\x05IDFS2\x10\x0E\x12\x08\x0A\x04IDR1\x10\x0F\x12\x08\x0A\x04IDR2\x10\x10*E\x0A\x11SelecteeIndicator\x12\x10\x0A\x0CNOT_SELECTEE\x10\x00\x12\x0C\x0A\x08SELECTEE\x10\x01\x12\x10\x0A\x0CTSA_PRECHECK\x10\x03*\x19\x0A\x09FastTrack\x12\x05\x0A\x01N\x10\x00\x12\x05\x0A\x01Y\x10\x01B_\x0A\x18com.passkit.grpc.FlightsZ,stash.passkit.com/io/model/sdk/go/io/flights\xAA\x02\x14PassKit.Grpc.Flightsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

