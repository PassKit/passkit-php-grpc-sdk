<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/links.proto

namespace GPBMetadata\Io\Common;

class Links
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Localization::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xF0\x03\x0A\x15io/common/links.proto\x12\x02io\x1A\x1Cio/common/localization.proto\"\xD3\x01\x0A\x04Link\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x0B\x0A\x03url\x18\x02 \x01(\x09\x12\x0D\x0A\x05title\x18\x03 \x01(\x09\x12\x1A\x0A\x04type\x18\x04 \x01(\x0E2\x0C.io.LinkType\x12*\x0A\x0DlocalizedLink\x18\x05 \x01(\x0B2\x13.io.LocalizedString\x12+\x0A\x0ElocalizedTitle\x18\x06 \x01(\x0B2\x13.io.LocalizedString\x12\x1C\x0A\x05usage\x18\x07 \x03(\x0E2\x0D.io.UsageType\x12\x10\x0A\x08position\x18\x08 \x01(\x0D\"!\x0A\x06DbLink\x12\x17\x0A\x05links\x18\x01 \x03(\x0B2\x08.io.Link*k\x0A\x08LinkType\x12\x12\x0A\x0EURI_DO_NOT_USE\x10\x00\x12\x0B\x0A\x07URI_WEB\x10\x01\x12\x0B\x0A\x07URI_TEL\x10\x02\x12\x0D\x0A\x09URI_EMAIL\x10\x03\x12\x10\x0A\x0CURI_LOCATION\x10\x04\x12\x10\x0A\x0CURI_CALENDAR\x10\x05BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

