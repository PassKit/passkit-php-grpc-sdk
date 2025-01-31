<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 */
class ImagesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Io\ProfileImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function setProfileImage(\Io\ProfileImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/setProfileImage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getProfileImage(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getProfileImage',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\CreateImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createImages(\Io\CreateImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/createImages',
        $argument,
        ['\Io\ImageIds', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\UpdateImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateImage(\Io\UpdateImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/updateImage',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getImageURL(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getImageURL',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\StampImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getStampImageURL(\Io\StampImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getStampImageURL',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getStampImageConfig(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getStampImageConfig',
        $argument,
        ['\Io\StampImageConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\StampImageConfig $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateStampImageConfig(\Io\StampImageConfig $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/updateStampImageConfig',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\StampImagePreviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getStampImagePreview(\Io\StampImagePreviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getStampImagePreview',
        $argument,
        ['\Io\StampImagePreview', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\LocalizedImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getLocalizedImageURL(\Io\LocalizedImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getLocalizedImageURL',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getProfileImageById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getProfileImageById',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * returns a zip bundle containing all images for that ID
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getImageBundle(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getImageBundle',
        $argument,
        ['\Io\ImageBundle', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getImageData(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getImageData',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deleteImage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/deleteImage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\LocalizedImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deleteLocalizedImage(\Io\LocalizedImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/deleteLocalizedImage',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listImagesForUserDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Images/listImagesForUserDeprecated',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listImagesForUser(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Images/listImagesForUser',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listImagesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Images/listImagesDeprecated',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listImages(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Images/listImages',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function countImagesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImagesDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function countImages(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImages',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function countImagesForUserDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImagesForUserDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function countImagesForUser(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImagesForUser',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

}
