<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
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
            '
�
 io/certificate/certificate.protoio"�
CertificateData

passTypeId (	
teamId (	
teamName (	
serialNumber (	-
	validFrom (2.google.protobuf.Timestamp+
validTo (2.google.protobuf.Timestamp
modulus (	

nfcCapable (
ownerUsername	 (	"v
PrivateKeyRequest
name (	
description (	*
expiry (2.google.protobuf.Timestamp

privateKey ("Q
TLSCertificateRequest
certificate (
caChain (

privateKey ("�
TLSCertificateData

id (	

commonName (	
serialNumber (	-
	validFrom (2.google.protobuf.Timestamp+
validTo (2.google.protobuf.Timestamp
modulus (	
subjectAlternativeNames (	
ownerUsername (	"�
PrivateKeyData

id (	
name (	
description (	*
expiry (2.google.protobuf.Timestamp
ownerUsername (	"(
PassTypeIdentifier

passTypeId (	"(
CertificateSigningRequest
csr (	"F
NFCSigningCredentialsRequest
password (	
privateKeyId (	BG
com.passkit.grpcZ$stash.passkit.com/io/model/sdk/go/io�PassKit.Grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

