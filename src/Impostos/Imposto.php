<?php

namespace Ledus\DesignPattern\Impostos;

use Ledus\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}