<?php 

namespace DesignPatterns\Behavioral\State\State;

/**
 * This Concrete State Represents a collectable invoice.
 *
 * This state represents an invoice that has been cancelled but can still be
 * recovered. From this state, the invoice can be:
 * - Paid (moves to Paid state)
 * - Voided (moves to Void state)
 *
 * This provides a way to handle invoices that were cancelled but later can be
 * collected or definitively written off.
 */
class UncollectableInvoiceState extends BaseInvoiceState
{
    /**
     * Handle pay event
     *
     * Even though the invoice was cancelled, payment can still be received.
     * This transitions the invoice to the Paid state.
     */
    public function pay(): void
    {
        echo "Invoice #{$this->invoice->getId()} paid - changing from Uncollectable to Paid\n<br>";
        $this->invoice->setState(new PaidInvoiceState($this->invoice));
    }

    /**
     * Handle void event
     *
     * If the invoice is definitively uncollectable, it can be voided. This
     * transitions the invoice to the Void state.
     */
    public function void(): void
    {
        echo "Invoice #{$this->invoice->getId()} voided - changing from Uncollectable to Void\n<br>";
        $this->invoice->setState(new VoidInvoiceState($this->invoice));
    }

    public function getName(): string
    {
        return 'uncollectable';
    }
}
