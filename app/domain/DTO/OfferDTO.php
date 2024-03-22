<?php

namespace App\domain\DTO;

class OfferDTO
{
    /**
     * @var int
     */
    private int $offerId;
    /**
     * @var string
     */
    private string $productTitle;
    /**
     * @var int
     */
    private int $vendorId;
    /**
     * @var int
     */
    private int $price;

    /**
     * @param int $offerId
     * @param string $productTitle
     * @param int $vendorId
     * @param float $price
     */
    public function __construct(
        int    $offerId,
        string $productTitle,
        int    $vendorId,
        float  $price
    )
    {
        $this->offerId = $offerId;
        $this->productTitle = $productTitle;
        $this->vendorId = $vendorId;
        $this->price = $price * 100;
    }

    /**
     * @return int
     */
    public function getOfferId(): int
    {
        return $this->offerId;
    }

    /**
     * @return string
     */
    public function getProductTitle(): string
    {
        return $this->productTitle;
    }

    /**
     * @return int
     */
    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
