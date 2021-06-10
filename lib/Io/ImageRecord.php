<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/image/image.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.ImageRecord</code>
 */
class ImageRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string url = 3;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>.io.ImageUse use = 5;</code>
     */
    protected $use = 0;
    /**
     * Generated from protobuf field <code>repeated .io.LanguageCode languages = 6;</code>
     */
    private $languages;
    /**
     * Generated from protobuf field <code>string ownerUsername = 7;</code>
     */
    protected $ownerUsername = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 8;</code>
     */
    protected $createdAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updatedAt = 9;</code>
     */
    protected $updatedAt = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type string $url
     *     @type int $use
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $languages
     *     @type string $ownerUsername
     *     @type \Google\Protobuf\Timestamp $createdAt
     *     @type \Google\Protobuf\Timestamp $updatedAt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Image\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
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
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.ImageUse use = 5;</code>
     * @return int
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Generated from protobuf field <code>.io.ImageUse use = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setUse($var)
    {
        GPBUtil::checkEnum($var, \Io\ImageUse::class);
        $this->use = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .io.LanguageCode languages = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Generated from protobuf field <code>repeated .io.LanguageCode languages = 6;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Io\LanguageCode::class);
        $this->languages = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ownerUsername = 7;</code>
     * @return string
     */
    public function getOwnerUsername()
    {
        return $this->ownerUsername;
    }

    /**
     * Generated from protobuf field <code>string ownerUsername = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->ownerUsername = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return isset($this->createdAt) ? $this->createdAt : null;
    }

    public function hasCreatedAt()
    {
        return isset($this->createdAt);
    }

    public function clearCreatedAt()
    {
        unset($this->createdAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->createdAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updatedAt = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdatedAt()
    {
        return isset($this->updatedAt) ? $this->updatedAt : null;
    }

    public function hasUpdatedAt()
    {
        return isset($this->updatedAt);
    }

    public function clearUpdatedAt()
    {
        unset($this->updatedAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updatedAt = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updatedAt = $var;

        return $this;
    }

}

