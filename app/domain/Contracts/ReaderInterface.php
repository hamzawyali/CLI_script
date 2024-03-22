<?php

namespace App\domain\Contracts;

interface ReaderInterface
{
    /**
     * Read in incoming data and parse to objects
     */
    public function read(string $input): OfferCollectionInterface;
}
