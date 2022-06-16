<?php
include  'dbconnection.php';
$succMsg = NULL;
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $situacao = $_POST['situacao'];
    $modelo = $_POST['modelo'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO carro (nome,email,telefone,situacao,modelo, descricao) Values(:nome,:email,:telefone,:situacao,:modelo,:descricao)";
    $query = $dbconnection->prepare($sql);
    $query->bindParam(':nome', $nome, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $query->bindParam(':situacao', $situacao, PDO::PARAM_STR);
    $query->bindParam(':modelo', $modelo, PDO::PARAM_STR);
    $query->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbconnection->lastInsertId();
    if ($lastInsertId > 0) {
        echo "<script>alert('Adicionado com sucesso!');</script>";
        echo "<script>window.location.href='seleccao.php'</script>";
    } else {

        echo "Erro ao adicionar";
    }
}
