<?php

namespace Dbourgon\Invoicer\Domain\Factory;

use Dbourgon\Invoicer\Domain\Entity\Invoice;
use Dbourgon\Invoicer\Domain\Entity\Order;
use Dbourgon\Invoicer\Domain\ValueObject\InvoiceDate;
use DateTime;
use Dbourgon\Invoicer\Domain\ValueObject\Total;

class InvoiceFactory
{
    public function createFromOrder(Order $order): Invoice
    {
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setDate(new InvoiceDate(new DateTime()));
        $invoice->setTotal(new Total($order->total()->value()));

        return $invoice;
    }
}