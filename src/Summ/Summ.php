<?php

declare(strict_types=1);

namespace AnatolyShilyaev\MyComposerPackage\Summ;

class Summ
{
    public function getSumm(int $a, int $b): int
    {
        return $a + $b;
    }
}
