<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/filter.proto

namespace GPBMetadata\Io\Common;

class Filter
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x83\x04\x0A\x16io/common/filter.proto\x12\x02io\"\xCE\x01\x0A\x07Filters\x12\x0D\x0A\x05limit\x18\x01 \x01(\x05\x12\x0E\x0A\x06offset\x18\x02 \x01(\x05\x12%\x0A\x0CfilterGroups\x18\x03 \x03(\x0B2\x0F.io.FilterGroup\x12\x0F\x0A\x07orderBy\x18\x04 \x01(\x09\x12\x10\x0A\x08orderAsc\x18\x05 \x01(\x08:Z\x92AW\x0AU*\x0APagination2GFilters applies multiple filter conditions to retrieve matched records.\"O\x0A\x0BFieldFilter\x12\x13\x0A\x0BfilterField\x18\x01 \x01(\x09\x12\x13\x0A\x0BfilterValue\x18\x02 \x01(\x09\x12\x16\x0A\x0EfilterOperator\x18\x03 \x01(\x09\"U\x0A\x0BFilterGroup\x12\x1F\x0A\x09condition\x18\x01 \x01(\x0E2\x0C.io.Operator\x12%\x0A\x0CfieldFilters\x18\x02 \x03(\x0B2\x0F.io.FieldFilter*\x1B\x0A\x08Operator\x12\x07\x0A\x03AND\x10\x00\x12\x06\x0A\x02OR\x10\x01BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

