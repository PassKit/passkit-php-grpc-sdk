<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/image/image.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.ProfileImageInput</code>
 */
class ProfileImageInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Provide an image URL or base64 image data.
     *
     * Generated from protobuf field <code>string imageData = 1;</code>
     */
    protected $imageData = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $imageData
     *           Provide an image URL or base64 image data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Image\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Provide an image URL or base64 image data.
     *
     * Generated from protobuf field <code>string imageData = 1;</code>
     * @return string
     */
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * Provide an image URL or base64 image data.
     *
     * Generated from protobuf field <code>string imageData = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImageData($var)
    {
        GPBUtil::checkString($var, True);
        $this->imageData = $var;

        return $this;
    }

}
