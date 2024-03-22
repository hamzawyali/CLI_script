<?php

namespace App\domain;

use App\domain\Contracts\OfferCollectionInterface;
use App\domain\Contracts\OfferDTOInterface;
use App\domain\Contracts\OfferInterface;
use Iterator;
use ArrayIterator;

class OfferCollection implements OfferCollectionInterface
{

    private array $offers;

    public function push(OfferDTOInterface $offer)
    {
        return $this->offers[] = $offer;
    }

    public function get(int $index): OfferInterface
    {
        return $this->offers[$index];
    }

    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->offers);
    }
}
