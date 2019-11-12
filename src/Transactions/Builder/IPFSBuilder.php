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

namespace ArkEcosystem\Crypto\Transactions\Builder;

use ArkEcosystem\Crypto\Transactions\Types\IPFS;

/**
 * This is the ipfs transaction class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class IPFSBuilder extends AbstractTransactionBuilder
{
    public function ipfsAsset(string $ipfsId): self
    {
        $this->transaction->data['asset'] = [
            "ipfs" => $ipfsId
        ];

        return $this;
    }

    protected function getType(): int
    {
        return \ArkEcosystem\Crypto\Enums\Types::IPFS;
    }

    protected function getTransactionInstance(): object
    {
        return new IPFS();
    }
}