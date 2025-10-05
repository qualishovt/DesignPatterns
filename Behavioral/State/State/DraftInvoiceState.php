<?php 

namespace DesignPatterns\Behavioral\State\State;

/**
 * Each Concrete State corresponds to a specific state.
 *
 * This Concrete State Represents a draft invoice.
 *
 * This is the initial state of every invoice. In this state, the invoice is
 * still being prepared and can only be finalized to move to the Open state. No
 * other operations are allowed in this state.
 */
class DraftInvoiceState extends BaseInvoiceState
{
    /**
     * Handle finalize event
     *
     * This is the only valid transition from Draft state. When an invoice is
     * finalized, it transitions to the Open state where it can be paid, voided,
     * or cancelled.
     */
    public function finalize(): void
    {
        echo "Invoice #{$this->invoice->getId()} finalized - changing from Draft to Open\n<br>";
        $this->invoice->setState(new OpenInvoiceState($this->invoice));
    }

    public function getName(): string
    {
        return 'draft';
    }
}
