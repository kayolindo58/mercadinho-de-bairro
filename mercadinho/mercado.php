<?php


$produtos = [
    'eletronicos' => [
        ['nome' => 'celular', 'preco' => 1000, 'estoque' => 5],
        ['nome' => 'notebook', 'preco' => 2000, 'estoque' => 10],
        ['nome' => 'teclado', 'preco' => 50, 'estoque' => 30],

    ],

    'natural' => [
        ['nome' => 'planta verde', 'preco' => 60, 'estoque' => 40],
        ['nome' => 'planta dragão', 'preco' => 600, 'estoque' => 3],
    ],

];

$carrinho = [];

$escolha = "";




do {
    echo "============================\n";
    echo "    selecione o que deseja   \n";
    echo "============================\n";
    echo "1. produtos eletronicos\n";
    echo "2. produtos naturais\n";
    echo "3. carrinho\n";
    echo "4. sair\n";

    $opcao = readline("escolha opcao: ");
    switch ($opcao) {
        case 1:
            echo "============================\n";
            echo "         eletronicos        \n";
            echo "============================\n";
            foreach ($produtos['eletronicos'] as $indice => $produto) {
                echo ($indice + 1) . " ======== \n";
                echo $produto['nome'] . " | " . "R$ " . $produto['preco'] . " | Estoque - " . $produto['estoque'] . "\n";
            }
            
            $escolha = readline("Qual produto deseja? \n");

            $indiceEscolha = (int)$escolha - 1;
            
            isset($produtos['eletronicos'][$indiceEscolha]);

            $produtoEscolhido = $produtos['eletronicos'][$indiceEscolha];

            $carrinho[] = $produtoEscolhido;

            break;
        case 2:
            echo "============================\n";
            echo "           natural          \n";
            echo "============================\n";
            foreach ($produtos['natural'] as $indice => $produto) {
                echo ($indice + 1) . " ======== \n";
                echo $produto['nome'] . " | " . "R$ " . $produto['preco'] . " | Estoque - " . $produto['estoque'] . "\n";
            }

            $escolha = readline("Qual produto deseja? \n");

            $indiceEscolha = (int)$escolha - 1;
            
            isset($produtos['natural'][$indiceEscolha]);

            $produtoEscolhido = $produtos['natural'][$indiceEscolha];

            $carrinho[] = $produtoEscolhido;

            break;

        case 3:
            echo "============================\n";
            echo "          carrinho          \n";
            echo "============================\n";
            foreach ($carrinho as $item){
                echo $item['nome'] . "\n";
                echo $item['preco'] . "\n";
            }

            break;

        case 4:

            break;

        default:
    }
} while ($opcao != 4);

