<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Events Protocol is designed to get your Digital Event Tickets into Apple Wallet and Google Pay, from theatre and cinema, to sport events and concerts.
namespace Event_tickets;

/**
 */
class EventTicketsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createProduction',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function patchProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchProduction',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateProduction',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getProduction(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getProduction',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteProduction',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listProductions(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listProductions',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\AnalyticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getAnalytics(\Io\AnalyticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getAnalytics',
        $argument,
        ['\Event_tickets\ProductionAnalyticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\ProductionCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function copyProduction(\Event_tickets\ProductionCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/copyProduction',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createVenue',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateVenue',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function patchVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchVenue',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getVenueById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getVenueById',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteVenue',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listVenues(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listVenues',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createEvent',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateEvent',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function patchEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchEvent',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getEventById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getEventById',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\GetEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getEventByStartDateAndVenue(\Event_tickets\GetEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getEventByStartDateAndVenue',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteEvent',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\EventListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listEvents(\Event_tickets\EventListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listEvents',
        $argument,
        ['\Event_tickets\EventListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createTicketType',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateTicketType',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function patchTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchTicketType',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getTicketTypeById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketTypeById',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\GetByUidRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getTicketTypeByUserDefinedId(\Event_tickets\GetByUidRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketTypeByUserDefinedId',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteTicketType',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketTypeListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTicketTypes(\Event_tickets\TicketTypeListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listTicketTypes',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\IssueTicketRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function issueTicket(\Event_tickets\IssueTicketRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/issueTicket',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Ticket $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function issueTicketById(\Event_tickets\Ticket $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/issueTicketById',
        $argument,
        ['\Event_tickets\IssueTicketResponseIds', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Ticket $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateTicket(\Event_tickets\Ticket $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateTicket',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\ValidateTicketRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function validateTicket(\Event_tickets\ValidateTicketRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/validateTicket',
        $argument,
        ['\Event_tickets\ValidateTicketResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Ticket $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function redeemTicket(\Event_tickets\Ticket $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/redeemTicket',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\RedeemByOrderNumber $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function redeemTicketsByOrderNumber(\Event_tickets\RedeemByOrderNumber $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/redeemTicketsByOrderNumber',
        $argument,
        ['\Io\Ids', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getTicketById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketById',
        $argument,
        ['\Event_tickets\Ticket', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getTicketByTicketNumber(\Event_tickets\TicketNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketByTicketNumber',
        $argument,
        ['\Event_tickets\Ticket', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\OrderNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getTicketsByOrderNumber(\Event_tickets\OrderNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketsByOrderNumber',
        $argument,
        ['\Event_tickets\Tickets', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\EventTicketPassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getEventTicketPass(\Event_tickets\EventTicketPassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getEventTicketPass',
        $argument,
        ['\Io\PassBundles', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\Ticket $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteTicket(\Event_tickets\Ticket $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteTicket',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\OrderNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteTicketsByOrderNumber(\Event_tickets\OrderNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteTicketsByOrderNumber',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTickets(\Event_tickets\TicketListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listTickets',
        $argument,
        ['\Event_tickets\TicketLimitedFields', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_tickets\TicketListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countTickets(\Event_tickets\TicketListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/countTickets',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

}
