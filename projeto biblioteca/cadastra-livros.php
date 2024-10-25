<?php
include "config.php";

if(!$conn){
    die("Falha na Conexão" . mysqli_connect_error());
}

$Titulo = "$_POST[Titulo]";

$Autor = "$_POST[Autor]";

$Editora = "$_POST[Editora]";

$AnoPublicacao = "$_POST[AnoPublicacao]";

$Genero = "$_POST[Genero]";

$Paginas = "$_POST[Paginas]";

$sql = "INSERT INTO `livros`
(`Titulo`, `Autor`, `Editora`, `AnoPublicacao`, `Genero`, `Paginas`)
VALUES 
('$Titulo','$Autor','$Editora','$AnoPublicacao','$Genero','$Paginas')";



$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $conn));

if($query){
    echo "<center>";
    echo "Cadastro Realizado Com Sucesso!!<br>";
    echo "<a href='cadastrar livro.html'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}else{
    echo "<center>";
    echo "Erro ao Cadastrar!!<br>";
    echo "<a href='cadastrar livro.html'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}
