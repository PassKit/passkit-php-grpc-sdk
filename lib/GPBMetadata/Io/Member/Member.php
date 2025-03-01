<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/member/member.proto

namespace GPBMetadata\Io\Member;

class Member
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Io\Common\Metrics::initOnce();
        \GPBMetadata\Io\Common\Note::initOnce();
        \GPBMetadata\Io\Common\Pagination::initOnce();
        \GPBMetadata\Io\Common\Filter::initOnce();
        \GPBMetadata\Io\Common\Operation::initOnce();
        \GPBMetadata\Io\Common\Pass::initOnce();
        \GPBMetadata\Io\Common\Personal::initOnce();
        \GPBMetadata\Io\Common\Expiry::initOnce();
        \GPBMetadata\Io\Member\Event::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xC9\x18\x0A\x16io/member/member.proto\x12\x07members\x1A\x17io/common/metrics.proto\x1A\x14io/common/note.proto\x1A\x1Aio/common/pagination.proto\x1A\x16io/common/filter.proto\x1A\x19io/common/operation.proto\x1A\x14io/common/pass.proto\x1A\x18io/common/personal.proto\x1A\x16io/common/expiry.proto\x1A\x15io/member/event.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xB7\x07\x0A\x06Member\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x02 \x01(\x09\x12\x1A\x0A\x12groupingIdentifier\x18\x03 \x01(\x09\x12\x0E\x0A\x06tierId\x18\x04 \x01(\x09\x12\x11\x0A\x09programId\x18\x05 \x01(\x09\x12\x1A\x0A\x06person\x18\x06 \x01(\x0B2\x0A.io.Person\x12/\x0A\x08metaData\x18\x07 \x03(\x0B2\x1D.members.Member.MetaDataEntry\x12\x0E\x0A\x06optOut\x18\x0D \x01(\x08\x12\x0E\x0A\x06points\x18\x0E \x01(\x02\x12\x17\x0A\x0FsecondaryPoints\x18\x0F \x01(\x02\x12\x12\x0A\x0AtierPoints\x18\x10 \x01(\x0D\x12.\x0A\x0AexpiryDate\x18\x12 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12%\x0A\x06status\x18\x13 \x01(\x0E2\x15.members.MemberStatus\x12(\x0A\x0DpassOverrides\x18\x14 \x01(\x0B2\x11.io.PassOverrides\x12\"\x0A\x0CpassMetaData\x18\x15 \x01(\x0B2\x0C.io.Metadata\x12\x17\x0A\x05notes\x18\x1A \x03(\x0B2\x08.io.Note\x126\x0A\x12currentTierAwarded\x18\x1B \x01(\x0B2\x1A.google.protobuf.Timestamp\x126\x0A\x12currentTierExpires\x18\x1C \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07created\x18\x1D \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07updated\x18\x1E \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x14\x0A\x0CprofileImage\x18\x1F \x01(\x09\x12 \x0A\x09operation\x18d \x01(\x0E2\x0D.io.Operation\x1A/\x0A\x0DMetaDataEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01:\x8C\x01\x92A\x88\x01\x0A\x85\x01*\x06Member2fMember object. Member record is deleted or rendered unusable once the member status is set to deleted.\xD2\x01\x06tierId\xD2\x01\x09programIdJ\x04\x08\x08\x10\x09J\x04\x08\x09\x10\x0AJ\x04\x08\x0A\x10\x0BJ\x04\x08\x0B\x10\x0CJ\x04\x08\x0C\x10\x0DJ\x04\x08\x16\x10\x17J\x04\x08\x17\x10\x18J\x04\x08\x18\x10\x19J\x04\x08\x19\x10\x1A\"H\x0A\x1FMemberRecordByExternalIdRequest\x12\x11\x0A\x09programId\x18\x01 \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x02 \x01(\x09\"V\x0A\x14MemberSegmentRequest\x12\x1A\x0A\x06filter\x18\x01 \x01(\x0B2\x0A.io.Filter\x12\"\x0A\x09newValues\x18\x02 \x01(\x0B2\x0F.members.Member\"v\x0A\x13UpdateExpiryRequest\x12\x11\x0A\x09programId\x18\x01 \x01(\x09\x12\x0E\x0A\x06tierId\x18\x02 \x01(\x09\x12*\x0A\x0EexpirySettings\x18\x03 \x01(\x0B2\x12.io.ExpirySettings\x12\x10\x0A\x08timezone\x18\x04 \x01(\x09\"q\x0A\x0CMemberExpiry\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x02 \x01(\x09\x12\x11\x0A\x09programId\x18\x03 \x01(\x09\x12.\x0A\x0AexpiryDate\x18\x04 \x01(\x0B2\x1A.google.protobuf.Timestamp\"~\x0A\x0CMemberPoints\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x02 \x01(\x09\x12\x11\x0A\x09programId\x18\x03 \x01(\x09\x12\x0E\x0A\x06points\x18\x04 \x01(\x02\x12\x17\x0A\x0FsecondaryPoints\x18\x05 \x01(\x02\x12\x12\x0A\x0AtierPoints\x18\x06 \x01(\x0D\"\xC4\x01\x0A\x15EarnBurnPointsRequest\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x02 \x01(\x09\x12\x11\x0A\x09programId\x18\x03 \x01(\x09\x12\x0E\x0A\x06points\x18\x04 \x01(\x02\x12\x17\x0A\x0FsecondaryPoints\x18\x05 \x01(\x02\x12\x12\x0A\x0AtierPoints\x18\x06 \x01(\x0D\x12+\x0A\x0CeventDetails\x18\x07 \x01(\x0B2\x15.members.EventDetails\x12\x0E\x0A\x06tierId\x18\x08 \x01(\x09\"\x8B\x02\x0A\x10SetPointsRequest\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x02 \x01(\x09\x12\x11\x0A\x09programId\x18\x03 \x01(\x09\x12\x0E\x0A\x06points\x18\x04 \x01(\x02\x12\x17\x0A\x0FsecondaryPoints\x18\x05 \x01(\x02\x12\x12\x0A\x0AtierPoints\x18\x06 \x01(\x0D\x12\x13\x0A\x0BresetPoints\x18\x07 \x01(\x08\x12\x1C\x0A\x14resetSecondaryPoints\x18\x08 \x01(\x08\x12\x17\x0A\x0FresetTierPoints\x18\x09 \x01(\x08\x12+\x0A\x0CeventDetails\x18\x0A \x01(\x0B2\x15.members.EventDetails\x12\x0E\x0A\x06tierId\x18\x0B \x01(\x09\"\xF8\x02\x0A\x17MemberCheckInOutRequest\x12\x10\x0A\x08memberId\x18\x01 \x01(\x09\x12\x18\x0A\x10externalMemberId\x18\x02 \x01(\x09\x12\x11\x0A\x09programId\x18\x03 \x01(\x09\x12\x0F\x0A\x07address\x18\x04 \x01(\x09\x12\x0B\x0A\x03lat\x18\x05 \x01(\x01\x12\x0B\x0A\x03lon\x18\x06 \x01(\x01\x12\x0B\x0A\x03alt\x18\x07 \x01(\x05\x12\x17\x0A\x0FexternalEventId\x18\x08 \x01(\x09\x12\x18\x0A\x10externalDeviceId\x18\x09 \x01(\x09\x12\x19\x0A\x11externalServiceId\x18\x0A \x01(\x09\x12@\x0A\x08metaData\x18\x0B \x03(\x0B2..members.MemberCheckInOutRequest.MetaDataEntry\x12\x0D\x0A\x05notes\x18\x0C \x01(\x09\x12\x16\x0A\x0EexternalUserId\x18\x0D \x01(\x09\x1A/\x0A\x0DMetaDataEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01\"N\x0A\x15ListRequestDeprecated\x12\x11\x0A\x09programId\x18\x01 \x01(\x09\x12\"\x0A\x0Apagination\x18\x02 \x01(\x0B2\x0E.io.Pagination\"R\x0A\x0BListRequest\x12\x11\x0A\x09programId\x18\x01 \x01(\x09\x12\x1C\x0A\x07filters\x18\x02 \x01(\x0B2\x0B.io.Filters\x12\x12\x0A\x0AemailAsCsv\x18\x03 \x01(\x08\"\x8F\x01\x0A\x11ChangeTierRequest\x12\x10\x0A\x08memberId\x18\x01 \x01(\x09\x12\x18\x0A\x10externalMemberId\x18\x02 \x01(\x09\x12\x11\x0A\x09programId\x18\x03 \x01(\x09\x12\x0E\x0A\x06tierId\x18\x04 \x01(\x09\x12+\x0A\x0CeventDetails\x18\x07 \x01(\x0B2\x15.members.EventDetails*c\x0A\x0CMemberStatus\x12\x0C\x0A\x08ENROLLED\x10\x00\x12\x0A\x0A\x06ACTIVE\x10\x01\x12\x0E\x0A\x0ACHECKED_IN\x10\x02\x12\x0B\x0A\x07EXPIRED\x10\x03\x12\x0F\x0A\x0BCHECKED_OUT\x10\x04\x12\x0B\x0A\x07DELETED\x10\x05B_\x0A\x18com.passkit.grpc.MembersZ,stash.passkit.com/io/model/sdk/go/io/members\xAA\x02\x14PassKit.Grpc.Membersb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

