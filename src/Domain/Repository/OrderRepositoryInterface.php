<?php

namespace Dbourgon\Invoicer\Domain\Repository;

use Dbourgon\Invoicer\Domain\Entity\Order;
use Dbourgon\Invoicer\Domain\ValueObject\Id;

interface OrderRepositoryInterface
{
    public function getById(Id $id): Order;
    public function get();
    public function persist(Order $entity);
    public function begin();
    public function commit();
    public function getUninvoicedOrders();

}