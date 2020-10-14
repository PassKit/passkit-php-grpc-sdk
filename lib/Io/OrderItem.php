<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/common/transaction.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.OrderItem</code>
 */
class OrderItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The item price
     *
     * Generated from protobuf field <code>float amount = 1;</code>
     */
    protected $amount = 0.0;
    /**
     * Tax on the item
     *
     * Generated from protobuf field <code>float tax = 2;</code>
     */
    protected $tax = 0.0;
    /**
     * The item name
     *
     * Generated from protobuf field <code>string itemName = 3;</code>
     */
    protected $itemName = '';
    /**
     * The quantity of items ordered
     *
     * Generated from protobuf field <code>int32 quantity = 4;</code>
     */
    protected $quantity = 0;
    /**
     * The SKU as used in the system generating the transaction
     *
     * Generated from protobuf field <code>string sku = 5;</code>
     */
    protected $sku = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $amount
     *           The item price
     *     @type float $tax
     *           Tax on the item
     *     @type string $itemName
     *           The item name
     *     @type int $quantity
     *           The quantity of items ordered
     *     @type string $sku
     *           The SKU as used in the system generating the transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * The item price
     *
     * Generated from protobuf field <code>float amount = 1;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The item price
     *
     * Generated from protobuf field <code>float amount = 1;</code>
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
     * Tax on the item
     *
     * Generated from protobuf field <code>float tax = 2;</code>
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Tax on the item
     *
     * Generated from protobuf field <code>float tax = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTax($var)
    {
        GPBUtil::checkFloat($var);
        $this->tax = $var;

        return $this;
    }

    /**
     * The item name
     *
     * Generated from protobuf field <code>string itemName = 3;</code>
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * The item name
     *
     * Generated from protobuf field <code>string itemName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setItemName($var)
    {
        GPBUtil::checkString($var, True);
        $this->itemName = $var;

        return $this;
    }

    /**
     * The quantity of items ordered
     *
     * Generated from protobuf field <code>int32 quantity = 4;</code>
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The quantity of items ordered
     *
     * Generated from protobuf field <code>int32 quantity = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt32($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     * The SKU as used in the system generating the transaction
     *
     * Generated from protobuf field <code>string sku = 5;</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * The SKU as used in the system generating the transaction
     *
     * Generated from protobuf field <code>string sku = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

}
