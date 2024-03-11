<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "carroscliente_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$ano = $_POST['ano'];
$placa = $_POST['placa'];
$renavan = $_POST['renavan'];
$foto = $_POST['foto'];
$carro = $_POST['carro'];
$anocarro = $_POST['anocarro'];

// Insere os dados na tabela
$sql = "INSERT INTO cliente (nome, sobrenome, cpf, cep, endereco, cidade, estado) 
VALUES ('$nome', '$sobrenome', '$cpf', '$cep', '$endereco','$cidade','$estado')";


 if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
} else {
    echo "Erro ao inserir registro na primeira tabela: " . $conn->error;
} 


$sql1 = "INSERT INTO veiculo_cliente (id_cliente, modelo, fabricante, ano, placa, renavan, foto) 
VALUES ($last_id,'$modelo', '$fabricante', '$ano', '$placa','$renavan','$foto')";

if ($conn->query($sql1) === TRUE) {
  
    echo "Registrado com Sucesso" . "<br>";
} else {
    echo "Erro ao inserir registro na segunda tabela: " . $conn->error;
} 

$sql2 = "INSERT INTO veiculo_eletrico (id_cliente, carro, anocarro) 
VALUES ($last_id,'$carro', '$anocarro')"; 

if ($conn->query($sql2) === TRUE) {
    echo "Sua Proposta foi enviada entraremos em contato em até 7 dias";
} else {
    echo "Erro ao inserir registro na primeira tabela: " . $conn->error;
} 


$conn->close();
?>

