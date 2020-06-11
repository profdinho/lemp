<?php
/*
$db_host  = 'postgres';
$db_name  = 'profdinho';
$db_login = 'postgres';
$db_port = 5432;
$db_pass  = 'profdinho';

$string = "host=$db_host port=$db_port dbname=$db_name user=$db_login password=$db_pass";

$conexao = pg_connect($string) 
        or die("Could not connect : " . pg_last_error());

$sql = "SELECT id, nome, celular, email FROM Contato";

if(!($result = pg_query($conexao, $sql))) {
    print("Problema na query: " . pg_last_error()."\n");
    print("SQL: $sql\n");
    die();
}
while ($row = pg_fetch_array($result)) {
    echo $row['id'] . "; " . $row['nome'] . "; " . $row['celular'] . "; " . $row['email'] . "<br>";
}
*/
header("Content-type: text/html; charset=utf-8");
//Nome do servidor que está o banco de dados
//$servidor = "cincoacertos.mysql.dbaas.com.br";
$servidor = "mysql";
//Usuário do banco de dados
$usuario = "aluno";
//Senha do banco de dados
$senha = "123456";
//Nome da base de dados
$dbname = "profdinho";

//Criar a conexao com MySQLi
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
// Verifica conexão
/*
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
*/
if(mysqli_connect_error()) { // < evite IF sem chaves
    die("Falha na conexão: " . mysqli_connect_error());
} else {
    mysqli_query($conexao,"SET NAMES 'utf8'");
    mysqli_query($conexao,'SET character_set_connection=utf8');
    mysqli_query($conexao,'SET character_set_client=utf8');
    mysqli_query($conexao,'SET character_set_results=utf8');
}

mysqli_set_charset($conexao,"utf8");
date_default_timezone_set('America/Sao_Paulo');
echo "Conectou";
?>
