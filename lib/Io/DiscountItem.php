<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/transaction.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.DiscountItem</code>
 */
class DiscountItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Discount code
     *
     * Generated from protobuf field <code>string discountCode = 1;</code>
     */
    protected $discountCode = '';
    /**
     * Specific voucher code
     *
     * Generated from protobuf field <code>string voucherCode = 2;</code>
     */
    protected $voucherCode = '';
    /**
     * The discount amount
     *
     * Generated from protobuf field <code>float amount = 4;</code>
     */
    protected $amount = 0.0;
    /**
     * The discount item name
     *
     * Generated from protobuf field <code>string itemName = 5;</code>
     */
    protected $itemName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $discountCode
     *           Discount code
     *     @type string $voucherCode
     *           Specific voucher code
     *     @type float $amount
     *           The discount amount
     *     @type string $itemName
     *           The discount item name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Discount code
     *
     * Generated from protobuf field <code>string discountCode = 1;</code>
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Discount code
     *
     * Generated from protobuf field <code>string discountCode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscountCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->discountCode = $var;

        return $this;
    }

    /**
     * Specific voucher code
     *
     * Generated from protobuf field <code>string voucherCode = 2;</code>
     * @return string
     */
    public function getVoucherCode()
    {
        return $this->voucherCode;
    }

    /**
     * Specific voucher code
     *
     * Generated from protobuf field <code>string voucherCode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVoucherCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->voucherCode = $var;

        return $this;
    }

    /**
     * The discount amount
     *
     * Generated from protobuf field <code>float amount = 4;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The discount amount
     *
     * Generated from protobuf field <code>float amount = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkFloat($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * The discount item name
     *
     * Generated from protobuf field <code>string itemName = 5;</code>
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * The discount item name
     *
     * Generated from protobuf field <code>string itemName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setItemName($var)
    {
        GPBUtil::checkString($var, True);
        $this->itemName = $var;

        return $this;
    }

}

