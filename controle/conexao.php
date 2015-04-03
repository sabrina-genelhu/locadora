
<?php
try {
    // PDO em ação!
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=locadora", "root", "root");//3306 é a porta padrão do mysql
	echo "Funcionou";
} catch( PDOException $e ) {
    echo $e->getMessage();
}

$pdo->exec("insert into filme(id, nome, diretor_id, sinopse, ano_public) values (01, 'teste', 02, 'hey teste', 12/12/1222)");
