<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/note.proto

namespace GPBMetadata\Io\Common;

class Note
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xD6\x01\x0A\x14io/common/note.proto\x12\x02io\"i\x0A\x04Note\x12\x11\x0A\x09subjectId\x18\x01 \x01(\x09\x12\x10\x0A\x08username\x18\x02 \x01(\x09\x12\x0F\x0A\x07message\x18\x03 \x01(\x09\x12+\x0A\x07created\x18\x04 \x01(\x0B2\x1A.google.protobuf.TimestampBG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

