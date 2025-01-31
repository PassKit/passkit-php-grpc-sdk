<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/core/a_rpc_messages.proto

namespace GPBMetadata\Io\Core;

class ARpcMessages
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        \GPBMetadata\Io\Common\Message::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xD4\x08\x0A\x1Cio/core/a_rpc_messages.proto\x12\x02io\x1A\x1Bgoogle/protobuf/empty.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x1Eio/common/common_objects.proto\x1A\x17io/common/message.proto2\xD8\x06\x0A\x08Messages\x12o\x0A\x0AgetMessage\x12\x06.io.Id\x1A\x0B.io.Message\"L\x92A4\x12\x0BGet message\x1A%Gets an single message by message id.\x82\xD3\xE4\x93\x02\x0F\x12\x0D/message/{id}\x12\x96\x01\x0A\x0DcreateMessage\x12\x0B.io.Message\x1A\x06.io.Id\"p\x92AZ\x12\x0ECreate Message\x1A\x16Creates a new message.J0\x0A\x03400\x12)\x0A'There is a problem with the input data.\x82\xD3\xE4\x93\x02\x0D\"\x08/message:\x01*\x12\xA4\x01\x0A\x0DupdateMessage\x12\x0B.io.Message\x1A\x16.google.protobuf.Empty\"n\x92AS\x12\x0EUpdate Message\x1A\x0FUpdate message.J0\x0A\x03400\x12)\x0A'There is a problem with the input data.\x82\xD3\xE4\x93\x02\x12\x1A\x0D/message/{id}:\x01*\x12\xB4\x01\x0A\x0DdeleteMessage\x12\x06.io.Id\x1A\x16.google.protobuf.Empty\"\x82\x01\x92Aj\x12\x0EDelete Message\x1A2Deleting a message will remove it from all passes.J\$\x0A\x03404\x12\x1D\x0A\x1BMessage could not be found.\x82\xD3\xE4\x93\x02\x0F*\x0D/message/{id}\x12\xE3\x01\x0A\x0BsendMessage\x12\x16.io.SendMessageRequest\x1A\x17.io.SendMessageResponse\"\xA2\x01\x92A\x86\x01\x12\x0CSend Message\x1ADSends a message to an array of passIds, or to every pass in a class.J0\x0A\x03400\x12)\x0A'There is a problem with the input data.\x82\xD3\xE4\x93\x02\x12\"\x0D/message/send:\x01*BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

