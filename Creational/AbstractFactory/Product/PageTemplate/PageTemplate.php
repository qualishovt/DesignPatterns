<?php

namespace DesignPatterns\Creational\AbstractFactory\Product\PageTemplate;

/**
 * This is another Abstract Product type, which describes whole page templates.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}
