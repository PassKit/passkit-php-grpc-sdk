<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/attributes.proto

namespace GPBMetadata\Io\Common;

class Attributes
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
Ψ
io/common/attributes.protoio*δ
DeviceAttributes
NoAttributes 
Ios
Android
SupportWallet
WalletScanner
WalletDaemon
WalletPasses 
Windows@
OSX

Linux
Mobile
Desktop
Tablet
UnsupportedIos BG
com.passkit.grpcZ$stash.passkit.com/io/model/sdk/go/ioͺPassKit.Grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

