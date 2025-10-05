<?php

namespace DesignPatterns\Behavioral\Visitor\Visitor;

function money_format($format, $money): string
{
    return '$'. $money;
}
