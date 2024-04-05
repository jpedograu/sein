<?php 
 include("conexao.php");
 $nome=$_POST['nome'];
 $email=$_POST['email'];
 $senha=password_hash($_POST['senha'],PASSWORD_DEFAULT) ;


 $consulta="INSERT INTO usuario(nome,email,senha)
 VALUES('$nome', '$email', '$senha')";
 if($conexao=mysqli_query($conexao,$consulta)){
    echo "cadrasto realizado com sucesso";
 } else{
    echo "erro ao se conectar com o banco".mysqli_connect_error($conexao);
 }


 

?>