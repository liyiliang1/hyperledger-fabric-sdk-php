<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Hyperledger\Fabric\Protos\Common;

/**
 * This enum enlists indexes of the block metadata array
 *
 * Protobuf enum <code>Common\BlockMetadataIndex</code>
 */
class BlockMetadataIndex
{
    /**
     * Block metadata array position for block signatures
     *
     * Generated from protobuf enum <code>SIGNATURES = 0;</code>
     */
    const SIGNATURES = 0;
    /**
     * Block metadata array position to store last configuration block sequence number
     *
     * Generated from protobuf enum <code>LAST_CONFIG = 1;</code>
     */
    const LAST_CONFIG = 1;
    /**
     * Block metadata array position to store serialized bit array filter of invalid transactions
     *
     * Generated from protobuf enum <code>TRANSACTIONS_FILTER = 2;</code>
     */
    const TRANSACTIONS_FILTER = 2;
    /**
     * Block metadata array position to store operational metadata for orderers
     *
     * Generated from protobuf enum <code>ORDERER = 3;</code>
     */
    const ORDERER = 3;
}

