<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/member_events.proto

namespace GPBMetadata\Io\Member;

class MemberEvents
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Io\Common\Personal::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
io/member/member_events.protomembersio/common/personal.proto.protoc-gen-openapiv2/options/annotations.proto"�
MemberEvent

id (	\'
member (2.members.MemberMininmal(
	eventType (2.members.MemberEvents
address (	
lat (
lon (
alt (

externalId (	
externalUserId	 (	
externalDeviceId
 (	
externalServiceId (	4
metaData (2".members.MemberEvent.MetaDataEntry
notes (	(
date (2.google.protobuf.Timestamp5
retainedUntilDate (2.google.protobuf.Timestamp+
created (2.google.protobuf.Timestamp/
MetaDataEntry
key (	
value (	:8:{�Ax
v*Member Events2eEvents that have happened for a member. Events are generated by the Membership API and are immutable."�
MemberMininmal

id (	

externalId (	
groupingIdentifier (	
tierId (	
	programId (	
person (2
.io.Person*�
MemberEvents
EVENT_MEMBER_DO_NOT_USE 
EVENT_MEMBER_CHECKED_IN
EVENT_MEMBER_CHECKED_OUT
EVENT_MEMBER_VERIFIED
EVENT_MEMBER_POINTS_EARNED
EVENT_MEMBER_POINTS_BURNED
EVENT_MEMBER_POINTS_SET
EVENT_MEMBER_TIER_CHANGEDB_
com.passkit.grpc.MembersZ,stash.passkit.com/io/model/sdk/go/io/members�PassKit.Grpc.Membersbproto3'
        , true);

        static::$is_initialized = true;
    }
}

