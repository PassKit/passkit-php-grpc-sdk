<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/pass.proto

namespace GPBMetadata\Io\Common;

class Pass
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Io\Image\Image::initOnce();
        \GPBMetadata\Io\Common\Links::initOnce();
        \GPBMetadata\Io\Common\Metrics::initOnce();
        \GPBMetadata\Io\Common\Personal::initOnce();
        \GPBMetadata\Io\Common\Protocols::initOnce();
        \GPBMetadata\Io\Common\Proximity::initOnce();
        \GPBMetadata\Io\Common\Template::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
io/common/pass.protoioio/common/links.protoio/common/metrics.protoio/common/personal.protoio/common/protocols.protoio/common/proximity.protoio/common/template.proto.protoc-gen-openapiv2/options/annotations.proto"�
PassOverrides
imageIds (2.io.ImageIds*
	locations (2.io.GPSLocationB�A�
#
beacons (2
.io.BeaconB�A�

links (2.io.LinkB�A�

colors (2
.io.Colors"
associatedStoreIdentifiers (
appStoreIdentifiers (J"\\
PassOptions&
apple (2.io.AppleWalletSettings%
google (2.io.GooglePaySettings"�
Pass

id (	
classId (	"
protocol (2.io.PassProtocol!
personDetails (2
.io.Person
metadata (2.io.Metadata,

recordData (2.io.Pass.RecordDataEntry

externalId (	1
RecordDataEntry
key (	
value (	:8BG
com.passkit.grpcZ$stash.passkit.com/io/model/sdk/go/io�PassKit.Grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

