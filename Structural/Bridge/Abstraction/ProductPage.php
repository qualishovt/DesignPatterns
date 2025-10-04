<?php

namespace DesignPatterns\Structural\Bridge\Abstraction;

use DesignPatterns\Structural\Bridge\Helper\Product;
use DesignPatterns\Structural\Bridge\Implementation\Renderer;

/**
 * This Concrete Abstraction represents a more complex page.
 */
class ProductPage extends Page
{
    protected $product;

    public function __construct(Renderer $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->product->getTitle()),
            $this->renderer->renderTextBlock($this->product->getDescription()),
            $this->renderer->renderImage($this->product->getImage()),
            $this->renderer->renderTextBlock('$' . number_format($this->product->getPrice(), 2)),
            $this->renderer->renderLink("/cart/add/" . $this->product->getId(), "Add to cart"),
            $this->renderer->renderFooter()
        ]);
    }
}
