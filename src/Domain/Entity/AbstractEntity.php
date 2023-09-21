<?php

namespace Dbourgon\Invoicer\Domain\Entity;

use Dbourgon\Invoicer\Domain\ValueObject\Id;

abstract class AbstractEntity
{
    protected Id $id;

    public function id(): Id
    {
        return $this->id;
    }

    public function setId(Id $id): void
    {
        $this->id = $id;
    }
}