<?php

namespace Dbourgon\Invoicer\Domain\ValueObject;

readonly class Integer
{
    public function __construct(private int $value)
    {
    }

    public function value(): int
    {
        return $this->value;
    }
}