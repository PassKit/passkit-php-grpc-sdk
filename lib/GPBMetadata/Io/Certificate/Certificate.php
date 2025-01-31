<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/certificate/certificate.proto

namespace GPBMetadata\Io\Certificate;

class Certificate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xCD\x08\x0A io/certificate/certificate.proto\x12\x02io\"\xF5\x01\x0A\x0FCertificateData\x12\x12\x0A\x0ApassTypeId\x18\x01 \x01(\x09\x12\x0E\x0A\x06teamId\x18\x02 \x01(\x09\x12\x10\x0A\x08teamName\x18\x03 \x01(\x09\x12\x14\x0A\x0CserialNumber\x18\x04 \x01(\x09\x12-\x0A\x09validFrom\x18\x05 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07validTo\x18\x06 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x0F\x0A\x07modulus\x18\x07 \x01(\x09\x12\x12\x0A\x0AnfcCapable\x18\x08 \x01(\x08\x12\x15\x0A\x0DownerUsername\x18\x09 \x01(\x09\"v\x0A\x11PrivateKeyRequest\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x13\x0A\x0Bdescription\x18\x02 \x01(\x09\x12*\x0A\x06expiry\x18\x03 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x12\x0A\x0AprivateKey\x18\x04 \x01(\x0C\"Q\x0A\x15TLSCertificateRequest\x12\x13\x0A\x0Bcertificate\x18\x01 \x01(\x0C\x12\x0F\x0A\x07caChain\x18\x02 \x01(\x0C\x12\x12\x0A\x0AprivateKey\x18\x03 \x01(\x0C\"\xEF\x01\x0A\x12TLSCertificateData\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x12\x0A\x0AcommonName\x18\x02 \x01(\x09\x12\x14\x0A\x0CserialNumber\x18\x03 \x01(\x09\x12-\x0A\x09validFrom\x18\x04 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12+\x0A\x07validTo\x18\x05 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x0F\x0A\x07modulus\x18\x06 \x01(\x09\x12\x1F\x0A\x17subjectAlternativeNames\x18\x07 \x03(\x09\x12\x15\x0A\x0DownerUsername\x18\x08 \x01(\x09\"\x82\x01\x0A\x0EPrivateKeyData\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x0C\x0A\x04name\x18\x02 \x01(\x09\x12\x13\x0A\x0Bdescription\x18\x03 \x01(\x09\x12*\x0A\x06expiry\x18\x04 \x01(\x0B2\x1A.google.protobuf.Timestamp\x12\x15\x0A\x0DownerUsername\x18\x05 \x01(\x09\"(\x0A\x12PassTypeIdentifier\x12\x12\x0A\x0ApassTypeId\x18\x01 \x01(\x09\"(\x0A\x19CertificateSigningRequest\x12\x0B\x0A\x03csr\x18\x01 \x01(\x09\"F\x0A\x1CNFCSigningCredentialsRequest\x12\x10\x0A\x08password\x18\x01 \x01(\x09\x12\x14\x0A\x0CprivateKeyId\x18\x02 \x01(\x09BG\x0A\x10com.passkit.grpcZ\$stash.passkit.com/io/model/sdk/go/io\xAA\x02\x0CPassKit.Grpcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

