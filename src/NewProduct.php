<?php

namespace Codebase42\VideoPHooksAVisibility;

class NewProduct
{
    private(set) string $id;

    public string $name {
        get => $this->name;
        set {
            if (strlen($value) > 80) {
                throw new \Exception("Nome do produto muito grande");
            }

            $this->name = $value;
        }
    }

    public int $priceInCents;

    public float $priceInReals {
        get => $this->priceInCents / 100;
        set => $this->priceInCents = $value * 100;
    }

    public function __construct()
    {
        $this->id = uniqid();
    }
}
