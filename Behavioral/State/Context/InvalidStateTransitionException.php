<?php 

namespace DesignPatterns\Behavioral\State\Context;

/**
 * Custom exception for invalid state transitions
 *
 * This exception is thrown when an invalid state transition is attempted. It
 * provides clear error messages about what transition was attempted and why it
 * failed.
 */
class InvalidStateTransitionException extends \Exception
{
    /**
     * Constructor
     *
     * @param string $message Error message
     * @param int $code Error code
     * @param \Exception|null $previous Previous exception
     */
    public function __construct($message = "", $code = 0, ?\Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
