<?php

namespace LidoNation\Contracts;

interface CardanoWallet {
    public function utxos(): array;
}