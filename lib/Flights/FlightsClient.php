<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Flights RPC
//
// The PassKit Flights API lets you manage your flights and boarding passes for Apple Wallet and Google Pay.
namespace Flights;

/**
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
     * Create an airport record. Optional method allowing the carrier to specify how the airport name is rendered in the pass and the GPS location that will trigger a lock-screen alert.
     * @param \Flights\Port $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createPort(\Flights\Port $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createPort',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve an airport record. The AirportCode is the three character IATA code or 4 character ICAO code.
     * @param \Flights\AirportCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getPort(\Flights\AirportCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getPort',
        $argument,
        ['\Flights\Port', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an airport record.
     * @param \Flights\Port $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updatePort(\Flights\Port $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updatePort',
        $argument,
        ['\Flights\Port', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an airport record. Deleting a record will remove any custom data provided. A new Airport record may be automatically created for a flight departing, arriving or transiting an airport which does not have a record, using publicly available data.
     * @param \Flights\AirportCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deletePort(\Flights\AirportCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deletePort',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a carrier record. All Flight Designations and Flights must have a carrier record.
     * @param \Flights\Carrier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createCarrier(\Flights\Carrier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createCarrier',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a carrier record.
     * @param \Flights\CarrierCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getCarrier(\Flights\CarrierCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getCarrier',
        $argument,
        ['\Flights\Carrier', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a carrier record
     * @param \Flights\Carrier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateCarrier(\Flights\Carrier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateCarrier',
        $argument,
        ['\Flights\Carrier', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a carrier record.
     * @param \Flights\CarrierCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteCarrier(\Flights\CarrierCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteCarrier',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a flight designator record. As much default information as possible should be provided to facilitate the automatic generation of flight records.
     * @param \Flights\FlightDesignator $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createFlightDesignator(\Flights\FlightDesignator $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createFlightDesignator',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a flight designation record.
     * @param \Flights\FlightDesignatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getFlightDesignator(\Flights\FlightDesignatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getFlightDesignator',
        $argument,
        ['\Flights\FlightDesignator', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a flight designation record.
     * @param \Flights\FlightDesignator $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateFlightDesignator(\Flights\FlightDesignator $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateFlightDesignator',
        $argument,
        ['\Flights\FlightDesignator', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a flight designation record.
     * @param \Flights\FlightDesignatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteFlightDesignator(\Flights\FlightDesignatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteFlightDesignator',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a flight record. In practice, this method is not often used, since flight records can be automatically generated. Any information in the flight record will override information in the carrier and flight designation records.
     * @param \Flights\Flight $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createFlight(\Flights\Flight $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createFlight',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a flight record.
     * @param \Flights\FlightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getFlight(\Flights\FlightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getFlight',
        $argument,
        ['\Flights\Flight', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a flight record.
     * @param \Flights\Flight $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateFlight(\Flights\Flight $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateFlight',
        $argument,
        ['\Flights\Flight', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a flight record.
     * @param \Flights\FlightRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteFlight(\Flights\FlightRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteFlight',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a boarding pass record. Flight related information not present in the boarding pass record will be populated from the flight, flight designator or carrier records.
     * @param \Flights\BoardingPassRecord $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createBoardingPass(\Flights\BoardingPassRecord $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/createBoardingPass',
        $argument,
        ['\Flights\BoardingPassesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve a boarding pass record.
     * @param \Flights\BoardingPassRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getBoardingPassRecord(\Flights\BoardingPassRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getBoardingPassRecord',
        $argument,
        ['\Flights\BoardingPassRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve digital boarding pass(es) in the requested format by ticket number, index, PNR or id.
     * @param \Flights\BoardingPassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getBoardingPass(\Flights\BoardingPassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/getBoardingPass',
        $argument,
        ['\Flights\BoardingPassesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a boarding pass record.
     * @param \Flights\BoardingPassRecord $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateBoardingPass(\Flights\BoardingPassRecord $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/updateBoardingPass',
        $argument,
        ['\Flights\BoardingPassRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a boarding pass record.
     * @param \Flights\BoardingPassRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteBoardingPass(\Flights\BoardingPassRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/flights.Flights/deleteBoardingPass',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
