<?php

namespace App\domain\Readers;

use App\domain\Contracts\OfferCollectionInterface;
use App\domain\Contracts\ReaderInterface;
use App\domain\DTO\OfferDTO;
use App\domain\OfferCollection;

class JsonReader implements ReaderInterface
{

    public function read(string $input): OfferCollectionInterface
    {
        $offersData = json_decode($input, true);
        $offerCollection = new OfferCollection();

        foreach ($offersData as $offerData) {
            $offer = new OfferDTO(...$offerData);
            $offerCollection->add($offer);
        }

        return $offerCollection;
    }
}
