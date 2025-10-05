<?php

use DesignPatterns\Behavioral\State\Context\InvalidStateTransitionException;
use DesignPatterns\Behavioral\State\Context\Invoice;

require_once '../../vendor/autoload.php';

/**
 * ============================================================================
 * USAGE EXAMPLE AND DEMONSTRATION
 * ============================================================================
 *
 * The following code demonstrates how to use the State pattern implementation
 * with various scenarios that show all possible state transitions.
 */

try {
    echo "=== Invoice State Pattern Demo ===\n<br>\n<br>";

    // Create a new invoice (starts in draft state)
    $invoice = new Invoice(1001, 1500.00);
    echo "Created invoice: " . json_encode($invoice->getInfo()) . "\n<br>\n<br>";

    // Scenario 1: Draft -> Open -> Paid
    echo "--- Scenario 1: Draft -> Open -> Paid ---\n<br>";
    $invoice->finalize(); // Draft -> Open
    echo "Current state: " . $invoice->getStateName() . "\n<br>";

    $invoice->pay(); // Open -> Paid
    echo "Current state: " . $invoice->getStateName() . "\n<br>";

    // Try to pay again (should fail)
    try {
        $invoice->pay();
    } catch (InvalidStateTransitionException $e) {
        echo "Expected error: " . $e->getMessage() . "\n<br>";
    }

    echo "\n<br>--- Scenario 2: Draft -> Open -> Void ---\n<br>";
    $invoice2 = new Invoice(1002, 750.00);
    $invoice2->finalize(); // Draft -> Open
    $invoice2->void(); // Open -> Void
    echo "Invoice 2 state: " . $invoice2->getStateName() . "\n<br>";

    echo "\n<br>--- Scenario 3: Draft -> Open -> Uncollectable -> Paid ---\n<br>";
    $invoice3 = new Invoice(1003, 2000.00);
    $invoice3->finalize(); // Draft -> Open
    $invoice3->cancel(); // Open -> Uncollectable
    echo "Invoice 3 state: " . $invoice3->getStateName() . "\n<br>";

    $invoice3->pay(); // Uncollectable -> Paid
    echo "Invoice 3 final state: " . $invoice3->getStateName() . "\n<br>";

    echo "\n<br>--- Scenario 4: Draft -> Open -> Uncollectable -> Void ---\n<br>";
    $invoice4 = new Invoice(1004, 500.00);
    $invoice4->finalize(); // Draft -> Open
    $invoice4->cancel(); // Open -> Uncollectable
    $invoice4->void(); // Uncollectable -> Void
    echo "Invoice 4 final state: " . $invoice4->getStateName() . "\n<br>";

    echo "\n<br>--- Error Scenario: Invalid transition ---\n<br>";
    $invoice5 = new Invoice(1005, 300.00);
    try {
        $invoice5->pay(); // Try to pay draft invoice (should fail)
    } catch (InvalidStateTransitionException $e) {
        echo "Expected error: " . $e->getMessage() . "\n<br>";
    }

    echo "\n<br>--- State Information ---\n<br>";
    echo "Invoice 1: " . json_encode($invoice->getInfo()) . "\n<br>";
    echo "Invoice 2: " . json_encode($invoice2->getInfo()) . "\n<br>";
    echo "Invoice 3: " . json_encode($invoice3->getInfo()) . "\n<br>";
    echo "Invoice 4: " . json_encode($invoice4->getInfo()) . "\n<br>";
    echo "Invoice 5: " . json_encode($invoice5->getInfo()) . "\n<br>";
} catch (InvalidStateTransitionException $e) {
    echo "Error: " . $e->getMessage() . "\n<br>";
}