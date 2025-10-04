<?php

namespace DesignPatterns\Creational\AbstractFactory\Factory;

use DesignPatterns\Creational\AbstractFactory\Product\PageTemplate\PageTemplate;
use DesignPatterns\Creational\AbstractFactory\Product\PageTemplate\TwigPageTemplate;
use DesignPatterns\Creational\AbstractFactory\Product\Renderer\TemplateRenderer;
use DesignPatterns\Creational\AbstractFactory\Product\Renderer\TwigRenderer;
use DesignPatterns\Creational\AbstractFactory\Product\TitleTemplate\TitleTemplate;
use DesignPatterns\Creational\AbstractFactory\Product\TitleTemplate\TwigTitleTemplate;

/**
 * Each Concrete Factory corresponds to a specific variant (or family) of
 * products.
 *
 * This Concrete Factory creates Twig templates.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}