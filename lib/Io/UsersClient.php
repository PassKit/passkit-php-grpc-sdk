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
     */
    public function changePassword(\Io\PasswordResetInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/changePassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
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
     */
    public function getProjects(\Io\ProjectStatusFilter $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getProjects',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

}
