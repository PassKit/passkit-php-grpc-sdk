<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/project.proto

namespace GPBMetadata\Io\Common;

class Project
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Io\Common\Protocols::initOnce();
        \GPBMetadata\Io\Common\Template::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adf050a17696f2f636f6d6d6f6e2f70726f6a6563742e70726f746f1202696f1a19696f2f636f6d6d6f6e2f70726f746f636f6c732e70726f746f1a18696f2f636f6d6d6f6e2f74656d706c6174652e70726f746f22c3010a0750726f6a65637412220a0870726f746f636f6c18012001280e32102e696f2e5061737350726f746f636f6c120f0a07636c6173734964180220012809120c0a046e616d6518032001280912110a0973686f7274436f6465180420012809122b0a076372656174656418052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120e0a06736563726574180620012809120b0a036b657918072001280912180a10656e63727970746564436c6173734964180920012809225c0a1850726f6a656374427953686f7274436f6465526573756c74121c0a0770726f6a65637418012001280b320b2e696f2e50726f6a65637412220a0874656d706c61746518022001280b32102e696f2e5061737354656d706c61746522380a1350726f6a65637453746174757346696c74657212210a0673746174757318012001280e32112e696f2e50726f6a6563745374617475732ae4010a0d50726f6a65637453746174757312150a114e4f5f50524f4a4543545f535441545553100012260a2250524f4a4543545f4143544956455f464f525f4f424a4543545f4352454154494f4e100112280a2450524f4a4543545f44495341424c45445f464f525f4f424a4543545f4352454154494f4e100212110a0d50524f4a4543545f4452414654100412150a1150524f4a4543545f5055424c4953484544100812130a0f50524f4a4543545f50524956415445101012160a1250524f4a4543545f4f5645525f51554f5441102012130a0f50524f4a4543545f44454c455445441040423e0a0f696f2e706173736b69742e504b696f5a2473746173682e706173736b69742e636f6d2f696f2f6d6f64656c2f73646b2f676f2f696faa0204504b496f620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
