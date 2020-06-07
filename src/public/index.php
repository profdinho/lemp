<?php
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
?>