<?php

namespace Dbourgon\Invoicer\Domain\ValueObject;

use DateTime;
readonly class DateTimeValue
{
    public function __construct(private DateTime $value)
    {
    }

    /**
     * @return DateTime
     */
    public function value(): DateTime
    {
        return $this->value;
    }
}