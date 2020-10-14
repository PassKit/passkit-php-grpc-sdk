<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
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
     * @param \Io\PassTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createTemplate(\Io\PassTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createTemplate',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\PassTemplate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateTemplate(\Io\PassTemplate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateTemplate',
        $argument,
        ['\Io\PassTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getTemplate(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getTemplate',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\DefaultTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getDefaultTemplate(\Io\DefaultTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getDefaultTemplate',
        $argument,
        ['\Io\PassTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function copyTemplate(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyTemplate',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteTemplate(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteTemplate',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTemplatesForUserDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplatesForUserDeprecated',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTemplatesForUser(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplatesForUser',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTemplatesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplatesDeprecated',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTemplates(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listTemplates',
        $argument,
        ['\Io\PassTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countTemplatesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplatesDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countTemplates(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplates',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countTemplatesForUserDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplatesForUserDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countTemplatesForUser(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countTemplatesForUser',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\GPSLocation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createLocation(\Io\GPSLocation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createLocation',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\GPSLocation $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateLocation(\Io\GPSLocation $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateLocation',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getLocation(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getLocation',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listLocationsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLocationsDeprecated',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listLocations(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLocations',
        $argument,
        ['\Io\GPSLocation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function copyLocation(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyLocation',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteLocation(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteLocation',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countLocationsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLocationsDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countLocations(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLocations',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Beacon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createBeacon(\Io\Beacon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createBeacon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Beacon $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateBeacon(\Io\Beacon $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateBeacon',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getBeacon(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getBeacon',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listBeaconsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listBeaconsDeprecated',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listBeacons(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listBeacons',
        $argument,
        ['\Io\Beacon', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function copyBeacon(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyBeacon',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteBeacon(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteBeacon',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countBeaconsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countBeaconsDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countBeacons(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countBeacons',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Link $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createLink(\Io\Link $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/createLink',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Link $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateLink(\Io\Link $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/updateLink',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getLink(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/getLink',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listLinksDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLinksDeprecated',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listLinks(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Templates/listLinks',
        $argument,
        ['\Io\Link', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\CopyObjectInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function copyLink(\Io\CopyObjectInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/copyLink',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteLink(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/deleteLink',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countLinksDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLinksDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countLinks(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Templates/countLinks',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

}
