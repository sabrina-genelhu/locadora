<?php
$consulta = $pdo->query("SELECT titulo, sinopse FROM filme;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    // aqui eu mostro os valores de minha consulta
    echo "Nome: {$linha['titulo']} - Usuário: {$linha['sinopse']}<br />";
}
?>