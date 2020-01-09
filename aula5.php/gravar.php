<?php 
/*Gravar os dados no banco 
-resgatar os dados do formulário
*/
//1-Resgatar os dados do formulário.
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade= $_POST["idade"];
$estado = $_POST["estado"];
//2-Montar o SQL para gravar os dados no banco.
$sql="insert into cliente values(null,'".$nome."','".$email."','".$idade."','".$estado."')";
//3-Abrir conexão com o banco de dados
//$con = mysqli_connect(servidor,usuario,senha,banco);
$con = mysqli_connect("localhost","root","","aula5");
//4-Gravar os dados no banco.
if(mysqli_query($con,$sql)){
echo"Cliente Cadastrado com sucesso!";
}else{
    echo"Erro ao Gravar";
}
mysqli_close($con);

