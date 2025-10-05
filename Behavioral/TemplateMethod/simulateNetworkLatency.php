<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * A little helper function that makes waiting times feel real.
 */
function simulateNetworkLatency()
{
    $i = 0;
    while ($i < 5) {
        echo ".";
        sleep(1);
        $i++;
    }
}