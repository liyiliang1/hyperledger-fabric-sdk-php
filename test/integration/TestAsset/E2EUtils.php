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

namespace AmericanExpressTest\Integration\TestAsset;

use AmericanExpress\HyperledgerFabricClient\ClientFactory;
use AmericanExpress\HyperledgerFabricClient\Config\ClientConfigFactory;
use AmericanExpress\HyperledgerFabricClient\Peer\PeerFactory;
use AmericanExpress\HyperledgerFabricClient\Proposal\ResponseCollection;
use AmericanExpress\HyperledgerFabricClient\Transaction\TransactionOptions;
use Hyperledger\Fabric\Protos\Peer\ChaincodeID;

class E2EUtils
{
    /**
     * @param string $org
     * @return ResponseCollection
     */
    public function queryChaincode(string $org): ResponseCollection
    {
        $config = ClientConfigFactory::fromFile(new \SplFileObject(__DIR__ . '/../config.php'));
        $options = [
            'peers' => [
                (new PeerFactory())->fromArray([
                    'requests' => 'localhost:7051',
                ]),
            ],
        ];

        return ClientFactory::fromConfig($config, $org)
            ->getChannel('foo')
            ->queryByChainCode(
                new TransactionOptions($options),
                (new ChaincodeID())
                    ->setPath('github.com/example_cc')
                    ->setName('example_cc')
                    ->setVersion('1'),
                [
                    'invoke',
                    'query',
                    'a',
                ]
            );
    }
}
