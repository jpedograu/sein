<?php
$host ='localhost';
$user ='root';
$senha='';
$banco = 'provainfo';

$conexao = new mysqli($host,$user,$senha,$banco);
 if (!$conexao){
  //  echo'erro ao se comunicar como banco de dados'.mysqli_connect_errno();
 }
 else{
 //   echo 'deu certo a conexao';

  // 1crie um formulario com o bootstrap (index.php)
    // 2 crie um banco de dados (xamp)
    // 3 crie uma conexao com o banco (conexao.php)
    // 4 realizar um cadrasto,inseri o cadrasto no banco de dados (xamp,admin,banco de dados,(nome do banco),cria,ID= INT
    //NOME=VACHAR,)
    // 5 cria hash.php
 }
?>
