<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/user/user.proto

namespace GPBMetadata\Io\User;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Io\Common\Personal::initOnce();
        \GPBMetadata\Io\Common\Attributes::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xEF&\x0A\x12io/user/user.proto\x12\x02io\x1A\x18io/common/personal.proto\x1A\x1Aio/common/attributes.proto\"\xB4\x02\x0A\x08AuditLog\x12-\x0A\x09timestamp\x18\x01 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x11\x0A\x09companyId\x18\x02 \x01(\x09\x12\x10\x0A\x08username\x18\x03 \x01(\x09\x12\x1E\x0A\x08userType\x18\x04 \x01(\x0E2\x0C.io.UserType\x12*\x0A\x0Eauthentication\x18\x05 \x01(\x0E2\x12.io.Authentication\x12\x1C\x0A\x07channel\x18\x06 \x01(\x0E2\x0B.io.Channel\x12\x11\x0A\x09ipAddress\x18\x07 \x01(\x09\x12\x10\x0A\x08endpoint\x18\x08 \x01(\x09\x12\x0F\x0A\x07payload\x18\x09 \x01(\x09\x12\x12\x0A\x0AstatusCode\x18\x0A \x01(\x0D\x12\x0E\x0A\x06status\x18\x0B \x01(\x09\x12\x10\x0A\x08response\x18\x0C \x01(\x09\"v\x0A\x0FAuditLogRequest\x12\x10\x0A\x08username\x18\x01 \x01(\x09\x12.\x0A\x0AbeforeTime\x18\x02 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x0D\x0A\x05limit\x18\x03 \x01(\x0D\x12\x12\x0A\x0AerrorsOnly\x18\x04 \x01(\x08\"\xEE\x01\x0A\x0FNewUserResponse\x12\x0E\x0A\x06userId\x18\x01 \x01(\x09\x12\x11\x0A\x09companyId\x18\x02 \x01(\x09\x12\x10\x0A\x08username\x18\x03 \x01(\x09\x12\x14\x0A\x0CemailAddress\x18\x04 \x01(\x09\x12\x0E\x0A\x06secret\x18\x05 \x01(\x09\x12\x13\x0A\x0Bcertificate\x18\x06 \x01(\x09\x12\x12\x0A\x0AprivateKey\x18\x07 \x01(\x09\x12\x16\x0A\x0EjavaPrivateKey\x18\x08 \x01(\x09\x12-\x0A\x09expiresAt\x18\x09 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x10\x0A\x08regionId\x18\x0A \x01(\x09\"\xDE\x01\x0A\x07NewUser\x12\x10\x0A\x08username\x18\x01 \x01(\x09\x12\x10\x0A\x08password\x18\x02 \x01(\x09\x12\x14\x0A\x0CemailAddress\x18\x03 \x01(\x09\x12\x11\x0A\x09sendEmail\x18\x04 \x01(\x08\x12\x13\x0A\x0BcompanyName\x18\x05 \x01(\x09\x12\x14\x0A\x0CmobileNumber\x18\x06 \x01(\x09\x12\x15\x0A\x0DtwoFactorAuth\x18\x07 \x01(\x08\x12\x0F\x0A\x07isOwner\x18\x08 \x01(\x08\x12\x10\x0A\x08readOnly\x18\x09 \x01(\x08\x12\x12\x0A\x0AteamMember\x18\x0A \x01(\x08\x12\x0D\x0A\x05token\x18\x0B \x01(\x09\"\x8E\x02\x0A\x0FGetUserResponse\x12\x0D\x0A\x05email\x18\x01 \x01(\x09\x12\x10\x0A\x08username\x18\x02 \x01(\x09\x12\x11\x0A\x09companyId\x18\x03 \x01(\x09\x12\x13\x0A\x0BcompanyName\x18\x04 \x01(\x09\x12\x15\x0A\x0DcompanyStatus\x18\x05 \x01(\x04\x12-\x0A\x09createdAt\x18\x06 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12-\x0A\x09expiresAt\x18\x07 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x10\x0A\x08regionId\x18\x08 \x01(\x09\x12\x12\x0A\x0AuserStatus\x18\x09 \x01(\x04\x12\x17\x0A\x0FuserPermissions\x18\x0A \x01(\x04\"i\x0A\x0BBillingMeta\x12\x13\x0A\x0BcompanyName\x18\x01 \x01(\x09\x12\x0D\x0A\x05taxId\x18\x02 \x01(\x09\x12\x11\x0A\x09reference\x18\x03 \x01(\x09\x12#\x0A\x0EbillingAddress\x18\x04 \x01(\x0B2\x0B.io.Address\"X\x0A\x0BCredentials\x12\x10\x0A\x08username\x18\x01 \x01(\x09\x12\x10\x0A\x08password\x18\x02 \x01(\x09\x12\x12\x0A\x0AtwoFAToken\x18\x03 \x01(\x09\x12\x11\x0A\x09twoFACode\x18\x04 \x01(\x09\"+\x0A\x0DVerifyRequest\x12\x0B\x0A\x03uid\x18\x01 \x01(\x09\x12\x0D\x0A\x05token\x18\x02 \x01(\x09\"\x14\x0A\x03JWT\x12\x0D\x0A\x05token\x18\x01 \x01(\x09\"j\x0A\x12PasswordResetInput\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x17\x0A\x0FregisteredEmail\x18\x02 \x01(\x09\x12\x13\x0A\x0BnewPassword\x18\x03 \x01(\x09\x12\x1A\x0A\x12confirmNewPassword\x18\x04 \x01(\x09\"\x1C\x0A\x08Username\x12\x10\x0A\x08username\x18\x01 \x01(\x09\"k\x0A\x1AOAuth2AuthorizationRequest\x12\x12\x0A\x0AclientCode\x18\x01 \x01(\x09\x12\$\x0A\x08provider\x18\x02 \x01(\x0E2\x12.io.OAuth2Provider\x12\x13\x0A\x0BredirectUri\x18\x03 \x01(\x09\"\x8C\x02\x0A\x14ScannerConfiguration\x12?\x0A\x15membershipPermissions\x18\x01 \x03(\x0E2 .io.ScannerMembershipPermissions\x127\x0A\x11couponPermissions\x18\x02 \x03(\x0E2\x1C.io.ScannerCouponPermissions\x12@\x0A\x17defaultMembershipAction\x18\x03 \x03(\x0E2\x1F.io.DefaultMembershipScanAction\x128\x0A\x13defaultCouponAction\x18\x04 \x03(\x0E2\x1B.io.DefaultCouponScanAction\"\x16\x0A\x05Email\x12\x0D\x0A\x05email\x18\x01 \x01(\x09\"L\x0A\x17ConfirmEmailChangeInput\x12\x10\x0A\x08username\x18\x01 \x01(\x09\x12\x10\x0A\x08password\x18\x02 \x01(\x09\x12\x0D\x0A\x05token\x18\x03 \x01(\x09\"\"\x0A\x0BCompanyName\x12\x13\x0A\x0BcompanyName\x18\x01 \x01(\x09\"Z\x0A\x14DeleteAccountRequest\x12\x10\x0A\x08username\x18\x01 \x01(\x09\x12\x10\x0A\x08password\x18\x02 \x01(\x09\x12\x1E\x0A\x16confirmPermanentDelete\x18\x03 \x01(\x08\" \x0A\x0CProjectsList\x12\x10\x0A\x08projects\x18\x01 \x03(\x09\"(\x0A\x10CertificatesList\x12\x14\x0A\x0Ccertificates\x18\x01 \x03(\x09\" \x0A\x0CProtocolList\x12\x10\x0A\x08classIds\x18\x01 \x03(\x09\"\x8C\x03\x0A\x13ResourcePermissions\x12+\x0A\x0FallowedProjects\x18\x01 \x01(\x0B2\x10.io.ProjectsListH\x00\x12.\x0A\x12disallowedProjects\x18\x02 \x01(\x0B2\x10.io.ProjectsListH\x00\x123\x0A\x13allowedCertificates\x18\x03 \x01(\x0B2\x14.io.CertificatesListH\x01\x126\x0A\x16disallowedCertificates\x18\x04 \x01(\x0B2\x14.io.CertificatesListH\x01\x12+\x0A\x0FallowedPrograms\x18\x05 \x01(\x0B2\x10.io.ProtocolListH\x02\x12.\x0A\x12disallowedPrograms\x18\x06 \x01(\x0B2\x10.io.ProtocolListH\x02B\x14\x0A\x12ProjectPermissionsB\x18\x0A\x16CertificatePermissionsB\x1E\x0A\x1CMembershipProgramPermissions\"\x97\x02\x0A\x15TeamMemberPermissions\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x0E\x0A\x06userId\x18\x02 \x01(\x09\x12,\x0A\x0FpermissionScope\x18\x03 \x01(\x0E2\x13.io.PermissionScope\x12\$\x0A\x06status\x18\x04 \x01(\x0E2\x14.io.TeamMemberStatus\x124\x0A\x13resourcePermissions\x18\x05 \x01(\x0B2\x17.io.ResourcePermissions\x12+\x0A\x07created\x18\x06 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07updated\x18\x07 \x01(\x0B2\x1A.google.protobuf.Timestamp\"Z\x0A\x0DNewTeamMember\x12\x19\x0A\x04user\x18\x01 \x01(\x0B2\x0B.io.NewUser\x12.\x0A\x0Bpermissions\x18\x02 \x01(\x0B2\x19.io.TeamMemberPermissions\"j\x0A\x15GetTeamMemberResponse\x12!\x0A\x04user\x18\x01 \x01(\x0B2\x13.io.GetUserResponse\x12.\x0A\x0Bpermissions\x18\x02 \x01(\x0B2\x19.io.TeamMemberPermissions\"[\x0A\x17ListTeamMembersResponse\x12\x0B\x0A\x03uid\x18\x01 \x01(\x09\x12\x0D\x0A\x05email\x18\x02 \x01(\x09\x12\$\x0A\x06status\x18\x03 \x01(\x0E2\x14.io.TeamMemberStatus\"\x1A\x0A\x09Recaptcha\x12\x0D\x0A\x05token\x18\x01 \x01(\x09*q\x0A\x0EOAuth2Provider\x12\x14\x0A\x10OAUTH_DO_NOT_USE\x10\x00\x12\x11\x0A\x0DOAUTH_PATREON\x10\x0A\x12\x10\x0A\x0COAUTH_SPROUT\x102\x12\x13\x0A\x0FOAUTH_MAILCHIMP\x10d\x12\x0F\x0A\x0AOAUTH_XERO\x10\x96\x01*\xC6\x03\x0A\x1CScannerMembershipPermissions\x12\x1E\x0A\x1AMEMBERSHIP_PERMISSION_NONE\x10\x00\x12%\x0A!MEMBERSHIP_PERMISSION_VIEW_MEMBER\x10\x01\x12%\x0A!MEMBERSHIP_PERMISSION_EDIT_MEMBER\x10\x02\x12%\x0A!MEMBERSHIP_PERMISSION_EARN_POINTS\x10\x04\x12%\x0A!MEMBERSHIP_PERMISSION_BURN_POINTS\x10\x08\x12\$\x0A MEMBERSHIP_PERMISSION_SET_POINTS\x10\x10\x12%\x0A!MEMBERSHIP_PERMISSION_CHANGE_TIER\x10 \x12%\x0A!MEMBERSHIP_PERMISSION_VIEW_EVENTS\x10@\x12(\x0A#MEMBERSHIP_PERMISSION_CHANGE_EXPIRY\x10\x80\x01\x12'\x0A\"MEMBERSHIP_PERMISSION_CHECK_IN_OUT\x10\x80\x02\x12#\x0A\x1EMEMBERSHIP_PERMISSION_VALIDATE\x10\x80\x04*\x82\x02\x0A\x18ScannerCouponPermissions\x12\x1A\x0A\x16COUPON_PERMISSION_NONE\x10\x00\x12!\x0A\x1DCOUPON_PERMISSION_VIEW_COUPON\x10\x01\x12!\x0A\x1DCOUPON_PERMISSION_EDIT_COUPON\x10\x02\x12\x1C\x0A\x18COUPON_PERMISSION_REDEEM\x10\x04\x12!\x0A\x1DCOUPON_PERMISSION_VIEW_EVENTS\x10\x08\x12#\x0A\x1FCOUPON_PERMISSION_CHANGE_EXPIRY\x10\x10\x12\x1E\x0A\x1ACOUPON_PERMISSION_VALIDATE\x10 *\xC8\x01\x0A\x1BDefaultMembershipScanAction\x12\x1B\x0A\x17MEMBERSHIP_DEFAULT_NONE\x10\x00\x12\"\x0A\x1EMEMBERSHIP_DEFAULT_EARN_POINTS\x10\x01\x12\"\x0A\x1EMEMBERSHIP_DEFAULT_BURN_POINTS\x10\x02\x12#\x0A\x1FMEMBERSHIP_DEFAULT_CHECK_IN_OUT\x10\x04\x12\x1F\x0A\x1BMEMBERSHIP_DEFAULT_VALIDATE\x10\x08*j\x0A\x17DefaultCouponScanAction\x12\x17\x0A\x13COUPON_DEFAULT_NONE\x10\x00\x12\x19\x0A\x15COUPON_DEFAULT_REDEEM\x10\x01\x12\x1B\x0A\x17COUPON_DEFAULT_VALIDATE\x10\x02*\xED\x01\x0A\x0FPermissionScope\x12\x13\x0A\x0FPERMISSION_NONE\x10\x00\x12\x0E\x0A\x0AWEB_ACCESS\x10\x01\x12\x0E\x0A\x0AAPP_ACCESS\x10\x02\x12\x10\x0A\x0CALL_PROJECTS\x10\x04\x12\x14\x0A\x10ALL_CERTIFICATES\x10\x08\x12\x12\x0A\x0EBILLING_ACCESS\x10\x10\x12\x17\x0A\x13CERTIFICATES_ACCESS\x10 \x12\x12\x0A\x0EMEMBERS_ACCESS\x10@\x12\x13\x0A\x0ECOUPONS_ACCESS\x10\x80\x01\x12\x12\x0A\x0DEVENTS_ACCESS\x10\x80\x02\x12\x13\x0A\x0EFLIGHTS_ACCESS\x10\x80\x04*\x87\x01\x0A\x10TeamMemberStatus\x12\x0F\x0A\x0BSTATUS_NONE\x10\x00\x12\x16\x0A\x12TEAM_MEMBER_ACTIVE\x10\x01\x12\x18\x0A\x14TEAM_MEMBER_DISABLED\x10\x02\x12\x17\x0A\x13TEAM_MEMBER_EXPIRED\x10\x04\x12\x17\x0A\x13TEAM_MEMBER_PENDING\x10\x08BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

