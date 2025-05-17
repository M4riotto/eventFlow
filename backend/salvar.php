<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $status = trim($_POST['status'] ?? '');
    $observation = trim($_POST['observation'] ?? '');
    

    if ($nome && $email) {
        $linha = [
            $nome,
            $email,
            $phone,
            $status,
            $observation,
            date('Y-m-d H:i:s')
        ];

        $arquivo = fopen('dados.csv', 'a');
        fputcsv($arquivo, $linha, ';');
        fclose($arquivo);
    }
}

header('Location: ../index.php');
exit;
