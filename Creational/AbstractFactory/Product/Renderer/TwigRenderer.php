<?php

namespace DesignPatterns\Creational\AbstractFactory\Product\Renderer;

/**
 * The renderer for Twig templates.
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}