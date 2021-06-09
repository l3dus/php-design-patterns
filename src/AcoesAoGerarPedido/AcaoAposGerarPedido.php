<?php

namespace Ledus\DesignPattern\AcoesAoGerarPedido;

use Ledus\DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}