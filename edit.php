<?php
include  'dbconnection.php';

$userid = intval($_GET['id']);
$sql = "SELECT id,nome,email,telefone,situacao,modelo,descricao from carro where id=:uid";

$query = $dbconnection->prepare($sql);

$query->bindParam(':uid', $userid, PDO::PARAM_STR);

$query->execute();

$results = $query->fetchAll(PDO::FETCH_OBJ);

$cnt = 1;
if ($query->rowCount() > 0) {

    foreach ($results as $result) {
        $nomes = $result->nome;
        $emails = $result->email;
        $telefones = $result->telefone;
        $situacaos = $result->situacao;
        $modelos = $result->modelo;
        $descricaos = $result->descricao;
    }
}
?>
<?php

if (isset($_POST['submit'])) {

    $userid = intval($_GET['id']);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $situacao = $_POST['situacao'];
    $modelo = $_POST['modelo'];
    $descricao = $_POST['descricao'];

    $sql = "update carro set nome=:nomes,email=:emails,telefone=:telefones,situacao=:situacaos,modelo=:modelos,descricao=:descricaos where id=:uid";

    $query = $dbconnection->prepare($sql);

    $query->bindParam(':nomes', $nome, PDO::PARAM_STR);
    $query->bindParam(':emails', $email, PDO::PARAM_STR);
    $query->bindParam(':telefones', $telefone, PDO::PARAM_STR);
    $query->bindParam(':situacaos', $situacao, PDO::PARAM_STR);
    $query->bindParam(':modelos', $modelo, PDO::PARAM_STR);
    $query->bindParam(':descricaos', $descricao, PDO::PARAM_STR);
    $query->bindParam(':uid', $userid, PDO::PARAM_STR);

    $query->execute();

    echo "<script>alert('Dado actualizado com sucesso');</script>";

    echo "<script>window.location.href='seleccao.php'</script>";
}
?>

<?php include("Includes/Headerr.php"); ?>
<div class="container">
    <div class="row centered-form" style="margin: 2%;">
        <div class="col-xs-12 col-sm-8 col-md-12 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Actualização de dados</h3>
                </div>
                <div class="panel-body">
                    <form method="POST">

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control input-sm" placeholder="Nome" required="" value="<?php echo $nomes; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="E-mails" required="" value="<?php echo $emails; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contactno">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control input-sm" placeholder="Telefone" required="" maxlength="10" value="<?php echo $telefones; ?>">
                        </div>
                        <div class="form-group">
                            <label for="situacao">Situação</label>
                            <input type="radio" name="situacao" value="Diagnostico" <?php if ($situacaos == 'Diagnostico') echo 'checked="checked"'; ?>" /> Diagnóstico
                            <input type="radio" name="situacao" value="Reparacao" <?php if ($situacaos == 'Reparacao') echo 'checked="checked"'; ?>" /> Reparação

                        </div>
                        <div class="form-group">
                            <label for="qualification">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control input-sm" placeholder="Modelos" required="" value="<?php echo $modelos; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Descrição</label>
                            <textarea name="descricao" id="descricao" class="form-control input-sm" required=""><?php echo $descricaos; ?></textarea>
                        </div>
                        <input type="submit" name="submit" value="Actualizar" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>