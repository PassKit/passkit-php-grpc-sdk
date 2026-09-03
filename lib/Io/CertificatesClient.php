<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 * Manage your Apple Wallet Pass Type Identifiers & Certificates
 */
class CertificatesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieves the Apple pass certificate data for the provided Pass Type Identifier. Required Fields: passTypeId.
     * @param \Io\PassTypeIdentifier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\CertificateData>
     */
    public function getAppleCertificateData(\Io\PassTypeIdentifier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/getAppleCertificateData',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Certificate Signing Request (CSR) for the logged-in user. This is used to generate a new certificate on the Apple Developer portal.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\CertificateSigningRequest>
     */
    public function getCertificateSigningRequest(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/getCertificateSigningRequest',
        $argument,
        ['\Io\CertificateSigningRequest', 'decode'],
        $metadata, $options);
    }

    /**
     * Uploads a new Apple certificate for use with Wallet passes. Required Field: fileBytes.
     * @param \Io\FileBytes $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\CertificateData>
     */
    public function addAppleCertificate(\Io\FileBytes $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/addAppleCertificate',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates or renews an existing Apple certificate by uploading a new one. Required Fields: fileBytes.
     * @param \Io\FileBytes $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\CertificateData>
     */
    public function updateAppleCertificate(\Io\FileBytes $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/updateAppleCertificate',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED] Returns a paginated list of Apple pass certificates for the current user. Required Fields: pagination fields.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listAppleCertificatesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Certificates/listAppleCertificatesDeprecated',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a filtered list of Apple pass certificates for the current user. Required Fields: Filters.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listAppleCertificates(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Certificates/listAppleCertificates',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED] Returns the count of Apple certificates for the current user based on pagination criteria. Required fields: pagination fields.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countAppleCertificatesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/countAppleCertificatesDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the count of Apple certificates for the current user using filter criteria. Required Fields: Filters (can be empty, but must be present)
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countAppleCertificates(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/countAppleCertificates',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates an Apple certificate renewal authority for the authenticated user.
     * @param \Io\CreateAppleCertificateRenewalAuthorityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\AppleCertificateRenewalAuthority>
     */
    public function createAppleCertificateRenewalAuthority(\Io\CreateAppleCertificateRenewalAuthorityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/createAppleCertificateRenewalAuthority',
        $argument,
        ['\Io\AppleCertificateRenewalAuthority', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves an Apple certificate renewal authority by ID.
     * @param \Io\GetAppleCertificateRenewalAuthorityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\AppleCertificateRenewalAuthority>
     */
    public function getAppleCertificateRenewalAuthority(\Io\GetAppleCertificateRenewalAuthorityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/getAppleCertificateRenewalAuthority',
        $argument,
        ['\Io\AppleCertificateRenewalAuthority', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an Apple certificate renewal authority.
     * @param \Io\UpdateAppleCertificateRenewalAuthorityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\AppleCertificateRenewalAuthority>
     */
    public function updateAppleCertificateRenewalAuthority(\Io\UpdateAppleCertificateRenewalAuthorityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/updateAppleCertificateRenewalAuthority',
        $argument,
        ['\Io\AppleCertificateRenewalAuthority', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an Apple certificate renewal authority.
     * @param \Io\GetAppleCertificateRenewalAuthorityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\DeleteAppleCertificateRenewalAuthorityResponse>
     */
    public function deleteAppleCertificateRenewalAuthority(\Io\GetAppleCertificateRenewalAuthorityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/deleteAppleCertificateRenewalAuthority',
        $argument,
        ['\Io\DeleteAppleCertificateRenewalAuthorityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists Apple certificate renewal authorities visible to the authenticated user.
     * @param \Io\ListAppleCertificateRenewalAuthoritiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listAppleCertificateRenewalAuthorities(\Io\ListAppleCertificateRenewalAuthoritiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Certificates/listAppleCertificateRenewalAuthorities',
        $argument,
        ['\Io\AppleCertificateRenewalAuthority', 'decode'],
        $metadata, $options);
    }

    /**
     * Sends NFC signing credentials for an NFC-enabled Apple certificate to the user's registered email address. Required Fields: certificateId, user email must be associated with the cert.
     * @param \Io\NFCSigningCredentialsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function sendNFCSigningCredentials(\Io\NFCSigningCredentialsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/sendNFCSigningCredentials',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
