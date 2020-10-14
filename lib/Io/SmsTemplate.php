<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/distribution.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SMS contains details for a sending an sms to customers.
 * Uses the default PassKit SMS provider and sending credentials.
 *
 * Generated from protobuf message <code>io.SmsTemplate</code>
 */
class SmsTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string content = 1 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     */
    protected $content = '';
    /**
     * localized content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedContent = 2 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     */
    protected $localizedContent = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *     @type \Io\LocalizedString $localizedContent
     *           localized content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string content = 1 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>string content = 1 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * localized content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedContent = 2 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     * @return \Io\LocalizedString
     */
    public function getLocalizedContent()
    {
        return isset($this->localizedContent) ? $this->localizedContent : null;
    }

    public function hasLocalizedContent()
    {
        return isset($this->localizedContent);
    }

    public function clearLocalizedContent()
    {
        unset($this->localizedContent);
    }

    /**
     * localized content of the SMS; needs to be limited to 70 unicode characters. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedContent = 2 [(.grpc.gateway.protoc_gen_swagger.options.openapiv2_field) = {</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedContent($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedContent = $var;

        return $this;
    }

}

