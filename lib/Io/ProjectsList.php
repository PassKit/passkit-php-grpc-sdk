<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: io/user/user.proto

namespace Io;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.ProjectsList</code>
 */
class ProjectsList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string projects = 1;</code>
     */
    private $projects;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $projects
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Io\User\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string projects = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Generated from protobuf field <code>repeated string projects = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProjects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->projects = $arr;

        return $this;
    }

}

