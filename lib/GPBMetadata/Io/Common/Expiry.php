<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/expiry.proto

namespace GPBMetadata\Io\Common;

class Expiry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        $pool->internalAddGeneratedFile(
            '

io/common/expiry.protoio"
ExpirySettings"

expiryType (2.io.ExpiryType#
fixedExpiryDate (2.io.DateH 
expireAfterXDays (H B
expiryOneof*

ExpiryType
EXPIRE_NONE 
EXPIRE_ON_FIXED_DATE
EXPIRE_AFTER_X_DAYS 
EXPIRE_ON_VARIABLE_DATE_TIME
EXPIRE_SET_TO_NULLBG
com.passkit.grpcZ$stash.passkit.com/io/model/sdk/go/ioͺPassKit.Grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

