<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.RawTx</code>
 */
class RawTx extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes tx = 1;</code>
     */
    private $tx = '';

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes tx = 1;</code>
     * @return string
     */
    public function getTx()
    {
        return $this->tx;
    }

    /**
     * Generated from protobuf field <code>bytes tx = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTx($var)
    {
        GPBUtil::checkString($var, False);
        $this->tx = $var;

        return $this;
    }

}

