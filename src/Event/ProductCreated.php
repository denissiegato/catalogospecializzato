<?php


namespace App\Event;

class ProductCreated
{
    private $productId;

    public function __construct($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }
}