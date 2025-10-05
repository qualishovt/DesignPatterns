<?php 

namespace DesignPatterns\Behavioral\State\State;

/**
 * State Design Pattern
 *
 * Intent: lets an object alter its behavior when its internal state changes. It
 * appears as if the object changed its class.
 */

/**
 * Invoice State Interface
 *
 * This interface defines the contract that all invoice states must implement.
 * It represents the State interface in the State pattern, ensuring that all
 * concrete states provide implementations for all possible events/transitions.
 *
 * The interface defines all possible events that can occur in the invoice
 * lifecycle, regardless of whether a particular state can handle them. This
 * approach ensures consistency across all states and makes the system more
 * maintainable.
 */
interface InvoiceState
{
    public function finalize(): void;
    public function pay(): void;
    public function cancel(): void;
    public function void(): void;
    public function getName(): string;
}
