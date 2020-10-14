<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/program.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>members.PointsType</code>
 */
class PointsType extends \Google\Protobuf\Internal\Message
{
    /**
     * The balance type.
     *
     * Generated from protobuf field <code>.members.BalanceType balanceType = 1;</code>
     */
    protected $balanceType = 0;
    /**
     * The currency code; only needs to be provided if balance type equals BALANCE_TYPE_MONEY.
     *
     * Generated from protobuf field <code>string currencyCode = 2;</code>
     */
    protected $currencyCode = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $balanceType
     *           The balance type.
     *     @type string $currencyCode
     *           The currency code; only needs to be provided if balance type equals BALANCE_TYPE_MONEY.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Member\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * The balance type.
     *
     * Generated from protobuf field <code>.members.BalanceType balanceType = 1;</code>
     * @return int
     */
    public function getBalanceType()
    {
        return $this->balanceType;
    }

    /**
     * The balance type.
     *
     * Generated from protobuf field <code>.members.BalanceType balanceType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBalanceType($var)
    {
        GPBUtil::checkEnum($var, \Members\BalanceType::class);
        $this->balanceType = $var;

        return $this;
    }

    /**
     * The currency code; only needs to be provided if balance type equals BALANCE_TYPE_MONEY.
     *
     * Generated from protobuf field <code>string currencyCode = 2;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * The currency code; only needs to be provided if balance type equals BALANCE_TYPE_MONEY.
     *
     * Generated from protobuf field <code>string currencyCode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currencyCode = $var;

        return $this;
    }

}

