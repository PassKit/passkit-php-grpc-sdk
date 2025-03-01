<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/template.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.BindingInfo</code>
 */
class BindingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Name describing the pass that will be displayed in the dialog when the user is required to authenticate.
     *
     * Generated from protobuf field <code>string displayableName = 1;</code>
     */
    protected $displayableName = '';
    /**
     * If the user encounters an error installing the pass (usually because the pass is already installed in another Apple account), a button will be displayed to link to a web page offering help. If no URL is provided a PassKit URL will be used (https://help.passkit.com/en/articles/10056843-pass-account-binding).
     *
     * Generated from protobuf field <code>string learnMoreUrl = 2;</code>
     */
    protected $learnMoreUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $displayableName
     *           Name describing the pass that will be displayed in the dialog when the user is required to authenticate.
     *     @type string $learnMoreUrl
     *           If the user encounters an error installing the pass (usually because the pass is already installed in another Apple account), a button will be displayed to link to a web page offering help. If no URL is provided a PassKit URL will be used (https://help.passkit.com/en/articles/10056843-pass-account-binding).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Template::initOnce();
        parent::__construct($data);
    }

    /**
     * Name describing the pass that will be displayed in the dialog when the user is required to authenticate.
     *
     * Generated from protobuf field <code>string displayableName = 1;</code>
     * @return string
     */
    public function getDisplayableName()
    {
        return $this->displayableName;
    }

    /**
     * Name describing the pass that will be displayed in the dialog when the user is required to authenticate.
     *
     * Generated from protobuf field <code>string displayableName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayableName = $var;

        return $this;
    }

    /**
     * If the user encounters an error installing the pass (usually because the pass is already installed in another Apple account), a button will be displayed to link to a web page offering help. If no URL is provided a PassKit URL will be used (https://help.passkit.com/en/articles/10056843-pass-account-binding).
     *
     * Generated from protobuf field <code>string learnMoreUrl = 2;</code>
     * @return string
     */
    public function getLearnMoreUrl()
    {
        return $this->learnMoreUrl;
    }

    /**
     * If the user encounters an error installing the pass (usually because the pass is already installed in another Apple account), a button will be displayed to link to a web page offering help. If no URL is provided a PassKit URL will be used (https://help.passkit.com/en/articles/10056843-pass-account-binding).
     *
     * Generated from protobuf field <code>string learnMoreUrl = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLearnMoreUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->learnMoreUrl = $var;

        return $this;
    }

}

