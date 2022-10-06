<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/filter.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.FilterGroup</code>
 */
class FilterGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Use AND or OR conditions to join each filter field. E.g. (tier_id = bronze AND tier_id = silver) (tier_id = bronze OR tier_id = silver)
     *
     * Generated from protobuf field <code>.io.Operator condition = 1;</code>
     */
    protected $condition = 0;
    /**
     * Filter fields.
     *
     * Generated from protobuf field <code>repeated .io.FieldFilter fieldFilters = 2;</code>
     */
    private $fieldFilters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $condition
     *           Use AND or OR conditions to join each filter field. E.g. (tier_id = bronze AND tier_id = silver) (tier_id = bronze OR tier_id = silver)
     *     @type array<\Io\FieldFilter>|\Google\Protobuf\Internal\RepeatedField $fieldFilters
     *           Filter fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Filter::initOnce();
        parent::__construct($data);
    }

    /**
     * Use AND or OR conditions to join each filter field. E.g. (tier_id = bronze AND tier_id = silver) (tier_id = bronze OR tier_id = silver)
     *
     * Generated from protobuf field <code>.io.Operator condition = 1;</code>
     * @return int
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Use AND or OR conditions to join each filter field. E.g. (tier_id = bronze AND tier_id = silver) (tier_id = bronze OR tier_id = silver)
     *
     * Generated from protobuf field <code>.io.Operator condition = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkEnum($var, \Io\Operator::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * Filter fields.
     *
     * Generated from protobuf field <code>repeated .io.FieldFilter fieldFilters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldFilters()
    {
        return $this->fieldFilters;
    }

    /**
     * Filter fields.
     *
     * Generated from protobuf field <code>repeated .io.FieldFilter fieldFilters = 2;</code>
     * @param array<\Io\FieldFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\FieldFilter::class);
        $this->fieldFilters = $arr;

        return $this;
    }

}

