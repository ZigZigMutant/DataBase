<?php
include "config.php";

if(!$conn){
    die("Falha na Conexão {mysqli_connect_error()}");
}

$nome = "Teste nome"; 
$dtnasc = "2001-05-13";
$celular = "(81) 9999-9999";
$email = "teste@teste.com";
$ra = "1111111";
$endereco = "Rua do teste";
$num_end = "000";
$bairro = "Bairro testado";
$cidade = "Cidade do testamento/PE";


$sql ="INSERT INTO `leitores`
    (`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) VALUES 
    ('$nome','$dtnasc','$celular','$email','$ra','$endereco','$num_end','$bairro','$cidade')";


$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $conn));


if ($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso!<br>";
    echo "Clique <a href='index.php'><button title = 'Home page'> Voltar </button></a>";
    echo "</center>";
    }else{
        echo "<center>";
        echo "Erro ao cadastrar leitor <br>";
        echo "Clique <a href='index.php'><button title = 'Home page'> Voltar </button></a>";
        echo "</center>";
        }
?>
