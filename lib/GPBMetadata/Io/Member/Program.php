<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/program.proto

namespace GPBMetadata\Io\Member;

class Program
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Io\Common\Distribution::initOnce();
        \GPBMetadata\Io\Common\Localization::initOnce();
        \GPBMetadata\Io\Common\Metrics::initOnce();
        \GPBMetadata\Io\Common\Project::initOnce();
        \GPBMetadata\Io\Common\Billing::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
io/member/program.protomembersio/common/distribution.protoio/common/localization.protoio/common/metrics.protoio/common/project.protoio/common/billing.proto.protoc-gen-openapiv2/options/annotations.proto"M

PointsType)
balanceType (2.members.BalanceType
currencyCode (	"�
Program

id (	
name (	*
localizedName (2.io.LocalizedString!
status (2.io.ProjectStatus
quota (2	.io.Quota
passTypeIdentifier (	6
distributionSettings (2.io.DistributionSettings!
autoDeleteDaysAfterExpiry ($
autoReminderDaysBeforeExpiry	 (
expiryMessage
 (	3
localizedExpiryMessage (2.io.LocalizedString(
 autoDeleteDaysAfterNotInstalling (\'

pointsType (2.members.PointsType0
secondaryPointsType (2.members.PointsType
metrics (2.io.Metrics
metaFieldsList (	+
created (2.google.protobuf.Timestamp+
updated (2.google.protobuf.Timestamp:
profileImageSettings (2.members.ProfileImageSetting@
applyFieldToExternalIdOnEnrol (2.members.CustomExternalId;
eventCaptureSettings (2.members.EventCaptureSettings;
passRecoverySettings (2.members.PassRecoverySettings:s�Ap
n*Program2SMembership Programs allow a company to control the business logic of their program.�name�statusJJJ"�
EventCaptureSettingsa
eventDataRetentionSettings (2=.members.EventCaptureSettings.EventDataRetentionSettingsEntry
smsConfirmUponCheckIn (
emailConfirmUponCheckIn (A
EventDataRetentionSettingsEntry
key (
value (:8"m
ProgramCopyRequest

id (	
name (	!
status (2.io.ProjectStatus
passTypeIdentifier (	":
ListProgramsResponse"
programs (2.members.Program"#
GetMetaKeysResponse
keys (	"A
CustomExternalId
fieldUniqueName (	
errorMessage (	"�
PassRecoverySettings
enabled (.
delivery (2.members.RecoverPassDelivery
errorPageHeader (	
errorPageBody (	!
fieldsToMatchUponRecovery (	*�
ProgramAutoUpDownGradeTierType
UPDOWNGRADE_POINTS  
UPDOWNGRADE_SECONDARY_POINTS
UPDOWNGRADE_TIER_POINTS
UPDOWNGRADE_VISITS*m
BalanceType
BALANCE_TYPE_STRING 
BALANCE_TYPE_INT
BALANCE_TYPE_DOUBLE
BALANCE_TYPE_MONEY*e
ProfileImageSetting
PROFILE_IMAGE_NONE 
PROFILE_IMAGE_OPTIONAL
PROFILE_IMAGE_REQUIRED*R
RecoverPassDelivery
DELIVERY_REDIRECT 
DELIVERY_EMAIL
DELIVERY_SMSB_
com.passkit.grpc.MembersZ,stash.passkit.com/io/model/sdk/go/io/members�PassKit.Grpc.Membersbproto3'
        , true);

        static::$is_initialized = true;
    }
}

