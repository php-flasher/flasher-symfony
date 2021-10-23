<?php

namespace Flasher\Symfony\Bridge\Typed\Twig;

use Twig\Extension\AbstractExtension;

abstract class FlasherTwigExtension extends AbstractExtension
{
    /**
     * @return array
     */
    abstract protected function getFlasherFunctions();

    public function getFunctions(): array
    {
        return $this->getFlasherFunctions();
    }
}