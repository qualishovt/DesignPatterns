<?php 

namespace DesignPatterns\Behavioral\State\State;

/**
 * This Concrete State Represents a paid invoice.
 *
 * This is a terminal state representing a paid invoice. Once an invoice is
 * paid, no further state transitions are allowed. All event methods use the
 * default implementation which throws exceptions.
 */
class PaidInvoiceState extends BaseInvoiceState
{
    public function getName(): string
    {
        return 'paid';
    }
}
