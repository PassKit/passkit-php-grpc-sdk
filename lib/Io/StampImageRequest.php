<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/image/image.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.StampImageRequest</code>
 */
class StampImageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * PassKit Image Id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * a bitmask indicating the stamped status (E.g. a value of 22 indicates stamps 2, 3 and 5 are stamped).
     *
     * Generated from protobuf field <code>uint64 status = 2;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           PassKit Image Id.
     *     @type int|string $status
     *           a bitmask indicating the stamped status (E.g. a value of 22 indicates stamps 2, 3 and 5 are stamped).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Image\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * PassKit Image Id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * PassKit Image Id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * a bitmask indicating the stamped status (E.g. a value of 22 indicates stamps 2, 3 and 5 are stamped).
     *
     * Generated from protobuf field <code>uint64 status = 2;</code>
     * @return int|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * a bitmask indicating the stamped status (E.g. a value of 22 indicates stamps 2, 3 and 5 are stamped).
     *
     * Generated from protobuf field <code>uint64 status = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkUint64($var);
        $this->status = $var;

        return $this;
    }

}
