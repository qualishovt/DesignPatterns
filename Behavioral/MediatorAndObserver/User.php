<?php

namespace DesignPatterns\Behavioral\MediatorAndObserver;

use function DesignPatterns\Behavioral\MediatorAndObserver\Mediator\events;

/**
 * Let's keep the User class trivial since it's not the focus of our example.
 */
class User
{
    public $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }

    /**
     * All objects can trigger events.
     */
    public function delete(): void
    {
        echo "User: I can now delete myself without worrying about the repository.\n<br>";
        events()->trigger("users:deleted", $this, $this);
    }
}
