<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Crypto.
 *
 * (c) Ark Ecosystem <info@ark.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ArkEcosystem\Crypto\Networks;

use ArkEcosystem\Crypto\Contracts\Network;
use BitWasp\Bitcoin\Network\Network as TokenNetwork;
use BitWasp\Bitcoin\Network\NetworkFactory;

/**
 * This is the testnet network class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Testnet extends AbstractNetwork implements Network
{
    /**
     * {@inheritdoc}
     */
    public static function epoch(): string
    {
        return '2017-03-21T13:00:00.000Z';
    }

    /**
     * {@inheritdoc}
     */
    public static function nethash(): string
    {
        return 'd9acd04bde4234a81addb8482333b4ac906bed7be5a9970ce8ada428bd083192';
    }

    /**
     * {@inheritdoc}
     */
    public static function wif(): int
    {
        return 186;
    }

    /**
     * {@inheritdoc}
     */
    public static function factory(): TokenNetwork
    {
        return NetworkFactory::create('17', '00', 'ba', true)
            ->setHDPubByte('70617039')
            ->setHDPrivByte('70615956');
    }
}
