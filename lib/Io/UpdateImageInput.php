<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/image/image.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.UpdateImageInput</code>
 */
class UpdateImageInput extends \Google\Protobuf\Internal\Message
{
    /**
     * The image id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Optional, if omitted, the original name will remain the same.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Optional, if omitted, the original image will remain the same.
     *
     * Generated from protobuf field <code>string imageData = 3;</code>
     */
    protected $imageData = '';
    /**
     * Optional, provided localizations will be added/replaced, existing omitted localizations will remain in place.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedImageData = 4;</code>
     */
    protected $localizedImageData = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The image id.
     *     @type string $name
     *           Optional, if omitted, the original name will remain the same.
     *     @type string $imageData
     *           Optional, if omitted, the original image will remain the same.
     *     @type \Io\LocalizedString $localizedImageData
     *           Optional, provided localizations will be added/replaced, existing omitted localizations will remain in place.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Image\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * The image id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The image id.
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
     * Optional, if omitted, the original name will remain the same.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional, if omitted, the original name will remain the same.
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Optional, if omitted, the original image will remain the same.
     *
     * Generated from protobuf field <code>string imageData = 3;</code>
     * @return string
     */
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * Optional, if omitted, the original image will remain the same.
     *
     * Generated from protobuf field <code>string imageData = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setImageData($var)
    {
        GPBUtil::checkString($var, True);
        $this->imageData = $var;

        return $this;
    }

    /**
     * Optional, provided localizations will be added/replaced, existing omitted localizations will remain in place.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedImageData = 4;</code>
     * @return \Io\LocalizedString|null
     */
    public function getLocalizedImageData()
    {
        return isset($this->localizedImageData) ? $this->localizedImageData : null;
    }

    public function hasLocalizedImageData()
    {
        return isset($this->localizedImageData);
    }

    public function clearLocalizedImageData()
    {
        unset($this->localizedImageData);
    }

    /**
     * Optional, provided localizations will be added/replaced, existing omitted localizations will remain in place.
     *
     * Generated from protobuf field <code>.io.LocalizedString localizedImageData = 4;</code>
     * @param \Io\LocalizedString $var
     * @return $this
     */
    public function setLocalizedImageData($var)
    {
        GPBUtil::checkMessage($var, \Io\LocalizedString::class);
        $this->localizedImageData = $var;

        return $this;
    }

}

