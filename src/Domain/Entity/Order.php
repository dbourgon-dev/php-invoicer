<?php

namespace Dbourgon\Invoicer\Domain\Entity;

use Dbourgon\Invoicer\Domain\ValueObject\OrderDescription;
use Dbourgon\Invoicer\Domain\ValueObject\OrderNumber;
use Dbourgon\Invoicer\Domain\ValueObject\Total;

class Order extends AbstractEntity
{
    protected Customer $customer;
    protected OrderNumber $orderNumber;
    protected OrderDescription $description;
    protected Total $total;

    /**
     * @return Customer
     */
    public function customer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return OrderNumber
     */
    public function orderNumber(): OrderNumber
    {
        return $this->orderNumber;
    }

    /**
     * @param OrderNumber $orderNumber
     */
    public function setOrderNumber(OrderNumber $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return OrderDescription
     */
    public function description(): OrderDescription
    {
        return $this->description;
    }

    /**
     * @param OrderDescription $description
     */
    public function setDescription(OrderDescription $description): void
    {
        $this->description = $description;
    }

    /**
     * @return Total
     */
    public function total(): Total
    {
        return $this->total;
    }

    /**
     * @param Total $total
     */
    public function setTotal(Total $total): void
    {
        $this->total = $total;
    }

}