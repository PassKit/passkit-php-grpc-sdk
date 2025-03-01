<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Customise how data field is rendered on the front and back of the pass.
 *
 * Generated from protobuf message <code>io.GooglePayFieldRenderOptions</code>
 */
class GooglePayFieldRenderOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Determines which field the data will be mapped to on the Google Pay pass. Note, not all Google Pay fields support
     * labels or localization.  Where not supported, label and localization options will be ignored.
     *
     * Generated from protobuf field <code>.io.GooglePayField googlePayPosition = 1;</code>
     */
    protected $googlePayPosition = 0;
    /**
     * If the field type is a text module, the priority of the text module.
     *
     * Generated from protobuf field <code>uint32 textModulePriority = 2;</code>
     */
    protected $textModulePriority = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $googlePayPosition
     *           Determines which field the data will be mapped to on the Google Pay pass. Note, not all Google Pay fields support
     *           labels or localization.  Where not supported, label and localization options will be ignored.
     *     @type int $textModulePriority
     *           If the field type is a text module, the priority of the text module.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * Determines which field the data will be mapped to on the Google Pay pass. Note, not all Google Pay fields support
     * labels or localization.  Where not supported, label and localization options will be ignored.
     *
     * Generated from protobuf field <code>.io.GooglePayField googlePayPosition = 1;</code>
     * @return int
     */
    public function getGooglePayPosition()
    {
        return $this->googlePayPosition;
    }

    /**
     * Determines which field the data will be mapped to on the Google Pay pass. Note, not all Google Pay fields support
     * labels or localization.  Where not supported, label and localization options will be ignored.
     *
     * Generated from protobuf field <code>.io.GooglePayField googlePayPosition = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGooglePayPosition($var)
    {
        GPBUtil::checkEnum($var, \Io\GooglePayField::class);
        $this->googlePayPosition = $var;

        return $this;
    }

    /**
     * If the field type is a text module, the priority of the text module.
     *
     * Generated from protobuf field <code>uint32 textModulePriority = 2;</code>
     * @return int
     */
    public function getTextModulePriority()
    {
        return $this->textModulePriority;
    }

    /**
     * If the field type is a text module, the priority of the text module.
     *
     * Generated from protobuf field <code>uint32 textModulePriority = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTextModulePriority($var)
    {
        GPBUtil::checkUint32($var);
        $this->textModulePriority = $var;

        return $this;
    }

}

