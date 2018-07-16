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

namespace ArkEcosystem\Crypto\Identity;

use ArkEcosystem\Crypto\Configuration\Network as NetworkConfiguration;
use ArkEcosystem\Crypto\Contracts\Network;

/**
 * This is the wif class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class WIF
{
    /**
     * Derive the WIF from the given passphrase.
     *
     * @param string                                      $passphrase
     * @param \ArkEcosystem\Crypto\Contracts\Network|null $network
     *
     * @return string
     */
    public static function fromPassphrase(string $passphrase, Network $network = null): string
    {
        $network = $network ?? NetworkConfiguration::get();

        return PrivateKey::fromPassphrase($passphrase)->toWif($network->factory());
    }
}
