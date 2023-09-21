<?php

namespace Dbourgon\Invoicer\Domain\Repository;

use Dbourgon\Invoicer\Domain\Entity\Customer;
use Dbourgon\Invoicer\Domain\ValueObject\Id;

interface CustomerRepositoryInterface
{
    public function getById(Id $id): Customer;
    public function get();
    public function persist(Customer $entity);
    public function begin();
    public function commit();

}