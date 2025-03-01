<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/analytics/a_rpc.proto

namespace GPBMetadata\Io\Analytics;

class ARpc
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Io\Common\Reporting::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x85\x0A\x0A\x18io/analytics/a_rpc.proto\x12\x09analytics\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x19io/common/reporting.proto2\xE6\x01\x0A\x09Analytics\x12\xD8\x01\x0A\x0CgetAnalytics\x12\x14.io.AnalyticsRequest\x1A\x15.io.AnalyticsResponse\"\x9A\x01\x92A{\x0A\x09Analytics\x12\x0DGet Analytics\x1A\x1BRetrieves an analytics dataJ\"\x0A\x03403\x12\x1B\x0A\x19User lacks authorization.J\x1E\x0A\x03404\x12\x17\x0A\x15Record was not found.\x82\xD3\xE4\x93\x02\x16\x12\x14/analytics/{classId}B\xA1\x07\x0A\x1Acom.passkit.grpc.AnalyticsZ.stash.passkit.com/io/model/sdk/go/io/analytics\xAA\x02\x16PassKit.Grpc.Analytics\x92A\xB8\x06\x12\xF3\x01\x0A\x15PassKit Analytics API\x12_The PassKit Analytics API lets you track the performance of Apple Wallet and Google Pay passes.\x1A8https://passkit.com/legal/terms-of-subscription-service/\"?\x0A\x0FPassKit Support\x12\x17https://docs.passkit.io\x1A\x13support@passkit.com*\x01\x022\x10application/json:\x10application/jsonR9\x0A\x03200\x122\x0A(Returned when the request is successful.\x12\x06\x0A\x04\x9A\x02\x01\x07R4\x0A\x03400\x12-\x0A+Returned when wrong user input is provided.R0\x0A\x03401\x12)\x0A'Returned when the user is unauthorized.RP\x0A\x03403\x12I\x0AGReturned when the user does not have permission to access the resource.R;\x0A\x03404\x124\x0A*Returned when the resource does not exist.\x12\x06\x0A\x04\x9A\x02\x01\x07R<\x0A\x03500\x125\x0A+Returned when there is an unexpected error.\x12\x06\x0A\x04\x9A\x02\x01\x07RW\x0A\x03503\x12P\x0ANServer is unavailable. Back off for 250ms and repeat request until successful.Z>\x0A<\x0A\x0AapiKeyAuth\x12.\x08\x02\x12\x19JWT Authentication token.\x1A\x0DAuthorization \x02b\x10\x0A\x0E\x0A\x0AapiKeyAuth\x12\x00b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

