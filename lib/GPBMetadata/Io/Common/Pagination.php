<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/pagination.proto

namespace GPBMetadata\Io\Common;

class Pagination
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
io/common/pagination.protoio"�

Pagination
limit (
offset (
filterField (	
filterValue (	
filterOperator (	
orderBy (	
orderAsc (:N�AK
I*
Pagination2;Pagination object used to split content into smaller parts."J
Filter
filterField (	
filterValue (	
filterOperator (	BG
com.passkit.grpcZ$stash.passkit.com/io/model/sdk/go/io�PassKit.Grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

