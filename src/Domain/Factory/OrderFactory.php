<?php

namespace Dbourgon\Invoicer\Domain\Factory;

use Dbourgon\Invoicer\Domain\Entity\Order;
use Dbourgon\Invoicer\Domain\ValueObject\Id;
use Dbourgon\Invoicer\Domain\ValueObject\OrderDescription;
use Dbourgon\Invoicer\Domain\ValueObject\OrderNumber;
use Dbourgon\Invoicer\Domain\ValueObject\Total;

class OrderFactory
{
    public function create(int $id, string $description, float $total): Order {
        $order = new Order();
        $order->setId(new Id($id));
        $order->setOrderNumber(new OrderNumber($order->id()->value()));
        $order->setDescription(new OrderDescription($description));
        $order->setTotal(new Total($total));

        return $order;

    }
}