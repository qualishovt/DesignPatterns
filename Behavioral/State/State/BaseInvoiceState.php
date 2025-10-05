<?php 

namespace DesignPatterns\Behavioral\State\State;

use DesignPatterns\Behavioral\State\Context\InvalidStateTransitionException;
use DesignPatterns\Behavioral\State\Context\Invoice;

/**
 * Abstract Base State class
 *
 * This abstract class implements the InvoiceState interface and provides
 * default implementations for all state transition methods. The default
 * behavior is to throw exceptions for invalid transitions, following the "fail-
 * fast" principle.
 *
 * This approach allows concrete states to only override the methods for
 * transitions they actually support, keeping the code clean and focused. Any
 * attempt to perform an invalid transition will result in a clear exception
 * rather than silent failure.
 *
 * The abstract class also maintains a reference to the context (Invoice)
 * object, which is needed for performing state transitions.
 */
abstract class BaseInvoiceState implements InvoiceState
{
     /**
      * Reference to the context object (Invoice)
      *
      * Each state needs access to the context to perform state transitions.
      * This creates a bidirectional relationship between the state and context.
      */
    protected $invoice;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }


    /**
     * Default implementation for finalize event
     *
     * By default, finalize is not allowed in most states. Only states that
     * support this transition will override this method.
     *
     * @throws InvalidStateTransitionException
     */
    public function finalize(): void
    {
        throw new InvalidStateTransitionException("Cannot finalize invoice in " . $this->getName() . " state");
    }

    /**
     * Default implementation for pay event
     *
     * By default, payment is not allowed in most states. Only states that
     * support this transition will override this method.
     *
     * @throws InvalidStateTransitionException
     */
    public function pay(): void
    {
        throw new InvalidStateTransitionException("Cannot pay invoice in " . $this->getName() . " state");
    }

    /**
     * Default implementation for cancel event
     *
     * By default, cancellation is not allowed in most states. Only states that
     * support this transition will override this method.
     *
     * @throws InvalidStateTransitionException
     */
    public function cancel(): void
    {
        throw new InvalidStateTransitionException("Cannot cancel invoice in " . $this->getName() . " state");
    }


    /**
     * Default implementation for void event
     *
     * By default, voiding is not allowed in most states. Only states that
     * support this transition will override this method.
     *
     * @throws InvalidStateTransitionException
     */
    public function void(): void
    {
        throw new InvalidStateTransitionException("Cannot void invoice in " . $this->getName() . " state");
    }

    /**
     * Abstract method to get the state name
     *
     * Each concrete state must implement this method to return its name. This
     * is used for logging, debugging, and display purposes.
     *
     * @return string The name of the current state
     */
    abstract public function getName(): string;
}
