<?php

namespace Linkeys\UrlSigner\Support\ExpiryNormaliser\Normalisers;

class FromDateTime extends ExpiryNormaliser
{

    public function normalise($expiry)
    {
        if($expiry instanceof \DateTime) {
            return $expiry;
        }
    }

}