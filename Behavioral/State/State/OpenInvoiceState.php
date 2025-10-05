<?php 

namespace DesignPatterns\Behavioral\State\State;

/**
 * This Concrete State Represents an open invoice.
 *
 * This state represents an invoice that has been finalized and is ready for
 * processing. From this state, the invoice can be:
 * - Paid (moves to Paid state)
 * - Voided (moves to Void state)
 * - Cancelled (moves to Uncollectable state)
 */
class OpenInvoiceState extends BaseInvoiceState
{
    /**
     * Handle pay event
     *
     * When payment is received, the invoice transitions to the Paid state. This
     * is a terminal state - no further operations are allowed.
     */
    public function pay(): void
    {
        echo "Invoice #{$this->invoice->getId()} paid - changing from Open to Paid\n<br>";
        $this->invoice->setState(new PaidInvoiceState($this->invoice));
    }

    /**
     * Handle void event
     *
     * When an invoice is voided, it transitions to the Void state. This is a
     * terminal state - no further operations are allowed.
     */
    public function void(): void
    {
        echo "Invoice #{$this->invoice->getId()} voided - changing from Open to Void\n<br>";
        $this->invoice->setState(new VoidInvoiceState($this->invoice));
    }

    /**
     * Handle cancel event
     *
     * When an invoice is cancelled, it transitions to the Uncollectable state.
     * From Uncollectable, the invoice can still be paid or voided.
     */
    public function cancel(): void
    {
        echo "Invoice #{$this->invoice->getId()} cancelled - changing from Open to Uncollectable\n<br>";
        $this->invoice->setState(new UncollectableInvoiceState($this->invoice));
    }

    public function getName(): string
    {
        return 'open';
    }
}
