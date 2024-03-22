<?php

namespace App\domain\Factories;

use App\domain\Contracts\ReaderInterface;
use App\domain\Readers\JsonReader;
use http\Exception\InvalidArgumentException;

class ReaderFactory
{
    public function create(string $format): ReaderInterface
    {
        return match ($format) {
            'json' => new JsonReader(),
            'default' => throw new InvalidArgumentException("Invalid format $format"),
        };
    }
}
