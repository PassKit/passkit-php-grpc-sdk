<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/semantics.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.SemanticSeat</code>
 */
class SemanticSeat extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string seatDescription = 1;</code>
     */
    protected $seatDescription = '';
    /**
     * Generated from protobuf field <code>string seatIdentifier = 2;</code>
     */
    protected $seatIdentifier = '';
    /**
     * Generated from protobuf field <code>string seatNumber = 3;</code>
     */
    protected $seatNumber = '';
    /**
     * Generated from protobuf field <code>string seatRow = 4;</code>
     */
    protected $seatRow = '';
    /**
     * Generated from protobuf field <code>string seatSection = 5;</code>
     */
    protected $seatSection = '';
    /**
     * Generated from protobuf field <code>string seatType = 6;</code>
     */
    protected $seatType = '';
    /**
     * Generated from protobuf field <code>string seatSectionColor = 7;</code>
     */
    protected $seatSectionColor = '';
    /**
     * Generated from protobuf field <code>string seatLevel = 8;</code>
     */
    protected $seatLevel = '';
    /**
     * Generated from protobuf field <code>string seatAisle = 9;</code>
     */
    protected $seatAisle = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $seatDescription
     *     @type string $seatIdentifier
     *     @type string $seatNumber
     *     @type string $seatRow
     *     @type string $seatSection
     *     @type string $seatType
     *     @type string $seatSectionColor
     *     @type string $seatLevel
     *     @type string $seatAisle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Semantics::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string seatDescription = 1;</code>
     * @return string
     */
    public function getSeatDescription()
    {
        return $this->seatDescription;
    }

    /**
     * Generated from protobuf field <code>string seatDescription = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatDescription = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatIdentifier = 2;</code>
     * @return string
     */
    public function getSeatIdentifier()
    {
        return $this->seatIdentifier;
    }

    /**
     * Generated from protobuf field <code>string seatIdentifier = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatIdentifier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatNumber = 3;</code>
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Generated from protobuf field <code>string seatNumber = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatRow = 4;</code>
     * @return string
     */
    public function getSeatRow()
    {
        return $this->seatRow;
    }

    /**
     * Generated from protobuf field <code>string seatRow = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatRow($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatRow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatSection = 5;</code>
     * @return string
     */
    public function getSeatSection()
    {
        return $this->seatSection;
    }

    /**
     * Generated from protobuf field <code>string seatSection = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatSection($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatSection = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatType = 6;</code>
     * @return string
     */
    public function getSeatType()
    {
        return $this->seatType;
    }

    /**
     * Generated from protobuf field <code>string seatType = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatType($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatSectionColor = 7;</code>
     * @return string
     */
    public function getSeatSectionColor()
    {
        return $this->seatSectionColor;
    }

    /**
     * Generated from protobuf field <code>string seatSectionColor = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatSectionColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatSectionColor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatLevel = 8;</code>
     * @return string
     */
    public function getSeatLevel()
    {
        return $this->seatLevel;
    }

    /**
     * Generated from protobuf field <code>string seatLevel = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatLevel($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatLevel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string seatAisle = 9;</code>
     * @return string
     */
    public function getSeatAisle()
    {
        return $this->seatAisle;
    }

    /**
     * Generated from protobuf field <code>string seatAisle = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSeatAisle($var)
    {
        GPBUtil::checkString($var, True);
        $this->seatAisle = $var;

        return $this;
    }

}

