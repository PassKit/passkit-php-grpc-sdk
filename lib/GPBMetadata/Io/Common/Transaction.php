<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/transaction.proto

namespace GPBMetadata\Io\Common;

class Transaction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Proximity::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x82\x07\x0A\x1Bio/common/transaction.proto\x12\x02io\x1A\x1Eio/common/common_objects.proto\x1A\x19io/common/proximity.proto\"\x94\x04\x0A\x0BTransaction\x12\x13\x0A\x0BreferenceId\x18\x01 \x01(\x09\x12\x12\x0A\x0AtotalPrice\x18\x02 \x01(\x02\x12!\x0A\x0AorderItems\x18\x03 \x03(\x0B2\x0D.io.OrderItem\x12\x10\x0A\x08discount\x18\x04 \x01(\x02\x12'\x0A\x0DdiscountItems\x18\x05 \x03(\x0B2\x10.io.DiscountItem\x12\x15\x0A\x0DserviceCharge\x18\x06 \x01(\x02\x12\x10\x0A\x08totalTax\x18\x07 \x01(\x02\x12\x12\x0A\x0AfinalPrice\x18\x08 \x01(\x02\x12\x1A\x0A\x12roundingDifference\x18\x09 \x01(\x02\x12\x12\x0A\x0AisRefunded\x18\x0A \x01(\x08\x12\x1B\x0A\x09timestamp\x18\x0B \x01(\x0B2\x08.io.Date\x12\x10\x0A\x08currency\x18\x0C \x01(\x09\x12!\x0A\x08location\x18\x0D \x01(\x0B2\x0F.io.GPSLocation\x12\x19\x0A\x11transactionSource\x18\x0E \x01(\x09:\xA3\x01\x92A\x9F\x01\x0A\x9C\x01*\x0BTransaction2mTransaction information for member programs that want to show latest transactions on back of the member card.\xD2\x01\x09timestamp\xD2\x01\x06amount\xD2\x01\x08currency\"a\x0A\x0CDiscountItem\x12\x14\x0A\x0CdiscountCode\x18\x01 \x01(\x09\x12\x13\x0A\x0BvoucherCode\x18\x02 \x01(\x09\x12\x0E\x0A\x06amount\x18\x04 \x01(\x02\x12\x10\x0A\x08itemName\x18\x05 \x01(\x09J\x04\x08\x03\x10\x04\"Y\x0A\x09OrderItem\x12\x0E\x0A\x06amount\x18\x01 \x01(\x02\x12\x0B\x0A\x03tax\x18\x02 \x01(\x02\x12\x10\x0A\x08itemName\x18\x03 \x01(\x09\x12\x10\x0A\x08quantity\x18\x04 \x01(\x05\x12\x0B\x0A\x03sku\x18\x05 \x01(\x09BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

