<?php
include('db_connect.php');



//Puxou o valor do SUM como String
$query2 = "SELECT SUM(participation) as participation FROM cube_user";
//Converteu o valor do SUM para inteiro
$result2 = $mysqli->query($query2);

// Obtém o valor total da soma
$totalParticipation = 0;
if ($result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $totalParticipation = $row2['participation'];
}




//Consulta para buscar user
$query = "SELECT * FROM cube_user";
$result = $mysqli->query($query);


if ($result->num_rows > 0) {
    // Loop para gerar as linhas da tabela
    while ($row = $result->fetch_assoc()) {
        
        if ($totalParticipation > 0) {
            $valParticipation = ($row['participation'] / $totalParticipation) * 100;
        } else {
            $valParticipation = 0; // Evita divisão por zero
        }
        
        $loop++;

        echo "<tr>";
        echo "<td class='td-id'>" . $loop . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td class='td-participation'>" . number_format($valParticipation, 0) . "%</td>";
        echo "</tr>";
       
    }
} else {
    echo "<tr><td colspan='4'>Nenhum dado encontrado</td></tr>";
}

?>