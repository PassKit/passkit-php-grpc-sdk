<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/airport.proto

namespace GPBMetadata\Io\Flights;

class Airport
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
�
io/flights/airport.protoflights.protoc-gen-openapiv2/options/annotations.proto"�
Port
iataAirportCode (	B�Ax
icaoAirportCode (	B�Ax
cityName (	.
localizedCityName (2.io.LocalizedString
airportName (	1
localizedAirportName (2.io.LocalizedString
countryCode (	
timezone (	:��A�
�*Airport Record2QAirport records are required for each port that a carrier operates in and out of.�iataAirportCode�cityName�airportName�countryCode�timezone""
AirportCode
airportCode (	B_
com.passkit.grpc.FlightsZ,stash.passkit.com/io/model/sdk/go/io/flights�PassKit.Grpc.Flightsbproto3'
        , true);

        static::$is_initialized = true;
    }
}

