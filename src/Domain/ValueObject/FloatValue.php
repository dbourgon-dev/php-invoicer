<?php

namespace Dbourgon\Invoicer\Domain\ValueObject;

readonly class FloatValue
{
    public function __construct(private float $value)
    {
    }

    /**
     * @return float
     */
    public function value(): float
    {
        return $this->value;
    }
}