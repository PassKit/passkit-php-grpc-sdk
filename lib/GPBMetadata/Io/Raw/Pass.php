<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/raw/pass.proto

namespace GPBMetadata\Io\Raw;

class Pass
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Io\Common\Metrics::initOnce();
        \GPBMetadata\Io\Common\Filter::initOnce();
        \GPBMetadata\Io\Common\Pass::initOnce();
        \GPBMetadata\Io\Common\Personal::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
io/raw/pass.protorawio/common/metrics.protoio/common/filter.protoio/common/pass.protoio/common/personal.proto.protoc-gen-openapiv2/options/annotations.proto"�
Pass

id (	

externalId (	
passProjectId (	
passTemplateId (	#
personalDetails (2
.io.Person/
dynamicData (2.raw.Pass.DynamicDataEntry
optOut (
isVoided	 (2
invalidateDate
 (2.google.protobuf.Timestamp.

expiryDate (2.google.protobuf.Timestamp$
passOptions (2.io.PassOptions(
passOverrides (2.io.PassOverrides"
passMetaData (2.io.Metadata+
created (2.google.protobuf.Timestamp+
updated (2.google.protobuf.Timestamp2
DynamicDataEntry
key (	
value (	:8:��A�
�*Pass2aPass contains dynamic information that combined with a Pass Project & Template results in a pass.�passProjectId�passTemplateId"J
PassRecordByExternalIdRequest
passProjectId (	

externalId (	"U
ListPassesByPassProjectRequest
passProjectId (	
filters (2.io.Filters"V
ListPassesByPassTemplateRequest
passProjectId (	
filters (2.io.FiltersBS
com.passkit.grpc.RawZ(stash.passkit.com/io/model/sdk/go/io/raw�PassKit.Grpc.Rawbproto3'
        , true);

        static::$is_initialized = true;
    }
}

