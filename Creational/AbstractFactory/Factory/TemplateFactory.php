<?php

namespace DesignPatterns\Creational\AbstractFactory\Factory;

use DesignPatterns\Creational\AbstractFactory\Product\PageTemplate\PageTemplate;
use DesignPatterns\Creational\AbstractFactory\Product\Renderer\TemplateRenderer;
use DesignPatterns\Creational\AbstractFactory\Product\TitleTemplate\TitleTemplate;

/**
 * The Abstract Factory interface declares creation methods for each distinct
 * product type.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}