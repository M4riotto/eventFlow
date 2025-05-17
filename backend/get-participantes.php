<?php
$dados = [];

if (file_exists('dados.csv')) {
    $arquivo = fopen('dados.csv', 'r');
    $id = 1;

    while (($linha = fgetcsv($arquivo, 1000, ';')) !== false) {
        $dados[] = [
            'id' => $id++,
            'name' => $linha[0] ?? '',
            'email' => $linha[1] ?? '',
            'phone' => $linha[2] ?? '',
            'status' => $linha[3] ?? '',
            'observation' => $linha[4] ?? '',
            'createdAt' => $linha[5] ?? ''
        ];
    }

    fclose($arquivo);
}

header('Content-Type: application/json');
echo json_encode($dados);
