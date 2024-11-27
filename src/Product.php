<?php

namespace Codebase42\VideoPHooksAVisibility;

class Product
{
    private string $id;
    private string $name;
    private int $priceInCents;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @throws \Exception
     */
    public function setName(string $name): void
    {
        if (strlen($name) > 80) {
            throw new \Exception("Nome do produto muito grande");
        }

        $this->name = $name;
    }

    public function getPriceInCents(): int
    {
        return $this->priceInCents;
    }

    public function setPriceInCents(int $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    public function getPriceInReals(): float
    {
        return $this->priceInCents / 100;
    }

    public function setPriceInReals(float $priceInReals): void
    {
        $this->priceInCents = $priceInReals * 100;
    }
}
