<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: io/member/member.proto

namespace Members;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>members.ListRequestDeprecated</code>
 */
class ListRequestDeprecated extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string programId = 1;</code>
     */
    protected $programId = '';
    /**
     * Generated from protobuf field <code>.io.Pagination pagination = 2;</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $programId
     *     @type \Io\Pagination $pagination
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\Member\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string programId = 1;</code>
     * @return string
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Generated from protobuf field <code>string programId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProgramId($var)
    {
        GPBUtil::checkString($var, True);
        $this->programId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.Pagination pagination = 2;</code>
     * @return \Io\Pagination|null
     */
    public function getPagination()
    {
        return isset($this->pagination) ? $this->pagination : null;
    }

    public function hasPagination()
    {
        return isset($this->pagination);
    }

    public function clearPagination()
    {
        unset($this->pagination);
    }

    /**
     * Generated from protobuf field <code>.io.Pagination pagination = 2;</code>
     * @param \Io\Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Io\Pagination::class);
        $this->pagination = $var;

        return $this;
    }

}

