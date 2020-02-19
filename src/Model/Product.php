<?php


namespace App\Model;


use Broadway\ReadModel\SerializableReadModel;

class Product implements SerializableReadModel
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public static function deserialize(array $data)
    {
        return new static($data['id']);
    }

    public function serialize(): array
    {
        return [
            'id' => $this->id,
        ];
    }
}