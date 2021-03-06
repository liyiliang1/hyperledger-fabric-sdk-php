<?php

/**
 * Copyright 2017 American Express Travel Related Services Company, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
 * or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

declare(strict_types=1);

namespace AmericanExpress\HyperledgerFabricClient\ProtoFactory;

use Hyperledger\Fabric\Protos\Peer\ChaincodeInvocationSpec;
use Hyperledger\Fabric\Protos\Peer\ChaincodeProposalPayload;

class ChaincodeProposalPayloadFactory
{
    /**
     * @param ChaincodeInvocationSpec $chaincodeInvocationSpec
     * @return ChaincodeProposalPayload
     */
    public static function fromChaincodeInvocationSpec(
        ChaincodeInvocationSpec $chaincodeInvocationSpec
    ): ChaincodeProposalPayload {
        $chaincodeProposalPayload = new ChaincodeProposalPayload();
        $chaincodeProposalPayload->setInput($chaincodeInvocationSpec->serializeToString());

        return $chaincodeProposalPayload;
    }

    /**
     * @param array $args
     * @return ChaincodeProposalPayload
     */
    public static function fromChaincodeInvocationSpecArgs(array $args): ChaincodeProposalPayload
    {
        $chaincodeInvocationSpec = ChaincodeInvocationSpecFactory::fromArgs($args);

        return self::fromChaincodeInvocationSpec($chaincodeInvocationSpec);
    }
}
