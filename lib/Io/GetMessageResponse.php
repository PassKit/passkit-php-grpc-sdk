<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/common/message.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.GetMessageResponse</code>
 */
class GetMessageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.io.Message message = 1;</code>
     */
    protected $message = null;
    /**
     * Generated from protobuf field <code>.io.MessageStatus status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 recipients = 3;</code>
     */
    protected $recipients = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp distributedAt = 4;</code>
     */
    protected $distributedAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp withdrawnAt = 5;</code>
     */
    protected $withdrawnAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 6;</code>
     */
    protected $createdAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updatedAt = 7;</code>
     */
    protected $updatedAt = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Message $message
     *     @type int $status
     *     @type int $recipients
     *     @type \Google\Protobuf\Timestamp $distributedAt
     *     @type \Google\Protobuf\Timestamp $withdrawnAt
     *     @type \Google\Protobuf\Timestamp $createdAt
     *     @type \Google\Protobuf\Timestamp $updatedAt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Common\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.Message message = 1;</code>
     * @return \Io\Message|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.io.Message message = 1;</code>
     * @param \Io\Message $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Io\Message::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.MessageStatus status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.io.MessageStatus status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\MessageStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 recipients = 3;</code>
     * @return int
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * Generated from protobuf field <code>uint32 recipients = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRecipients($var)
    {
        GPBUtil::checkUint32($var);
        $this->recipients = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp distributedAt = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDistributedAt()
    {
        return $this->distributedAt;
    }

    public function hasDistributedAt()
    {
        return isset($this->distributedAt);
    }

    public function clearDistributedAt()
    {
        unset($this->distributedAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp distributedAt = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDistributedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->distributedAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp withdrawnAt = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getWithdrawnAt()
    {
        return $this->withdrawnAt;
    }

    public function hasWithdrawnAt()
    {
        return isset($this->withdrawnAt);
    }

    public function clearWithdrawnAt()
    {
        unset($this->withdrawnAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp withdrawnAt = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setWithdrawnAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->withdrawnAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 6;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp updatedAt = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp updatedAt = 7;</code>
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

