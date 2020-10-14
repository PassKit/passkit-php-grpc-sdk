<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// *
// Members RPC
//
// The PassKit Members API lets you manage your membership programs and passes for Apple Wallet and Google Pay.
namespace Members;

/**
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
     * Create a program record. Allows a user to specify program details around enrolment, renewal and cancellation processes. Optionally allows the user to set the GPS location / Beacons that will trigger a lock-screen alert.
     * @param \Members\Program $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createProgram(\Members\Program $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/createProgram',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing program record.
     * @param \Members\Program $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateProgram(\Members\Program $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateProgram',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets an existing program record by id.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getProgram',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Copies an existing program record to a new record, and allows for status of new program to be set; i.e. copy a draft to published (production) program. Will copy program AND related tier + template records.
     * @param \Members\ProgramCopyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function copyProgram(\Members\ProgramCopyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/copyProgram',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an existing program record by id. Deleting a program results in all tiers, and members underneath it being invalidated and removed. Needs to be used with care.
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteProgram',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all programs for the logged in user.
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listProgramsDeprecated(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listProgramsDeprecated',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all programs for the logged in user.
     * @param \Io\Filters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listPrograms(\Io\Filters $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listPrograms',
        $argument,
        ['\Members\Program', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new tier in an existing member program. Tiers allow a user to categorize their membership program; tiers allow for additional detail that is specific to that 'group' of members. A program needs at least one tier.
     * @param \Members\Tier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createTier(\Members\Tier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/createTier',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a tier by tier id
     * @param \Members\Tier $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateTier(\Members\Tier $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateTier',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a tier by tier ID
     * @param \Members\TierRequestInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getTier(\Members\TierRequestInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getTier',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a tier. Deleting a tier will invalidate and delete all the passes that are in the tier.
     * @param \Members\TierRequestInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteTier(\Members\TierRequestInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteTier',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all the tiers.
     * @param \Members\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTiersDeprecated(\Members\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listTiersDeprecated',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all the tiers.
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listTiers(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listTiers',
        $argument,
        ['\Members\Tier', 'decode'],
        $metadata, $options);
    }

    /**
     * Enrols a new member into a tier of a program. Returns the PassKit Member ID.
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function enrolMember(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/enrolMember',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * Enrols a new member into the default tier (lowest tier index) of a program. Returns the PassKit Member ID.
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function enrolMemberPublic(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/enrolMemberPublic',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getMemberRecordById(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMemberRecordById',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\MemberRecordByExternalIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getMemberRecordByExternalId(\Members\MemberRecordByExternalIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMemberRecordByExternalId',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\MemberCheckInOutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function checkInMember(\Members\MemberCheckInOutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/checkInMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\MemberCheckInOutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function checkOutMember(\Members\MemberCheckInOutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/checkOutMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listMembersDeprecated(\Members\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listMembersDeprecated',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listMembers(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listMembers',
        $argument,
        ['\Members\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateMember(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateMember',
        $argument,
        ['\Io\Id', 'decode'],
        $metadata, $options);
    }

    /**
     * @todo: define callback
     * @param \Members\EarnBurnPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function earnPoints(\Members\EarnBurnPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/earnPoints',
        $argument,
        ['\Members\MemberPoints', 'decode'],
        $metadata, $options);
    }

    /**
     * @todo: define callback
     * @param \Members\EarnBurnPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function burnPoints(\Members\EarnBurnPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/burnPoints',
        $argument,
        ['\Members\MemberPoints', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\SetPointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function setPoints(\Members\SetPointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/setPoints',
        $argument,
        ['\Members\MemberPoints', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\MemberSegmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function updateMembersBySegment(\Members\MemberSegmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/updateMembersBySegment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\MemberSegmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteMembersBySegment(\Members\MemberSegmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMembersBySegment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteMember(\Members\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\ListRequestDeprecated $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countMembersDeprecated(\Members\ListRequestDeprecated $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/countMembersDeprecated',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countMembers(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/countMembers',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getMessageHistoryForMember(\Io\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/getMessageHistoryForMember',
        $argument,
        ['\Io\Message', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getMetaKeysForProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMetaKeysForProgram',
        $argument,
        ['\Io\Strings', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\UpdateExpiryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function renewMembersExpiry(\Members\UpdateExpiryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/renewMembersExpiry',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function countMemberEvents(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/countMemberEvents',
        $argument,
        ['\Io\Count', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listMemberEvents(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listMemberEvents',
        $argument,
        ['\Members\MemberEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function getMemberEventMetaKeysForProgram(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/getMemberEventMetaKeysForProgram',
        $argument,
        ['\Io\Strings', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listEventsForMember(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/members.Members/listEventsForMember',
        $argument,
        ['\Members\MemberEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Members\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteMemberEvents(\Members\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMemberEvents',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteEventsForMember(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteEventsForMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Io\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function deleteMemberEvent(\Io\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/members.Members/deleteMemberEvent',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
