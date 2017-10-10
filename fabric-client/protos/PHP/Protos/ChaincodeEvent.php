<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: peer/chaincode_event.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *ChaincodeEvent is used for events and registrations that are specific to chaincode
 *string type - "chaincode"
 * </pre>
 *
 * Protobuf type <code>protos.ChaincodeEvent</code>
 */
class ChaincodeEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string chaincode_id = 1;</code>
     */
    private $chaincode_id = '';
    /**
     * <code>string tx_id = 2;</code>
     */
    private $tx_id = '';
    /**
     * <code>string event_name = 3;</code>
     */
    private $event_name = '';
    /**
     * <code>bytes payload = 4;</code>
     */
    private $payload = '';

    public function __construct() {
        \GPBMetadata\Peer\ChaincodeEvent::initOnce();
        parent::__construct();
    }

    /**
     * <code>string chaincode_id = 1;</code>
     */
    public function getChaincodeId()
    {
        return $this->chaincode_id;
    }

    /**
     * <code>string chaincode_id = 1;</code>
     */
    public function setChaincodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->chaincode_id = $var;
    }

    /**
     * <code>string tx_id = 2;</code>
     */
    public function getTxId()
    {
        return $this->tx_id;
    }

    /**
     * <code>string tx_id = 2;</code>
     */
    public function setTxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tx_id = $var;
    }

    /**
     * <code>string event_name = 3;</code>
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * <code>string event_name = 3;</code>
     */
    public function setEventName($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_name = $var;
    }

    /**
     * <code>bytes payload = 4;</code>
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * <code>bytes payload = 4;</code>
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;
    }

}
