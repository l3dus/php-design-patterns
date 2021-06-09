<?php

namespace Ledus\DesignPattern\Impostos;

use Ledus\DesignPattern\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
