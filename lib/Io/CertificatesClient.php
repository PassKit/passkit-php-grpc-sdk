<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
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
     * @param \Io\PassTypeIdentifier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getAppleCertificateData(\Io\PassTypeIdentifier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/getAppleCertificateData',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getCertificateSigningRequest(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/getCertificateSigningRequest',
        $argument,
        ['\Io\CertificateSigningRequest', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\FileBytes $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function addAppleCertificate(\Io\FileBytes $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/addAppleCertificate',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\FileBytes $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateAppleCertificate(\Io\FileBytes $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/updateAppleCertificate',
        $argument,
        ['\Io\CertificateData', 'decode'],
        $metadata, $options);
    }

    /**
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
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function countAppleCertificatesDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/countAppleCertificatesDeprecated',
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
    public function countAppleCertificates(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/countAppleCertificates',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\NFCSigningCredentialsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sendNFCSigningCredentials(\Io\NFCSigningCredentialsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Certificates/sendNFCSigningCredentials',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
