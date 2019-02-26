<?php 
  require_once('functions.php'); 
  add();

  date_default_timezone_set('America/Sao_Paulo');
  $data_created = date('Y-m-d H:i:s');
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Vendedor</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="salesm['name']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">E-mail</label>
      <input type="text" class="form-control" name="salesm['email']">
    </div>   
  </div>
  
  <div class="row">
     <div class="form-group col-md-2">
      <label for="campo3">Telefone</label>
      <input type="text" class="form-control" name="salesm['telefone']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">CPF</label>
      <input type="text" class="form-control" name="salesm['cpf']">
    </div>

     <div class="form-group col-md-2">
      <label for="campo2">Data da Criação</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="salesm['created_at']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data da Atualização</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="salesm['updated_at']">
    </div>
   
  </div>
  
   
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>