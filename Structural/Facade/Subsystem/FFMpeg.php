<?php

namespace DesignPatterns\Structural\Facade\Subsystem;

/**
 * The FFmpeg subsystem (a complex video/audio conversion library).
 */
class FFMpeg
{
    public static function create(): FFMpeg
    {
      /* ... */

      return new static();
    }

    public function open(string $video): void
    {
      /* ... */
    }

    // ...more methods and classes... RU: ...дополнительные методы и классы...
}
