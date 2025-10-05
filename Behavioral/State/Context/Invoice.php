<?php 

namespace DesignPatterns\Behavioral\State\Context;

use DesignPatterns\Behavioral\State\State\DraftInvoiceState;
use DesignPatterns\Behavioral\State\State\InvoiceState;

/**
 * Context class - Invoice
 *
 * This is the context class in the State pattern. It maintains a reference to
 * the current state object and delegates all state-specific behavior to the
 * current state. The context is unaware of the specific state classes and
 * interacts with them through the abstract InvoiceState interface.
 *
 * The context also maintains the invoice's data (id, amount, etc.) that remains
 * constant regardless of the state.
 */
class Invoice
{
    private $id;
    private $amount;

    /**
     * Current state object
     *
     * This is the key component of the State pattern. The context maintains a
     * reference to the current state object and delegates all state-specific
     * operations to this object.
     *
     * @var InvoiceState
     */
    private $state;

    private $createdAt;

    /**
     * Constructor
     *
     * Creates a new invoice. The invoice always starts in the Draft state as
     * per business requirements.
     */
    public function __construct(int $id, float $amount)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->createdAt = new \DateTime();
        // Initial state is draft This is where the State pattern begins - we
        // set the initial state
        $this->state = new DraftInvoiceState($this);
    }

    public function getId(): int
    {
        return $this->id;
    }


    /**
     * Set the current state
     *
     * This method is called by state objects to transition to a new state. It's
     * the mechanism that allows the State pattern to work - states can change
     * the context's state by calling this method.
     *
     * @param InvoiceState $state The new state object
     */
    public function setState(InvoiceState $state)
    {
        $this->state = $state;
    }

    /**
     * Get the current state object
     *
     * @return InvoiceState
     */
    public function getState(): InvoiceState
    {
        return $this->state;
    }

    /**
     * Get the current state name
     *
     * This is a convenience method that delegates to the current state object.
     *
     * @return string
     */
    public function getStateName(): string
    {
        return $this->state->getName();
    }

    /**
     * Event method: finalize
     *
     * This method delegates the finalize operation to the current state. This
     * is the core of the State pattern - the context doesn't know how to handle
     * the operation, so it delegates to the current state.
     */
    public function finalize()
    {
        $this->state->finalize();
    }

    /**
     * Event method: pay
     *
     * This method delegates the pay operation to the current state. The
     * behavior will vary depending on the current state.
     */
    public function pay()
    {
        $this->state->pay();
    }

    /**
     * Event method: cancel
     *
     * This method delegates the cancel operation to the current state. The
     * behavior will vary depending on the current state.
     */
    public function cancel()
    {
        $this->state->cancel();
    }

    /**
     * Event method: void
     *
     * This method delegates the void operation to the current state. The
     * behavior will vary depending on the current state.
     */
    public function void()
    {
        $this->state->void();
    }

    /**
     * Get invoice information
     *
     * Returns an array with all invoice information including current state.
     * This is useful for debugging, logging, or API responses.
     *
     * @return array
     */
    public function getInfo(): array
    {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'state' => $this->getStateName(),
            'created_at' => $this->createdAt->format('Y-m-d H:i:s')
        ];
    }
}
