<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.Header</code>
 */
class Header extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string entry = 1;</code>
     */
    private $entry = '';

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string entry = 1;</code>
     * @return string
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Generated from protobuf field <code>string entry = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntry($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry = $var;

        return $this;
    }

}

