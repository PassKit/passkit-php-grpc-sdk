<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 * Manages pass templates and designs for Apple Wallet, Google Wallet, and data collection forms.
 */
class TemplatesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a pass template for a protocol and revision. Required fields: protocol, revision, name, colors, fields.
     * @param \Io\PassTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createTemplate(\Io\PassTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createTemplate',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing pass template. Required Fields: id
     * @param \Io\PassTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\PassTemplate>
     */
    public function updateTemplate(\Io\PassTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateTemplate',
        $argument,
        ['\Io\PassTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a pass template by ID. Required Fields: id
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\PassTemplateResponse>
     */
    public function getTemplate(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getTemplate',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the default pass template for a given protocol and revision. Required Fields: protocol, revision
     * @param \Io\DefaultTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\PassTemplate>
     */
    public function getDefaultTemplate(\Io\DefaultTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getDefaultTemplate',
        $argument,
        ['\Io\PassTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Copies an existing pass template and returns a new ID. Required Fields: id
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyTemplate(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyTemplate',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a pass template. Required Fields: id
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteTemplate(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteTemplate',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves all user-owned pass templates matching filters. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTemplatesForUserDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplatesForUserDeprecated',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all user-owned pass templates matching filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTemplatesForUser(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplatesForUser',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves all company-wide pass templates matching filters. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTemplatesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplatesDeprecated',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all company-wide pass templates matching filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTemplates(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplates',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves a count of company-wide pass templates matching filters. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countTemplatesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplatesDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a count of company-wide pass templates matching filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countTemplates(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplates',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves a count of user-owned pass templates matching filters. Required Fields: filters.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countTemplatesForUserDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplatesForUserDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a count of user-owned pass templates matching filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countTemplatesForUser(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplatesForUser',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new location object. Required Fields: latitude, longitude, message.
     * @param \Io\GPSLocation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createLocation(\Io\GPSLocation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createLocation',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing location. Required Fields: id.
     * @param \Io\GPSLocation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\GPSLocation>
     */
    public function updateLocation(\Io\GPSLocation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateLocation',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a single location by ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\GPSLocation>
     */
    public function getLocation(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getLocation',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Lists all location objects matching filters. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listLocationsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLocationsDeprecated',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all location objects matching filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listLocations(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLocations',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * Copies a location record and returns a new ID. Required Fields: id.
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyLocation(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyLocation',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a location object. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteLocation(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteLocation',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves a count of locations that match the supplied criteria. Required: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countLocationsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLocationsDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Counts the number of location records that match the supplied filters. Required: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countLocations(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLocations',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new beacon object. Required Fields: proximityUUID, lockscreenMessage.
     * @param \Io\Beacon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createBeacon(\Io\Beacon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createBeacon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing beacon object. Required Fields: id.
     * @param \Io\Beacon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Beacon>
     */
    public function updateBeacon(\Io\Beacon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateBeacon',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a single beacon by ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Beacon>
     */
    public function getBeacon(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getBeacon',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves beacon objects that match the supplied criteria. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listBeaconsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listBeaconsDeprecated',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all beacon objects that match the provided filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listBeacons(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listBeacons',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * Copies a beacon record and returns a new ID. Required Fields: id.
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyBeacon(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyBeacon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a beacon object. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteBeacon(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteBeacon',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves a count of beacons that match the supplied criteria. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countBeaconsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countBeaconsDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the count of beacons that match the supplied filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countBeacons(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countBeacons',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new link object. Required Fields: url, title, type.
     * @param \Io\Link $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createLink(\Io\Link $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createLink',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing link object. Required Fields: id.
     * @param \Io\Link $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Link>
     */
    public function updateLink(\Io\Link $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateLink',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a single link by ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Link>
     */
    public function getLink(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getLink',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves links objects that match the supplied criteria. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listLinksDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLinksDeprecated',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all link objects that match the provided filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listLinks(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLinks',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * Copies a link record and returns a new ID. Required Fields: id.
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyLink(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyLink',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a link object. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteLink(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteLink',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED: OR operator is not supported] Retrieves a count of links that match the supplied criteria. Required Fields: pagination.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countLinksDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLinksDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the count of links that match the supplied filters. Required Fields: filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countLinks(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLinks',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

}
