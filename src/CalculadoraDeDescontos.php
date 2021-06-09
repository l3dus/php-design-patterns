<?php

namespace Ledus\DesignPattern;

use Ledus\DesignPattern\Descontos\Desconto;
use Ledus\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Ledus\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Ledus\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
