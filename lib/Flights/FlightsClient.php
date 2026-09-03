<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Flights RPC
//
// The PassKit Flights API lets you manage your flights and boarding passes for Apple Wallet and Google Wallet.
namespace Flights;

/**
 * Manages carriers, flight designators, flights, and digital boarding passes. Carrier and flight-designator records provide data used when creating flights and boarding passes.
 */
class FlightsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create an airport record. Optional method allowing the carrier to specify how the airport name is rendered in the pass and the GPS location that will trigger a lock-screen alert. Required Fields: airportCode, cityName, airportName, countryCode, timezone.
     * @param \Flights\Port $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function createPort(\Flights\Port $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createPort',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve an airport record. The AirportCode is the three character IATA code or 4 character ICAO code. Required Fields: airportCode.
     * @param \Flights\AirportCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\Port>
     */
    public function getPort(\Flights\AirportCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getPort',
        $argument,
        ['\Flights\Port', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an airport record. Required Fields: airportCode.
     * @param \Flights\Port $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\Port>
     */
    public function updatePort(\Flights\Port $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updatePort',
        $argument,
        ['\Flights\Port', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an airport record. Deleting a record will remove any custom data provided. A new Airport record may be automatically created for a flight departing, arriving or transiting an airport which does not have a record, using publicly available data. Required Fields: airportCode.
     * @param \Flights\AirportCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deletePort(\Flights\AirportCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deletePort',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a carrier record. All Flight Designators and Flights must have a carrier record. Required Fields: carrierCode, airlineName, passTypeIdentifier.
     * @param \Flights\Carrier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function createCarrier(\Flights\Carrier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createCarrier',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a carrier record. Required Fields: carrierCode.
     * @param \Flights\CarrierCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\Carrier>
     */
    public function getCarrier(\Flights\CarrierCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getCarrier',
        $argument,
        ['\Flights\Carrier', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a carrier record. Required Fields: carrierCode.
     * @param \Flights\Carrier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\Carrier>
     */
    public function updateCarrier(\Flights\Carrier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateCarrier',
        $argument,
        ['\Flights\Carrier', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a carrier record. Required Fields: carrierCode.
     * @param \Flights\CarrierCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteCarrier(\Flights\CarrierCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteCarrier',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a flight designator record. As much default information as possible should be provided to facilitate the automatic generation of flight records. Required Fields: carrierCode, flightNumber, revision, schedule, origin, destination.
     * @param \Flights\FlightDesignator $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function createFlightDesignator(\Flights\FlightDesignator $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createFlightDesignator',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a flight designator record. Required Fields: carrierCode, flightNumber, revision.
     * @param \Flights\FlightDesignatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\FlightDesignator>
     */
    public function getFlightDesignator(\Flights\FlightDesignatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getFlightDesignator',
        $argument,
        ['\Flights\FlightDesignator', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a flight designator record. Required Fields: carrierCode, flightNumber, revision.
     * @param \Flights\FlightDesignator $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\FlightDesignator>
     */
    public function updateFlightDesignator(\Flights\FlightDesignator $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateFlightDesignator',
        $argument,
        ['\Flights\FlightDesignator', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a flight designator record. Required Fields: carrierCode, flightNumber, revision.
     * @param \Flights\FlightDesignatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteFlightDesignator(\Flights\FlightDesignatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteFlightDesignator',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a flight record. Flight records can be generated automatically; values on this record override carrier and flight-designator data. Required fields: carrierCode, flightNumber, departureDate, boardingPoint, deplaningPoint.
     * @param \Flights\Flight $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function createFlight(\Flights\Flight $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createFlight',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a flight record. Required Fields: carrierCode, flightNumber, departureDate, boardingPoint, deplaningPoint.
     * @param \Flights\FlightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\Flight>
     */
    public function getFlight(\Flights\FlightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getFlight',
        $argument,
        ['\Flights\Flight', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a flight record. Required Fields: carrierCode, flightNumber, departureDate, boardingPoint, deplaningPoint.
     * @param \Flights\Flight $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\Flight>
     */
    public function updateFlight(\Flights\Flight $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateFlight',
        $argument,
        ['\Flights\Flight', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a flight record. Required Fields: carrierCode, flightNumber, departureDate, boardingPoint, deplaningPoint.
     * @param \Flights\FlightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteFlight(\Flights\FlightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteFlight',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a boarding-pass record. Missing flight data is populated from the related flight, flight designator, or carrier records. Required fields: operatingCarrierPNR, boardingPoint, deplaningPoint, carrierCode, flightNumber, departureDate, passenger, sequenceNumber.
     * @param \Flights\BoardingPassRecord $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\BoardingPassesResponse>
     */
    public function createBoardingPass(\Flights\BoardingPassRecord $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createBoardingPass',
        $argument,
        ['\Flights\BoardingPassesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a boarding pass record. Required Fields: ticketNumber or index or passId.
     * @param \Flights\BoardingPassRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\BoardingPassRecord>
     */
    public function getBoardingPassRecord(\Flights\BoardingPassRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getBoardingPassRecord',
        $argument,
        ['\Flights\BoardingPassRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves digital boarding passes in the requested format by ticket number, index, PNR, or pass ID. Required fields: ticketNumber, index, or passId.
     * @param \Flights\BoardingPassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\BoardingPassesResponse>
     */
    public function getBoardingPass(\Flights\BoardingPassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getBoardingPass',
        $argument,
        ['\Flights\BoardingPassesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a boarding pass record. Required Fields: operatingCarrierPNR, boardingPoint, deplaningPoint, carrierCode, flightNumber, departureDate, passenger, sequenceNumber.
     * @param \Flights\BoardingPassRecord $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Flights\BoardingPassRecord>
     */
    public function updateBoardingPass(\Flights\BoardingPassRecord $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateBoardingPass',
        $argument,
        ['\Flights\BoardingPassRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a boarding pass record. Required Fields: ticketNumber or index or passId
     * @param \Flights\BoardingPassRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteBoardingPass(\Flights\BoardingPassRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteBoardingPass',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
