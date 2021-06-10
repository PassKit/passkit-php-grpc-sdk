<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io;

/**
 */
class UsersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Io\NewUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createUser(\Io\NewUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createUser',
        $argument,
        ['\Io\NewUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\NewUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function newUser(\Io\NewUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/newUser',
        $argument,
        ['\Io\JWT', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function verify(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/verify',
        $argument,
        ['\Io\Boolean', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function resendVerificationEmail(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/resendVerificationEmail',
        $argument,
        ['\Io\Boolean', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getUser(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getUser',
        $argument,
        ['\Io\GetUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Credentials $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function login(\Io\Credentials $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/login',
        $argument,
        ['\Io\JWT', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Credentials $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function resetPassword(\Io\Credentials $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/resetPassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Username $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sendPasswordResetLink(\Io\Username $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/sendPasswordResetLink',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\PasswordResetInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function changePassword(\Io\PasswordResetInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/changePassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Email $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function changeEmail(\Io\Email $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/changeEmail',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ConfirmEmailChangeInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function confirmEmailChange(\Io\ConfirmEmailChangeInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/confirmEmailChange',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\CompanyName $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateCompanyName(\Io\CompanyName $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/updateCompanyName',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getProjectsForUserQueryDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getProjectsForUserQueryDeprecated',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getProjectsQueryDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getProjectsQueryDeprecated',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getProjectsForUserQuery(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getProjectsForUserQuery',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getProjectsQuery(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getProjectsQuery',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getProjectByUuid(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getProjectByUuid',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getProjectAndTemplateByShortCode(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getProjectAndTemplateByShortCode',
        $argument,
        ['\Io\ProjectByShortCodeResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ProjectStatusFilter $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getProjectsForUser(\Io\ProjectStatusFilter $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getProjectsForUser',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ProjectStatusFilter $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getProjects(\Io\ProjectStatusFilter $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getProjects',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getScannerConfig(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getScannerConfig',
        $argument,
        ['\Io\ScannerConfiguration', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ScannerConfiguration $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createScannerConfig(\Io\ScannerConfiguration $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createScannerConfig',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\ScannerConfiguration $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateScannerConfig(\Io\ScannerConfiguration $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/updateScannerConfig',
        $argument,
        ['\Io\ScannerConfiguration', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new oauth2 resource, the returned id is NOT the access token used to make requests on the users behalf.
     * @param \Io\OAuth2AuthorizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createAuthorizationResource(\Io\OAuth2AuthorizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createAuthorizationResource',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deleteAuthorizationResource(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/deleteAuthorizationResource',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\DeleteAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function deleteAccount(\Io\DeleteAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/deleteAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
