<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/billing.proto

namespace GPBMetadata\Io\Common;

class Billing
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x91\x02\x0A\x17io/common/billing.proto\x12\x02io\"r\x0A\x05Quota\x12'\x0A\x07details\x18\x01 \x03(\x0B2\x16.io.Quota.DetailsEntry\x1A@\x0A\x0CDetailsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x0D\x12\x1F\x0A\x05value\x18\x02 \x01(\x0B2\x10.io.QuotaDetails:\x028\x01\"-\x0A\x0CQuotaDetails\x12\x0D\x0A\x05quota\x18\x01 \x01(\x05\x12\x0E\x0A\x06status\x18\x02 \x01(\x04BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

