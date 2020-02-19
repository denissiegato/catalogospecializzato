<?php


namespace App\Event;

class ProductActivated
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