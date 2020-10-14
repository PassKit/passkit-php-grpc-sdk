<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/common_objects.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Local Date are specified in ISO 8601 format date without a time. The date should be local to where the pass will be at the time of use.
 *
 * Generated from protobuf message <code>io.LocalDate</code>
 */
class LocalDate extends \Google\Protobuf\Internal\Message
{
    /**
     * ISO 8601 format date without a time. E.g. 2019-08-07.
     *
     * Generated from protobuf field <code>string dateTime = 1 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     */
    protected $dateTime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dateTime
     *           ISO 8601 format date without a time. E.g. 2019-08-07.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\CommonObjects::initOnce();
        parent::__construct($data);
    }

    /**
     * ISO 8601 format date without a time. E.g. 2019-08-07.
     *
     * Generated from protobuf field <code>string dateTime = 1 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * ISO 8601 format date without a time. E.g. 2019-08-07.
     *
     * Generated from protobuf field <code>string dateTime = 1 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->dateTime = $var;

        return $this;
    }

}

