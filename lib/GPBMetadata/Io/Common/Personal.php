<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/personal.proto

namespace GPBMetadata\Io\Common;

class Personal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xE9\x05\x0A\x18io/common/personal.proto\x12\x02io\"\xD9\x02\x0A\x06Person\x12\x0F\x0A\x07surname\x18\x01 \x01(\x09\x12\x10\x0A\x08forename\x18\x02 \x01(\x09\x12\x12\x0A\x0AotherNames\x18\x03 \x03(\x09\x12\x12\x0A\x0Asalutation\x18\x04 \x01(\x09\x12\x0E\x0A\x06suffix\x18\x05 \x01(\x09\x12\x13\x0A\x0BdisplayName\x18\x06 \x01(\x09\x12\x1A\x0A\x06gender\x18\x07 \x01(\x0E2\x0A.io.Gender\x12\x1D\x0A\x0BdateOfBirth\x18\x08 \x01(\x0B2\x08.io.Date\x12\x14\x0A\x0CemailAddress\x18\x09 \x01(\x09\x12\x14\x0A\x0CmobileNumber\x18\x0A \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x0B \x01(\x09\x120\x0A\x0BexternalIds\x18\x0C \x03(\x0B2\x1B.io.Person.ExternalIdsEntry\x1A2\x0A\x10ExternalIdsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x05\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01\"\x8E\x01\x0A\x07Address\x12\x14\x0A\x0CaddressLine1\x18\x01 \x01(\x09\x12\x14\x0A\x0CaddressLine2\x18\x02 \x01(\x09\x12\x14\x0A\x0CaddressLine3\x18\x03 \x01(\x09\x12\x0C\x0A\x04city\x18\x04 \x01(\x09\x12\x0D\x0A\x05state\x18\x05 \x01(\x09\x12\x0F\x0A\x07zipCode\x18\x06 \x01(\x09\x12\x13\x0A\x0BcountryCode\x18\x07 \x01(\x09\"\\\x0A\x0DPersonRequest\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0AexternalId\x18\x02 \x01(\x09\x12\x0F\x0A\x07classId\x18\x03 \x01(\x09\x12\x1A\x0A\x06person\x18\x04 \x01(\x0B2\x0A.io.Person*-\x0A\x06Gender\x12\x0D\x0A\x09NOT_KNOWN\x10\x00\x12\x08\x0A\x04MALE\x10\x01\x12\x0A\x0A\x06FEMALE\x10\x02BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

