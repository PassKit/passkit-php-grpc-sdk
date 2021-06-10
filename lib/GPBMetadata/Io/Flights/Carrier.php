<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/carrier.proto

namespace GPBMetadata\Io\Flights;

class Carrier
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Common\Localization::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
io/flights/carrier.protoflights.protoc-gen-openapiv2/options/annotations.proto"�
Carrier,
iataCarrierCode (	B�A�^[A-Z0-9]{2}$,
icaoCarrierCode (	B�A�^[A-Z0-9]{3}$(
iataAccountingCode (B�A	Y     8�@
airlineName (	1
localizedAirlineName (2.io.LocalizedString
passTypeIdentifier (	
privateKeyId (	:��A�
�*Carrier2�A carrier record contains details of the carrier.  The carrier will be the issuer of the boarding pass and may be used as a marketing or operating carrier.  All marketing and operating carriers require a Carrier record.�iataCarrierCode�airlineName�passTypeIdentifier""
CarrierCode
carrierCode (	B_
com.passkit.grpc.FlightsZ,stash.passkit.com/io/model/sdk/go/io/flights�PassKit.Grpc.Flightsbproto3'
        , true);

        static::$is_initialized = true;
    }
}

