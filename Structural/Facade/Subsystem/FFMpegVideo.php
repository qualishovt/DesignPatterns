<?php

namespace DesignPatterns\Structural\Facade\Subsystem;

class FFMpegVideo
{
    public function filters(): self
    {
      /* ... */

      return new self;
    }

    public function resize(): self
    {
      /* ... */

      return new self;
    }

    public function synchronize(): self
    {
      /* ... */

      return new self;
    }

    public function frame(): self
    {
      /* ... */

      return new self;
    }

    public function save(string $path): self
    {
      /* ... */

      return new self;
    }

    // ...more methods and classes... RU: ...дополнительные методы и классы...
}
