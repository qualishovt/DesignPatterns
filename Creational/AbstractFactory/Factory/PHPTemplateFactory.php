<?php

namespace DesignPatterns\Creational\AbstractFactory\Factory;

use DesignPatterns\Creational\AbstractFactory\Product\PageTemplate\PageTemplate;
use DesignPatterns\Creational\AbstractFactory\Product\PageTemplate\PHPTemplatePageTemplate;
use DesignPatterns\Creational\AbstractFactory\Product\Renderer\PHPTemplateRenderer;
use DesignPatterns\Creational\AbstractFactory\Product\Renderer\TemplateRenderer;
use DesignPatterns\Creational\AbstractFactory\Product\TitleTemplate\PHPTemplateTitleTemplate;
use DesignPatterns\Creational\AbstractFactory\Product\TitleTemplate\TitleTemplate;

/**
 * And this Concrete Factory creates PHPTemplate templates.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}