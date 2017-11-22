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

namespace AmericanExpress\HyperledgerFabricClient;

use AmericanExpress\HyperledgerFabricClient\Config\ClientConfigFactory;
use AmericanExpress\HyperledgerFabricClient\Config\ClientConfigInterface;
use AmericanExpress\HyperledgerFabricClient\Nonce\RandomBytesNonceGenerator;
use AmericanExpress\HyperledgerFabricClient\Signatory\MdanterEccSignatoryFactory;
use AmericanExpress\HyperledgerFabricClient\Transaction\TransactionContextFactory;
use AmericanExpress\HyperledgerFabricClient\Transaction\TxIdFactory;
use AmericanExpress\HyperledgerFabricClient\ValueObject\HashAlgorithm;

class ChannelFactory
{
    /**
     * @param ClientConfigInterface $config
     * @return Channel
     */
    public static function fromConfig(ClientConfigInterface $config): Channel
    {
        $endorserClients = new EndorserClientManager();

        $transactionContextFactory = new TransactionContextFactory(
            new RandomBytesNonceGenerator($config->getNonceSize()),
            new TxIdFactory(HashAlgorithm::fromConfig($config))
        );

        $signatory = MdanterEccSignatoryFactory::fromConfig($config);

        return new Channel($endorserClients, $transactionContextFactory, $signatory);
    }

    /**
     * @param \SplFileObject $file
     * @return Channel
     */
    public static function fromConfigFile(\SplFileObject $file)
    {
        $config = ClientConfigFactory::fromFile($file);

        return self::fromConfig($config);
    }
}