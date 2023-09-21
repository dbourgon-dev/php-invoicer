<?php
use Dbourgon\Invoicer\Domain\Entity\Invoice;
use Dbourgon\Invoicer\Domain\Entity\Order;
use Dbourgon\Invoicer\Domain\Factory\InvoiceFactory;
use Dbourgon\Invoicer\Domain\ValueObject\Total;
use Dbourgon\Invoicer\Domain\Factory\OrderFactory;

describe('InvoiceFactory', function () {
    describe('->createFromOrder()', function () {
        it('should return an Invoice object', function () {
            $order = (new OrderFactory())->create(1, 'description 1',500);
            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);

            assert($invoice instanceof Invoice, 'expected Invoice');
        });

        it('should set the total of the Invoice', function () {
            $order = (new OrderFactory())->create(1, 'description 1', 500);

            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);

            assert($invoice->total()->value() === 500.0, 'expected 500');
        });

        it('should associate the Order to the Invoice', function () {
            $order = (new OrderFactory())->create(1, 'description 1', 500);

           $factory = new InvoiceFactory();
           $invoice = $factory->createFromOrder($order);

           assert($invoice->order() === $order, 'expected same Order object');
        });

        it('should set the date of the Invoice', function() {
            $order = (new OrderFactory())->create(1, 'description 1', 500);

            $factory = new InvoiceFactory();
            $invoice = $factory->createFromOrder($order);

            assert(!empty($invoice->date()), 'expect DateTime type');
        });
    });
});