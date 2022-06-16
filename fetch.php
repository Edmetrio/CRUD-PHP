<?php 
include  'dbconnection.php';
?>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <div class="container">
    <div class="row centered-form">
      <div class="col-lg-12 ">
          <p><a href="indexx.php">Adicionar</a></p>
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3 class="panel-title">FLO SOLUTION</h3> </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Situação</th>
                  <th>Modelo</th>
                  <th>Descrição</th>
                  <th>Acções</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                      $sql ="SELECT id,nome,email,telefone,situacao,modelo,descricao from carro";
                      $query= $dbconnection -> prepare($sql);
                      $query-> execute();
                      $results = $query -> fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;
                      if($query -> rowCount() > 0)
                      {
                      foreach($results as $result)
                      {
                      ?>
                  <tr>
                    <td><?php echo($cnt);?></td>
                    <td><?php echo htmlentities($result->nome);?></td>
                    <td><?php echo htmlentities($result->email);?></td>
                    <td><?php echo htmlentities($result->telefone);?></td>
                    <td><?php echo htmlentities($result->situacao);?></td>
                    <td><?php echo htmlentities($result->modelo);?></td>
                    <td><?php echo htmlentities($result->descricao);?></td>
                    <td>  <a href="edit.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs">Alterar</button></a>  <a href="delete.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Quer mesmo apagar?');">Deletar</button></a></td>
                  </tr>
                  <?php  $cnt=$cnt+1; } } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  body {
    background-color: #fff;
  }
  
  .centered-form {
    margin-top: 60px;
  }
  
  .centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  </style>