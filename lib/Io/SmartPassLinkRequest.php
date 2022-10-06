<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/distribution.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.SmartPassLinkRequest</code>
 */
class SmartPassLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The PassKit URL used to generate the link; found under your SmartPass link settings in the Portal: https://github.com/PassKit/smart-pass-link-from-csv-generator#how-to-use
     *
     * Generated from protobuf field <code>.io.Url projectDistributionUrl = 1;</code>
     */
    protected $projectDistributionUrl = null;
    /**
     * The fields for data to go into your SmartPass link: https://github.com/PassKit/smart-pass-link-from-csv-generator#available-field-names
     *
     * Generated from protobuf field <code>map<string, string> fields = 2;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Url $projectDistributionUrl
     *           The PassKit URL used to generate the link; found under your SmartPass link settings in the Portal: https://github.com/PassKit/smart-pass-link-from-csv-generator#how-to-use
     *     @type array|\Google\Protobuf\Internal\MapField $fields
     *           The fields for data to go into your SmartPass link: https://github.com/PassKit/smart-pass-link-from-csv-generator#available-field-names
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * The PassKit URL used to generate the link; found under your SmartPass link settings in the Portal: https://github.com/PassKit/smart-pass-link-from-csv-generator#how-to-use
     *
     * Generated from protobuf field <code>.io.Url projectDistributionUrl = 1;</code>
     * @return \Io\Url|null
     */
    public function getProjectDistributionUrl()
    {
        return $this->projectDistributionUrl;
    }

    public function hasProjectDistributionUrl()
    {
        return isset($this->projectDistributionUrl);
    }

    public function clearProjectDistributionUrl()
    {
        unset($this->projectDistributionUrl);
    }

    /**
     * The PassKit URL used to generate the link; found under your SmartPass link settings in the Portal: https://github.com/PassKit/smart-pass-link-from-csv-generator#how-to-use
     *
     * Generated from protobuf field <code>.io.Url projectDistributionUrl = 1;</code>
     * @param \Io\Url $var
     * @return $this
     */
    public function setProjectDistributionUrl($var)
    {
        GPBUtil::checkMessage($var, \Io\Url::class);
        $this->projectDistributionUrl = $var;

        return $this;
    }

    /**
     * The fields for data to go into your SmartPass link: https://github.com/PassKit/smart-pass-link-from-csv-generator#available-field-names
     *
     * Generated from protobuf field <code>map<string, string> fields = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * The fields for data to go into your SmartPass link: https://github.com/PassKit/smart-pass-link-from-csv-generator#available-field-names
     *
     * Generated from protobuf field <code>map<string, string> fields = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields = $arr;

        return $this;
    }

}

