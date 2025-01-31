<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/flights/airport.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Port is an optional record that allows the carrier to overwrite default airport names and their localizations.  A port can represent an origin, destination or transit port of a direct flight with stops.  If a port record does not exist, this information will be automatically populated with publicly available data.
 *
 * Generated from protobuf message <code>flights.Port</code>
 */
class Port extends \Google\Protobuf\Internal\Message
{
    /**
     * The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *
     * Generated from protobuf field <code>string iataAirportCode = 1 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $iataAirportCode = '';
    /**
     * The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *
     * Generated from protobuf field <code>string icaoAirportCode = 2 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $icaoAirportCode = '';
    /**
     * The name of the city associated with the airport can be used in back/text fields.
     *
     * Generated from protobuf field <code>string cityName = 3;</code>
     */
    protected $cityName = '';
    /**
     * The localized name of the city to be displayed on the boarding pass.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedCityName = 4;</code>
     */
    protected $localizedCityName = null;
    /**
     * The name of the airport to be displayed on the boarding pass above the airport code.
     *
     * Generated from protobuf field <code>string airportName = 5;</code>
     */
    protected $airportName = '';
    /**
     * The localized name of the airport to be displayed on the boarding pass above the airport code.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedAirportName = 6;</code>
     */
    protected $localizedAirportName = null;
    /**
     * The ISO 3166 country code of the port.
     *
     * Generated from protobuf field <code>string countryCode = 7;</code>
     */
    protected $countryCode = '';
    /**
     * The timezone of the airport in IANA timezone format. This is required to ensure the correct rendering of times and dates in the time local to the port.
     *
     * Generated from protobuf field <code>string timezone = 8;</code>
     */
    protected $timezone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iataAirportCode
     *           The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *     @type string $icaoAirportCode
     *           The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *     @type string $cityName
     *           The name of the city associated with the airport can be used in back/text fields.
     *     @type \Io\LocalizedString $localizedCityName
     *           The localized name of the city to be displayed on the boarding pass.
     *     @type string $airportName
     *           The name of the airport to be displayed on the boarding pass above the airport code.
     *     @type \Io\LocalizedString $localizedAirportName
     *           The localized name of the airport to be displayed on the boarding pass above the airport code.
     *     @type string $countryCode
     *           The ISO 3166 country code of the port.
     *     @type string $timezone
     *           The timezone of the airport in IANA timezone format. This is required to ensure the correct rendering of times and dates in the time local to the port.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\Airport::initOnce();
        parent::__construct($data);
    }

    /**
     * The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *
     * Generated from protobuf field <code>string iataAirportCode = 1 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIataAirportCode()
    {
        return $this->iataAirportCode;
    }

    /**
     * The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *
     * Generated from protobuf field <code>string iataAirportCode = 1 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIataAirportCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->iataAirportCode = $var;

        return $this;
    }

    /**
     * The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *
     * Generated from protobuf field <code>string icaoAirportCode = 2 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIcaoAirportCode()
    {
        return $this->icaoAirportCode;
    }

    /**
     * The IATA code of the port. At least one of IATA or ICAO airport code is required.
     *
     * Generated from protobuf field <code>string icaoAirportCode = 2 [(.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIcaoAirportCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->icaoAirportCode = $var;

        return $this;
    }

    /**
     * The name of the city associated with the airport can be used in back/text fields.
     *
     * Generated from protobuf field <code>string cityName = 3;</code>
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * The name of the city associated with the airport can be used in back/text fields.
     *
     * Generated from protobuf field <code>string cityName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCityName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cityName = $var;

        return $this;
    }

    /**
     * The localized name of the city to be displayed on the boarding pass.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedCityName = 4;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedCityName()
    {
        return $this->localizedCityName;
    }

    public function hasLocalizedCityName()
    {
        return isset($this->localizedCityName);
    }

    public function clearLocalizedCityName()
    {
        unset($this->localizedCityName);
    }

    /**
     * The localized name of the city to be displayed on the boarding pass.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedCityName = 4;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedCityName($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedCityName = $var;

        return $this;
    }

    /**
     * The name of the airport to be displayed on the boarding pass above the airport code.
     *
     * Generated from protobuf field <code>string airportName = 5;</code>
     * @return string
     */
    public function getAirportName()
    {
        return $this->airportName;
    }

    /**
     * The name of the airport to be displayed on the boarding pass above the airport code.
     *
     * Generated from protobuf field <code>string airportName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAirportName($var)
    {
        GPBUtil::checkString($var, True);
        $this->airportName = $var;

        return $this;
    }

    /**
     * The localized name of the airport to be displayed on the boarding pass above the airport code.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedAirportName = 6;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedAirportName()
    {
        return $this->localizedAirportName;
    }

    public function hasLocalizedAirportName()
    {
        return isset($this->localizedAirportName);
    }

    public function clearLocalizedAirportName()
    {
        unset($this->localizedAirportName);
    }

    /**
     * The localized name of the airport to be displayed on the boarding pass above the airport code.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedAirportName = 6;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedAirportName($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedAirportName = $var;

        return $this;
    }

    /**
     * The ISO 3166 country code of the port.
     *
     * Generated from protobuf field <code>string countryCode = 7;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * The ISO 3166 country code of the port.
     *
     * Generated from protobuf field <code>string countryCode = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->countryCode = $var;

        return $this;
    }

    /**
     * The timezone of the airport in IANA timezone format. This is required to ensure the correct rendering of times and dates in the time local to the port.
     *
     * Generated from protobuf field <code>string timezone = 8;</code>
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * The timezone of the airport in IANA timezone format. This is required to ensure the correct rendering of times and dates in the time local to the port.
     *
     * Generated from protobuf field <code>string timezone = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTimezone($var)
    {
        GPBUtil::checkString($var, True);
        $this->timezone = $var;

        return $this;
    }

}

