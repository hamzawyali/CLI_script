<?php

namespace App\domain\Contracts;

interface OfferDTOInterface
{
    public function getOfferId(): int;

    public function getProductTitle(): string;

    public function getVendorId(): int;

    public function getPrice(): int;
}
