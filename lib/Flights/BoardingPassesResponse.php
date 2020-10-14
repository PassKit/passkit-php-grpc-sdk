<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/flights/boarding_pass.proto

namespace Flights;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains an array of digital boarding passes.
 *
 * Generated from protobuf message <code>flights.BoardingPassesResponse</code>
 */
class BoardingPassesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * An array of boarding passes found relating to the PNR.
     *
     * Generated from protobuf field <code>repeated .io.PassBundle boardingPasses = 1;</code>
     */
    private $boardingPasses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\PassBundle[]|\Google\Protobuf\Internal\RepeatedField $boardingPasses
     *           An array of boarding passes found relating to the PNR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Flights\BoardingPass::initOnce();
        parent::__construct($data);
    }

    /**
     * An array of boarding passes found relating to the PNR.
     *
     * Generated from protobuf field <code>repeated .io.PassBundle boardingPasses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBoardingPasses()
    {
        return $this->boardingPasses;
    }

    /**
     * An array of boarding passes found relating to the PNR.
     *
     * Generated from protobuf field <code>repeated .io.PassBundle boardingPasses = 1;</code>
     * @param \Io\PassBundle[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBoardingPasses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\PassBundle::class);
        $this->boardingPasses = $arr;

        return $this;
    }

}

