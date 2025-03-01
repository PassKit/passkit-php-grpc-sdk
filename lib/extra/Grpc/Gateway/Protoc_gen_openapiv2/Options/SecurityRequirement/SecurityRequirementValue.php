<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: protoc-gen-openapiv2/options/openapiv2.proto

namespace Grpc\Gateway\Protoc_gen_openapiv2\Options\SecurityRequirement;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * If the security scheme is of type "oauth2", then the value is a list of
 * scope names required for the execution. For other security scheme types,
 * the array MUST be empty.
 *
 * Generated from protobuf message <code>grpc.gateway.protoc_gen_openapiv2.options.SecurityRequirement.SecurityRequirementValue</code>
 */
class SecurityRequirementValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string scope = 1;</code>
     */
    private $scope;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scope
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenOpenapiv2\Options\Openapiv2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string scope = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>repeated string scope = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScope($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scope = $arr;

        return $this;
    }

}

