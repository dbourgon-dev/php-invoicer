<?php

namespace Dbourgon\Invoicer\Domain\Entity;

use Dbourgon\Invoicer\Domain\ValueObject\InvoiceDate;
use Dbourgon\Invoicer\Domain\ValueObject\Total;

class Invoice extends AbstractEntity
{
    protected Order $order;
    protected InvoiceDate $date;
    protected Total $total;

    /**
     * @return Order
     */
    public function order(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @return InvoiceDate
     */
    public function date(): InvoiceDate
    {
        return $this->date;
    }

    /**
     * @param InvoiceDate $date
     */
    public function setDate(InvoiceDate $date): void
    {
        $this->date = $date;
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