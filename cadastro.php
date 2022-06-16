<?php 
include("Includes/Headerr.php"); 
?>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-12 col-sm-offset-2 col-md-offset-4" style="margin: 2%;">
           <div class="panel panel-default">
              <div class="panel-heading">
                   <h3 class="panel-title">FLO SOLUTION</h3>
                   </div>
                   <div class="panel-body">
                   <form method="POST" action="insert.php">
                      
                            <div class="form-group">
                         <label for="nome">Nome</label>
                         <input type="text" name="nome" id="nome" class="form-control input-sm" placeholder="Nome" required="">
                      </div>
                      <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required="">
                      </div>
                      <div class="form-group">
                         <label for="telefone">Telefone</label>
                         <input type="text" name="telefone" id="telefone" class="form-control input-sm" placeholder="Telefone" required="" maxlength="10">
                      </div>
                      <div class="form-group">
                         <label for="modelo">Modelo</label>
                         <input type="text" name="modelo" id="modelo" class="form-control input-sm" placeholder="Modelo" required="">
                      </div>
                      <div class="form-group">
                         <label for="name">Situação</label>
                         <input type="radio" name="situacao" value="Diagnostico">Diagnóstico<input type="radio" name="situacao" value="Reparacao">Reparação
                      </div>
                      <div class="form-group">
                         <label for="name">Descrição</label>
                         <textarea name="descricao" id="descricao" class="form-control input-sm" required=""></textarea>
                      </div>
                               <input type="submit" name="submit" value="Adicionar" class="btn btn-info btn-block">
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
