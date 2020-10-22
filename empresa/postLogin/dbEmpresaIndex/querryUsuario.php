<?php
session_start();

$servername = "db";
$username = "root";
$password = "example";
$dbname = "bndes";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
//@pg_close($con); //Encerrrar Conexão

if(!$con) {
 echo '[{"erro": "Não foi possível conectar ao banco"';
 echo '}]';
 }else {
 //SQL de BUSCA LISTAGEM
 $sql = " SELECT usuario_id,usuario.usuarioNome, SUM(valorDoacao) as somaTotal from doacao,usuario WHERE  usuario_id = usuario.usuarioId
 GROUP BY usuario_id
 order by somaTotal DESC";
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