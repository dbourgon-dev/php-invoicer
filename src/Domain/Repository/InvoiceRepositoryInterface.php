<?php

namespace Dbourgon\Invoicer\Domain\Repository;

use Dbourgon\Invoicer\Domain\Entity\Invoice;
use Dbourgon\Invoicer\Domain\ValueObject\Id;

interface InvoiceRepositoryInterface
{
    public function getById(Id $id): Invoice;
    public function get();
    public function persist(Invoice $entity);
    public function begin();
    public function commit();

}