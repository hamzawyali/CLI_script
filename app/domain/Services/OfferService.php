<?php

namespace App\domain\Services;

use App\domain\Factories\ReaderFactory;

class OfferService
{

    private ReaderFactory $offerReader;
    public function __construct(ReaderFactory $offerReader)
    {
        $this->offerReader = $offerReader;
    }

    public function countByPriceRange(string $type, string $data, string $priceFrom, string $priceTo): int
    {
        $count = 0;
        $offers = $this->offerReader
            ->create($type)
            ->read($data)
            ->getIterator();

        foreach ($offers as $offer) {
            if(($offer->getPrice()) / 100 >= $priceFrom && ($offer->getPrice()) / 100 <= $priceTo) {
                $count++;
            }
        }

        return $count;
    }
}
