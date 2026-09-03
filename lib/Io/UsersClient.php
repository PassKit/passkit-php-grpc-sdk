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
     * Creates a user and issues a verification email. Required Fields: email, password, name, companyName.
     * @param \Io\NewUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\NewUserResponse>
     */
    public function createUser(\Io\NewUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createUser',
        $argument,
        ['\Io\NewUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new user and returns a JWT token. Required Fields: email, password, name, companyName.
     * @param \Io\NewUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\JWT>
     */
    public function newUser(\Io\NewUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/newUser',
        $argument,
        ['\Io\JWT', 'decode'],
        $metadata, $options);
    }

    /**
     * Verifies the user with the email verification code. Required Fields: code.
     * @param \Io\VerifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Boolean>
     */
    public function verify(\Io\VerifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/verify',
        $argument,
        ['\Io\Boolean', 'decode'],
        $metadata, $options);
    }

    /**
     * Resends the verification email.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Boolean>
     */
    public function resendVerificationEmail(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/resendVerificationEmail',
        $argument,
        ['\Io\Boolean', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the authenticated user's profile.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\GetUserResponse>
     */
    public function getUser(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getUser',
        $argument,
        ['\Io\GetUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Authenticates the user and returns a JWT token. Required Fields: username, password.
     * @param \Io\Credentials $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\JWT>
     */
    public function login(\Io\Credentials $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/login',
        $argument,
        ['\Io\JWT', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the barcode image URL for 2FA setup.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Url>
     */
    public function get2faBarcode(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/get2faBarcode',
        $argument,
        ['\Io\Url', 'decode'],
        $metadata, $options);
    }

    /**
     * Resets the user's password if a reset code is already obtained. Required Fields: username, password, code.
     * @param \Io\Credentials $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function resetPassword(\Io\Credentials $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/resetPassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Sends a password reset link to the user's email. Required Fields: username.
     * @param \Io\Username $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function sendPasswordResetLink(\Io\Username $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/sendPasswordResetLink',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Changes the user's password using a reset token. Required Fields: token, password.
     * @param \Io\PasswordResetInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function changePassword(\Io\PasswordResetInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/changePassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Changes the currently authenticated user's password. Requires a valid auth token and the current password. Required Fields: currentPassword, newPassword, confirmNewPassword.
     * @param \Io\ChangeOwnPasswordInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\JWT>
     */
    public function changeOwnPassword(\Io\ChangeOwnPasswordInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/changeOwnPassword',
        $argument,
        ['\Io\JWT', 'decode'],
        $metadata, $options);
    }

    /**
     * Initiates email change. Verification email is sent to new address. Required Fields: email.
     * @param \Io\Email $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function changeEmail(\Io\Email $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/changeEmail',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Confirms and finalizes the email change. Required Fields: email, code.
     * @param \Io\ConfirmEmailChangeInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function confirmEmailChange(\Io\ConfirmEmailChangeInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/confirmEmailChange',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the company name associated with the account. Required Fields: name.
     * @param \Io\CompanyName $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function updateCompanyName(\Io\CompanyName $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/updateCompanyName',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * [DEPRECATED] Retrieves user’s projects using pagination. Required Fields: pagination.
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
     * [DEPRECATED] Retrieves all company projects using pagination. Required Fields: pagination.
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
     * Retrieves user’s projects using filters. Required Fields: filters.
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
     * Retrieves all company projects using filters. Required Fields: filters.
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
     * Retrieves a project by its UUID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Project>
     */
    public function getProjectByUuid(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getProjectByUuid',
        $argument,
        ['\Io\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a project and template using short code. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ProjectByShortCodeResult>
     */
    public function getProjectAndTemplateByShortCode(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getProjectAndTemplateByShortCode',
        $argument,
        ['\Io\ProjectByShortCodeResult', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves projects belonging to a user by status. Required Fields: status.
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
     * Retrieves all company projects by status. Required Fields: status.
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
     * Retrieves the scanner configuration for the user.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ScannerConfiguration>
     */
    public function getScannerConfig(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getScannerConfig',
        $argument,
        ['\Io\ScannerConfiguration', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new scanner configuration. Required Fields: ScannerConfiguration fields.
     * @param \Io\ScannerConfiguration $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function createScannerConfig(\Io\ScannerConfiguration $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createScannerConfig',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the existing scanner configuration. Required Fields: ScannerConfiguration fields.
     * @param \Io\ScannerConfiguration $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\ScannerConfiguration>
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
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createAuthorizationResource(\Io\OAuth2AuthorizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createAuthorizationResource',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an OAuth2 authorization resource. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteAuthorizationResource(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/deleteAuthorizationResource',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Refreshes the API secret key for the current user.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function refreshApiSecret(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/refreshApiSecret',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Permanently deletes the user's account and all associated data. Required Fields: password.
     * @param \Io\DeleteAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteAccount(\Io\DeleteAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/deleteAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Immediately revokes any old gRPC credentials.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function revokeLegacyCredentials(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/revokeLegacyCredentials',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new sub-user account for the company. Required Fields: email, name, password.
     * @param \Io\NewTeamMember $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createTeamMember(\Io\NewTeamMember $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createTeamMember',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Assigns permissions to a new team member. Required Fields: userId, permissions.
     * @param \Io\TeamMemberPermissions $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createPermissionsForTeamMember(\Io\TeamMemberPermissions $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/createPermissionsForTeamMember',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the entire permissions object for a team member. Required Fields: userId, permissions.
     * @param \Io\TeamMemberPermissions $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\TeamMemberPermissions>
     */
    public function updateTeamMemberPermissions(\Io\TeamMemberPermissions $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/updateTeamMemberPermissions',
        $argument,
        ['\Io\TeamMemberPermissions', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates partial permissions for a team member. Required Fields: userId, permissions.
     * @param \Io\TeamMemberPermissions $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\TeamMemberPermissions>
     */
    public function patchTeamMemberPermissions(\Io\TeamMemberPermissions $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/patchTeamMemberPermissions',
        $argument,
        ['\Io\TeamMemberPermissions', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a team member by ID. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\GetTeamMemberResponse>
     */
    public function getTeamMember(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/getTeamMember',
        $argument,
        ['\Io\GetTeamMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all team members.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getTeamMembers(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getTeamMembers',
        $argument,
        ['\Io\ListTeamMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a team member. Required Fields: id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteTeamMember(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.Users/deleteTeamMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves access logs for a company or user. Required Fields: protocol, classId, userId, dateRange.
     * @param \Io\AuditLogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getTeamMemberLogs(\Io\AuditLogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.Users/getTeamMemberLogs',
        $argument,
        ['\Io\AuditLog', 'decode'],
        $metadata, $options);
    }

}
