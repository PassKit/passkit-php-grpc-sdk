<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 * The PassKit Images API lets you manage your image assets for Apple Wallet, Google Wallet and the data collection pages.
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
     * Set the profile image for the logged in user. Required Fields: imageData.
     * @param \Io\ProfileImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function setProfileImage(\Io\ProfileImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/setProfileImage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the profile image URL for the logged in user.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Url>
     */
    public function getProfileImage(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getProfileImage',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates one or more images. Image data is provided in base64. Required Fields: name, imageData.
     * @param \Io\CreateImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ImageIds>
     */
    public function createImages(\Io\CreateImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/createImages',
        $argument,
        ['\Io\ImageIds', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an image record's metadata. Required Fields: id.
     * @param \Io\UpdateImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ImageRecord>
     */
    public function updateImage(\Io\UpdateImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/updateImage',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves an image URL by its ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Url>
     */
    public function getImageURL(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getImageURL',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a stamp image URL with the supplied stamp status. Required Fields: id and status.
     * @param \Io\StampImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Url>
     */
    public function getStampImageURL(\Io\StampImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getStampImageURL',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the configuration of a stamp image. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\StampImageConfig>
     */
    public function getStampImageConfig(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getStampImageConfig',
        $argument,
        ['\Io\StampImageConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a stamp image configuration. Required Fields: id and config fields.
     * @param \Io\StampImageConfig $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateStampImageConfig(\Io\StampImageConfig $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/updateStampImageConfig',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a preview image of the provided stamp image configuration. Required Fields: stampImageConfig and status.
     * @param \Io\StampImagePreviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\StampImagePreview>
     */
    public function getStampImagePreview(\Io\StampImagePreviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getStampImagePreview',
        $argument,
        ['\Io\StampImagePreview', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a localized image URL for a specific language. Required Fields: iD and languageCode.
     * @param \Io\LocalizedImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Url>
     */
    public function getLocalizedImageURL(\Io\LocalizedImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getLocalizedImageURL',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a profile image URL by a specific ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Url>
     */
    public function getProfileImageById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getProfileImageById',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves an image bundle (ZIP) containing all images for the given ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ImageBundle>
     */
    public function getImageBundle(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getImageBundle',
        $argument,
        ['\Io\ImageBundle', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves metadata for an image record. Required: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ImageRecord>
     */
    public function getImageData(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/getImageData',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an image record. Required: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteImage(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/deleteImage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a localized version of an image. Required Fields: id and language code.
     * @param \Io\LocalizedImageInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ImageRecord>
     */
    public function deleteLocalizedImage(\Io\LocalizedImageInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/deleteLocalizedImage',
        $argument,
        ['\Io\ImageRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED] Retrieves all user-owned images using pagination.
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
     * Retrieves all images stored under the user account using filters. Required Fields: filters.
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
     * [DEPRECATED] Retrieves all images available to the company.
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
     * Retrieves all images stored under the company using filters. Required Fields: filters.
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
     * [DEPRECATED] Returns the count of all images available to the user.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countImagesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImagesDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the count of all images available to the user using filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countImages(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImages',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED] Returns the count of images stored under the user's account.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countImagesForUserDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImagesForUserDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the count of images stored under the user's account using filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countImagesForUser(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Images/countImagesForUser',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

}
