<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/image/image.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.CreateImageInput</code>
 */
class CreateImageInput extends \Google\Protobuf\Internal\Message
{
    /**
     * If multiple images types are uploaded, then the image type will be appended to the name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Image data can be either a base64 image or a url.
     *
     * Generated from protobuf field <code>.io.ImageData imageData = 2;</code>
     */
    protected $imageData = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           If multiple images types are uploaded, then the image type will be appended to the name.
     *     @type \Io\ImageData $imageData
     *           Image data can be either a base64 image or a url.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Image\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * If multiple images types are uploaded, then the image type will be appended to the name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * If multiple images types are uploaded, then the image type will be appended to the name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Image data can be either a base64 image or a url.
     *
     * Generated from protobuf field <code>.io.ImageData imageData = 2;</code>
     * @return \Io\ImageData
     */
    public function getImageData()
    {
        return isset($this->imageData) ? $this->imageData : null;
    }

    public function hasImageData()
    {
        return isset($this->imageData);
    }

    public function clearImageData()
    {
        unset($this->imageData);
    }

    /**
     * Image data can be either a base64 image or a url.
     *
     * Generated from protobuf field <code>.io.ImageData imageData = 2;</code>
     * @param \Io\ImageData $var
     * @return $this
     */
    public function setImageData($var)
    {
        GPBUtil::checkMessage($var, \Io\ImageData::class);
        $this->imageData = $var;

        return $this;
    }

}

