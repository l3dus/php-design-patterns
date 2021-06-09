<?php

namespace Ledus\DesignPattern\AcoesAoGerarPedido;

use Ledus\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de geração de pedido";
    }
}
