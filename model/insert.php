<?php
include('db_connect.php');

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega os dados do formulário | O real_escape_string é usado para evitar SQL Injection
    $first_name = $mysqli->real_escape_string($_POST['first_name']);
    $last_name = $mysqli->real_escape_string($_POST['last_name']);
    $participation = $mysqli->real_escape_string($_POST['participation']);

    //Valida se os campos não estão vazios
    if (!empty($first_name) && !empty($last_name) && !empty($participation)) {
        //Cria a query
        $query = "INSERT INTO cube_user (first_name, last_name, participation) VALUES ('$first_name','$last_name','$participation')";

        //Executa a query
        if($mysqli->query($query)){
            echo "Dados inseridos com sucesso!";
        }else{
            echo "Erro ao inserir dados: " . $mysqli->error;
        }
    }else{
        echo "Preencha todos os campos!";
    }

}else{
    echo "Método de requisição inválido!";
}
header('Location: ../index.php');
exit;
?>