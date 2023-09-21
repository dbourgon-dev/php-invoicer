<?php

namespace Dbourgon\Invoicer\Domain\Entity;

use Dbourgon\Invoicer\Domain\ValueObject\CustomerEmail;
use Dbourgon\Invoicer\Domain\ValueObject\CustomerName;

class Customer extends AbstractEntity
{
    protected CustomerName $name;
    protected CustomerEmail $email;

    /**
     * @return CustomerName
     */
    public function name(): CustomerName
    {
        return $this->name;
    }

    /**
     * @param CustomerName $name
     */
    public function setName(CustomerName $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return CustomerEmail
     */
    public function email(): CustomerEmail
    {
        return $this->email;
    }

    /**
     * @param CustomerEmail $email
     */
    public function setEmail(CustomerEmail $email): self
    {
        $this->email = $email;
        return $this;
    }
}