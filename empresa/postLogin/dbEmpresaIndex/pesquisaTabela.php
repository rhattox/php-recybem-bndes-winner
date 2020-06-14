<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
//@pg_close($con); //Encerrrar Conexão

if(!$con) {
 echo '[{"erro": "Não foi possível conectar ao banco"';
 echo '}]';
 }else {
 //SQL de BUSCA LISTAGEM
 $sql = "SELECT usuario_id, valorDoacao FROM doacao ORDER BY usuario_id";
 $result = mysqli_query($con,$sql); //Executar a SQL
 $n = mysqli_num_rows($result); //Número de Linhas retornadas

if (!$result) {
 //Caso não haja retorno
 echo '[{"erro": "Há algum erro com a busca. Não retorna resultados"';
 echo '}]';
 }else if($n<1) {
 //Caso não tenha nenhum item
 echo '[{"erro": "Não há nenhum dado cadastrado"';
 echo '}]';
 }else {
 //Mesclar resultados em um array
 while ($n = mysqli_fetch_assoc($result)) {
    $dados[] = $n;
}

     echo json_encode($dados, JSON_PRETTY_PRINT); } } ?>