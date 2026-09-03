<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Events Protocol is designed to get your Digital Event Tickets into Apple Wallet and Google Wallet, from theatre and cinema, to sport events and concerts.
namespace Event_tickets;

/**
 * Manages event-ticket productions, venues, events, ticket types, tickets, validation, and redemption. Ticket types belong to a production; issued tickets are associated with an event and ticket type.
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
     * Creates a new Production record. Required fields: name.
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createProduction',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Partially updates an existing Production. Required fields: id and fields to update. Note: changes will update and affect all existing Events & Tickets related to this Production.
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Production>
     */
    public function patchProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchProduction',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * Fully updates an existing Production. Required fields: id and all required fields are required. Note: changes will update and affect all existing Events & Tickets related to this Production.
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Production>
     */
    public function updateProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateProduction',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Production by ID. Required fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Production>
     */
    public function getProduction(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getProduction',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a Production and all associated Events and Tickets. Required fields: id. Use with caution, as this action is irreversible.
     * @param \Event_tickets\Production $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteProduction(\Event_tickets\Production $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteProduction',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all Productions for the authenticated user. Supports filtering options to narrow down the results based on specific criteria.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listProductions(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listProductions',
        $argument,
        ['\Event_tickets\Production', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves analytics for a specific Production. Required fields: classId and protocol.
     * @param \Io\AnalyticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\ProductionAnalyticsResponse>
     */
    public function getAnalytics(\Io\AnalyticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getAnalytics',
        $argument,
        ['\Event_tickets\ProductionAnalyticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a copy of an existing Production. Required fields: id.
     * @param \Event_tickets\ProductionCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyProduction(\Event_tickets\ProductionCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/copyProduction',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Venue record. Required fields: name and address.
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createVenue',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Fully updates an existing Venue. Required fields: id and all required fields are required. Note: changes will update and affect all existing Events & Tickets related to this Venue.
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Venue>
     */
    public function updateVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateVenue',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * Partially updates an existing Venue. Required fields: id and fields to update. Note: changes will update and affect all existing Events & Tickets related to this Venue.
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Venue>
     */
    public function patchVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchVenue',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Venue by ID. Required fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Venue>
     */
    public function getVenueById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getVenueById',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a Venue and all associated Events and Tickets. Required fields: id. Use with caution, as this action is irreversible.
     * @param \Event_tickets\Venue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteVenue(\Event_tickets\Venue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteVenue',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all Venues for the authenticated user. Supports filtering options to narrow down the results based on specific criteria.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listVenues(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listVenues',
        $argument,
        ['\Event_tickets\Venue', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates an event for a production at a venue. Required fields: production and venue.
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createEvent',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Fully updates an existing Event. Required fields: id and all required fields are required. Note: changes will update & affect all existing tickets related to this event. Production and Venue cannot be changed from this endpoint.
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Event>
     */
    public function updateEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateEvent',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Partially updates an existing Event. Required fields: id and fields to update. Note: changes will update & affect all existing tickets related to this event. Production and Venue cannot be changed from this endpoint.
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Event>
     */
    public function patchEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchEvent',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves an Event by ID. Required fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Event>
     */
    public function getEventById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getEventById',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves an Event by start date and venue. Required fields: productionId, venueId, startDate.
     * @param \Event_tickets\GetEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Event>
     */
    public function getEventByStartDateAndVenue(\Event_tickets\GetEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getEventByStartDateAndVenue',
        $argument,
        ['\Event_tickets\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an Event and all associated Tickets. Required fields: id. Use with caution, as this action is irreversible.
     * @param \Event_tickets\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteEvent(\Event_tickets\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteEvent',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists Events for a Production. Required fields: productionId. Supports filtering options to narrow down the results based on specific criteria.
     * @param \Event_tickets\EventListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listEvents(\Event_tickets\EventListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listEvents',
        $argument,
        ['\Event_tickets\EventListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Ticket Type. Required fields: name, productionId and beforeRedeemPassTemplateId.
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/createTicketType',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Fully updates an existing Ticket Type. Required fields: name, productionId, beforeRedeemPassTemplateId and all required fields are required. Note: changes will update & affect all existing Tickets related to this Ticket Type.
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\TicketType>
     */
    public function updateTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateTicketType',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * Partially updates an existing Ticket Type. Required fields: name, productionId, beforeRedeemPassTemplateId fields to update. Note: changes will update & affect all existing Tickets related to this Ticket Type.
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\TicketType>
     */
    public function patchTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchTicketType',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Ticket Type by ID. Required fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\TicketType>
     */
    public function getTicketTypeById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketTypeById',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Ticket Type by User Defined ID. Required fields: productionId, uid.
     * @param \Event_tickets\GetByUidRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\TicketType>
     */
    public function getTicketTypeByUserDefinedId(\Event_tickets\GetByUidRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketTypeByUserDefinedId',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a Ticket Type and all associated Tickets. Required fields: id, or productionId and uid. Use with caution, as this action is irreversible.
     * @param \Event_tickets\TicketType $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteTicketType(\Event_tickets\TicketType $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteTicketType',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all Ticket Types for a Production. Required fields: productionId. Supports filtering options to narrow down the results based on specific criteria.
     * @param \Event_tickets\TicketTypeListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTicketTypes(\Event_tickets\TicketTypeListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listTicketTypes',
        $argument,
        ['\Event_tickets\TicketType', 'decode'],
        $metadata, $options);
    }

    /**
     * Issues a ticket using PassKit IDs for its ticket type and event. Required fields: ticketTypeId, eventId, ticketNumber, person.name.
     * @param \Event_tickets\IssueTicketRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function issueTicket(\Event_tickets\IssueTicketRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/issueTicket',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Issues a new Ticket by User Defined IDs. Required fields: productionUid, venueUid, ticketTypeUid, event.startDate and ticket.ticketNumber.
     * @param \Event_tickets\Ticket $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\IssueTicketResponseIds>
     */
    public function issueTicketById(\Event_tickets\Ticket $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/issueTicketById',
        $argument,
        ['\Event_tickets\IssueTicketResponseIds', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing Ticket. Required fields: id or (ticketNumber + productionId).
     * @param \Event_tickets\Ticket $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateTicket(\Event_tickets\Ticket $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/updateTicket',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates personal information for a ticket holder. Required fields: ticketId or (ticketNumber + productionId), person.
     * @param \Event_tickets\EventTicketPerson $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function patchPerson(\Event_tickets\EventTicketPerson $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/patchPerson',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Validates a ticket without redeeming it. Required fields: id or ticketNumber with productionId.
     * @param \Event_tickets\ValidateTicketRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\ValidateTicketResponse>
     */
    public function validateTicket(\Event_tickets\ValidateTicketRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/validateTicket',
        $argument,
        ['\Event_tickets\ValidateTicketResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Redeems a ticket and records the redemption. Required fields: id or ticketNumber with productionId.
     * @param \Event_tickets\RedeemTicketRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function redeemTicket(\Event_tickets\RedeemTicketRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/redeemTicket',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Redeems multiple Tickets by order number. Required fields: productionid or productionUid, and orderNumber.
     * @param \Event_tickets\RedeemByOrderNumber $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Ids>
     */
    public function redeemTicketsByOrderNumber(\Event_tickets\RedeemByOrderNumber $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/redeemTicketsByOrderNumber',
        $argument,
        ['\Io\Ids', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Ticket by ID. Required fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Ticket>
     */
    public function getTicketById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketById',
        $argument,
        ['\Event_tickets\Ticket', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Ticket by ticket number. Required fields: productionId and ticketNumber.
     * @param \Event_tickets\TicketNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Ticket>
     */
    public function getTicketByTicketNumber(\Event_tickets\TicketNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketByTicketNumber',
        $argument,
        ['\Event_tickets\Ticket', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves Tickets by order number. Required fields: productionId and orderNumber.
     * @param \Event_tickets\OrderNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Event_tickets\Tickets>
     */
    public function getTicketsByOrderNumber(\Event_tickets\OrderNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getTicketsByOrderNumber',
        $argument,
        ['\Event_tickets\Tickets', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the digital pass bundle for a ticket. Required fields: ticketId, or productionId with ticketNumber or orderNumber.
     * @param \Event_tickets\EventTicketPassRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\PassBundles>
     */
    public function getEventTicketPass(\Event_tickets\EventTicketPassRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/getEventTicketPass',
        $argument,
        ['\Io\PassBundles', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a Ticket. Required fields: id or (ticketNumber + productionId).
     * @param \Event_tickets\TicketId $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteTicket(\Event_tickets\TicketId $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteTicket',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes multiple Tickets using a filter. Required fields: classId, protocol and filters.
     * @param \Io\BulkPassActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function bulkDeleteTickets(\Io\BulkPassActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/bulkDeleteTickets',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes Tickets by order number. Required fields: productionId or productionUid and orderNumber.
     * @param \Event_tickets\OrderNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteTicketsByOrderNumber(\Event_tickets\OrderNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/deleteTicketsByOrderNumber',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all Tickets for a Production. Required fields: productionId + ticketTypeId + eventId.
     * @param \Event_tickets\TicketListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTickets(\Event_tickets\TicketListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_tickets.EventTickets/listTickets',
        $argument,
        ['\Event_tickets\TicketLimitedFields', 'decode'],
        $metadata, $options);
    }

    /**
     * Counts the number of Tickets matching the filter. Required fields: productionId + ticketTypeId + eventId.
     * @param \Event_tickets\TicketListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countTickets(\Event_tickets\TicketListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_tickets.EventTickets/countTickets',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

}
