<?php

require_once 'vendor/autoload.php';

use Ledus\DesignPattern\{GerarPedido, GerarPedidoHandler, Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new \Ledus\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new \Ledus\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new \Ledus\DesignPattern\AcoesAoGerarPedido\LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);
