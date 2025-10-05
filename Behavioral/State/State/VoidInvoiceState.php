<?php 

namespace DesignPatterns\Behavioral\State\State;

/**
 * This Concrete State Represents a void invoice.
 *
 * This is a terminal state representing a voided invoice. Once an invoice is
 * voided, no further state transitions are allowed. All event methods use the
 * default implementation which throws exceptions.
 */
class VoidInvoiceState extends BaseInvoiceState
{
    public function getName(): string
    {
        return 'void';
    }
}
