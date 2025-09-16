<?php
require_once __DIR__ . '/../Models/Itens_pedidos.php';
require_once __DIR__ . '/../Database/Database.php';

$itens_pedidos = new ItensPedidos($db);
$itens_pedidos = $itens_pedidos->buscarItensPorPedido(1);
var_dump($itens_pedidos);