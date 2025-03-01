<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/member/program.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>members.CustomExternalId</code>
 */
class CustomExternalId extends \Google\Protobuf\Internal\Message
{
    /**
     * Field name which becomes a source of external id value. Available unique names are: null, person.emailAddress, person.mobileNumber.
     *
     * Generated from protobuf field <code>string fieldUniqueName = 1;</code>
     */
    protected $fieldUniqueName = '';
    /**
     * Error message shown when provided value has been taken already.
     *
     * Generated from protobuf field <code>string errorMessage = 2;</code>
     */
    protected $errorMessage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fieldUniqueName
     *           Field name which becomes a source of external id value. Available unique names are: null, person.emailAddress, person.mobileNumber.
     *     @type string $errorMessage
     *           Error message shown when provided value has been taken already.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Member\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Field name which becomes a source of external id value. Available unique names are: null, person.emailAddress, person.mobileNumber.
     *
     * Generated from protobuf field <code>string fieldUniqueName = 1;</code>
     * @return string
     */
    public function getFieldUniqueName()
    {
        return $this->fieldUniqueName;
    }

    /**
     * Field name which becomes a source of external id value. Available unique names are: null, person.emailAddress, person.mobileNumber.
     *
     * Generated from protobuf field <code>string fieldUniqueName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldUniqueName($var)
    {
        GPBUtil::checkString($var, True);
        $this->fieldUniqueName = $var;

        return $this;
    }

    /**
     * Error message shown when provided value has been taken already.
     *
     * Generated from protobuf field <code>string errorMessage = 2;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Error message shown when provided value has been taken already.
     *
     * Generated from protobuf field <code>string errorMessage = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->errorMessage = $var;

        return $this;
    }

}

