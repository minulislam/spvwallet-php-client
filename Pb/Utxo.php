<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.Utxo</code>
 */
class Utxo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string txid = 1;</code>
     */
    private $txid = '';
    /**
     * Generated from protobuf field <code>uint32 index = 2;</code>
     */
    private $index = 0;
    /**
     * Generated from protobuf field <code>uint64 value = 3;</code>
     */
    private $value = 0;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string txid = 1;</code>
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * Generated from protobuf field <code>string txid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->txid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 2;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 value = 3;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>uint64 value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkUint64($var);
        $this->value = $var;

        return $this;
    }

}

