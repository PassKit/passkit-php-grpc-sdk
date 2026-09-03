<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Members RPC
//
// The PassKit Members API lets you manage your membership programs and passes for Apple Wallet and Google Wallet.
namespace Members;

/**
 * Manages membership programmes, tiers, members, member events, pass lifecycle, and point balances. Create a programme before creating tiers or enrolling members.
 */
class MembersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new membership program with details about enrollment, renewal, and cancellation. Optionally configure GPS locations and Beacons to trigger lock-screen notifications. Required fields: program name.
     * @param \Members\Program $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createProgram(\Members\Program $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/createProgram',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing membership program with new details or settings. Required fields: program id.
     * @param \Members\Program $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\Program>
     */
    public function updateProgram(\Members\Program $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateProgram',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a membership program by its unique id. Required fields: program id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\Program>
     */
    public function getProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getProgram',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new program by copying the configuration and design of an existing program. Required fields: source program id.
     * @param \Members\ProgramCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function copyProgram(\Members\ProgramCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/copyProgram',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Permanently deletes a membership program and its associated data, including all passes. Required fields: program id. Use with caution, as this action is irreversible.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteProgram',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all membership programs associated with your project. Supports filtering and pagination. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use the updated listPrograms call instead.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listProgramsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listProgramsDeprecated',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all membership programs associated with your project. Supports filtering options to narrow down the results based on specific criteria.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listPrograms(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listPrograms',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new membership tier within a program, specifying criteria, benefits, and settings. Required fields: program id, tier name.
     * @param \Members\Tier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function createTier(\Members\Tier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/createTier',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing membership tier’s details such as benefits, qualifications, and rules. Required fields: tier id.
     * @param \Members\Tier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\Tier>
     */
    public function updateTier(\Members\Tier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateTier',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves details of a specific membership tier by its id. Required fields: tier id.
     * @param \Members\TierRequestInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\Tier>
     */
    public function getTier(\Members\TierRequestInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getTier',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a membership tier from a program. Required fields: tier id.
     * @param \Members\TierRequestInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteTier(\Members\TierRequestInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteTier',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a list of all membership tiers within a membership program. Required fields: program id. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use listTiers.
     * @param \Members\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTiersDeprecated(\Members\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listTiersDeprecated',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a list of all membership tiers within a membership program. Required fields: program id. Supports filtering options to narrow down the results based on specific criteria.
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listTiers(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listTiers',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Enrols a member in a programme and creates their pass record. The request must identify the target programme and member data.
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function enrolMember(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/enrolMember',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Enrols a member through the public, unauthenticated enrolment endpoint. The request must identify the target programme and member data.
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function enrolMemberPublic(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/enrolMemberPublic',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a member record using the PassKit id. Required fields: member id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\Member>
     */
    public function getMemberRecordById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMemberRecordById',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a member record using the member's external id. Required fields: program id and external id.
     * @param \Members\MemberRecordByExternalIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\Member>
     */
    public function getMemberRecordByExternalId(\Members\MemberRecordByExternalIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMemberRecordByExternalId',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * Checks in a member in by PassKit Id or External Id. Required fields: member id or program id and external id.
     * @param \Members\MemberCheckInOutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\MemberEvent>
     */
    public function checkInMember(\Members\MemberCheckInOutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/checkInMember',
        $argument,
        ['\Members\MemberEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * Checks out a member in by PassKit Id or External Id. Required fields: member id or program id and external id.
     * @param \Members\MemberCheckInOutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\MemberEvent>
     */
    public function checkOutMember(\Members\MemberCheckInOutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/checkOutMember',
        $argument,
        ['\Members\MemberEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a list of all members within a membership program. Required fields: program id. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use listMembers as OR operator is not supported.
     * @param \Members\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listMembersDeprecated(\Members\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listMembersDeprecated',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a list of all members within a membership program. Required fields: program id. Supports filtering options to narrow down the results based on specific criteria.
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listMembers(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listMembers',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a member record by PassKit ID or external ID. Use patchPerson when changing personal information only.
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateMember(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateMember',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds (earns) loyalty points to a member's account using PassKit Id or External Id. Required fields: member id, or program id and external id, and number of points to earn.
     * @param \Members\EarnBurnPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\MemberPoints>
     */
    public function earnPoints(\Members\EarnBurnPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/earnPoints',
        $argument,
        ['\Members\MemberPoints', 'decode'],
        $metadata, $options);
    }

    /**
     * Removes (burns) loyalty points to a member's account using PassKit Id or External Id. Required fields: member id, or program id and external id, and number of points to burn.
     * @param \Members\EarnBurnPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\MemberPoints>
     */
    public function burnPoints(\Members\EarnBurnPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/burnPoints',
        $argument,
        ['\Members\MemberPoints', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets loyalty points balance to a specific value for a member using PassKit Id or External Id. Required fields: member id, or program id and external id, and new points balance.
     * @param \Members\SetPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\MemberPoints>
     */
    public function setPoints(\Members\SetPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/setPoints',
        $argument,
        ['\Members\MemberPoints', 'decode'],
        $metadata, $options);
    }

    /**
     * Changes a member’s tier within a program using PassKit Id or External Id. Required fields: member id, or program id and external id, and new tier id.
     * @param \Members\ChangeTierRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Members\MemberEvent>
     */
    public function changeMemberTier(\Members\ChangeTierRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/changeMemberTier',
        $argument,
        ['\Members\MemberEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates multiple members based on filtering criteria. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use bulkUpdateMembers.
     * @param \Members\MemberSegmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function updateMembersBySegment(\Members\MemberSegmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateMembersBySegment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes multiple members based on filtering criteria. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use bulkDeleteMembers.
     * @param \Members\MemberSegmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteMembersBySegment(\Members\MemberSegmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMembersBySegment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a single member by their PassKit Id or External ID. Required fields: member id or program id and external id.
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteMember(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Bulk deletes multiple members from a program based on provided criteria. Required fields: program id, protocol and filters criteria.
     * @param \Io\BulkPassActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function bulkDeleteMembers(\Io\BulkPassActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/bulkDeleteMembers',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Counts the number of members matching a filter. Required fields: program id. This version uses the legacy request format and is maintained for backward compatibility. New integrations should use countMembers as OR operator is not supported.
     * @param \Members\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countMembersDeprecated(\Members\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/countMembersDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Counts the number of members matching a filter. Required fields: program id.
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countMembers(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/countMembers',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * [UNIMPLEMENTED] Retrieves the message history sent to a member. Required fields: member id.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function getMessageHistoryForMember(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/getMessageHistoryForMember',
        $argument,
        ['\Io\Message', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves meta keys (custom fields) for a specific program. Required fields: program id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Strings>
     */
    public function getMetaKeysForProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMetaKeysForProgram',
        $argument,
        ['\Io\Strings', 'decode'],
        $metadata, $options);
    }

    /**
     * Batch updates the expiry dates for ALL members. Required fields: program id, tier id and new expiry settings.
     * @param \Members\UpdateExpiryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function renewMembersExpiry(\Members\UpdateExpiryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/renewMembersExpiry',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the expiry date for a member’s pass using the PassKit Id or External Id. Required fields: member id, or external id and program id, and new expiry date.
     * @param \Members\MemberExpiry $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function updateMemberExpiry(\Members\MemberExpiry $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateMemberExpiry',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a member's personal information, such as name, address, or contact details. Required fields: member id, or external id and program id, and new member information.
     * @param \Io\PersonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Id>
     */
    public function patchPerson(\Io\PersonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/patchPerson',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Counts the number of member events for a specific program based on given filters. Required fields: program id.
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Count>
     */
    public function countMemberEvents(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/countMemberEvents',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists events related to members in a specific program, supporting filtering and pagination. Required fields: program id.
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listMemberEvents(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listMemberEvents',
        $argument,
        ['\Members\MemberEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the list of meta keys associated with member events for a specific program. Required fields: program id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\Strings>
     */
    public function getMemberEventMetaKeysForProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMemberEventMetaKeysForProgram',
        $argument,
        ['\Io\Strings', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists events for a specific member, such as check-ins/outs, changes to points etc. Required fields: member id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function listEventsForMember(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listEventsForMember',
        $argument,
        ['\Members\MemberEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes member event history for a program based on specified criteria. Required fields: program id.
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteMemberEvents(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMemberEvents',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes all member events associated with a specific member. Required fields: member id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteEventsForMember(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteEventsForMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a specific individual member event. Required fields: member event id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function deleteMemberEvent(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMemberEvent',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves enrolment URLs and QR codes for a membership program, including tier-specific links if applicable. Required fields: program id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Io\EnrolmentUrls>
     */
    public function getProgramEnrolment(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getProgramEnrolment',
        $argument,
        ['\Io\EnrolmentUrls', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies the supplied field updates to members selected by the request filters. Required fields: classId, filterGroups, updateEntries.
     * @param \Io\BatchUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function batchUpdate(\Io\BatchUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/batchUpdate',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
