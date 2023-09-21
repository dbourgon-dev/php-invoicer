<?php

namespace Dbourgon\Invoicer\Domain\ValueObject;

readonly class StringValue
{
    public function __construct(private string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }
}