<?php

declare(strict_types=1);

namespace Encryption\Cipher\DES;

use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\decrypt;
use Encryption\Traits\encryptWithPadding;

class Desofb extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'DES-OFB';

    use encryptWithPadding, decrypt;
}