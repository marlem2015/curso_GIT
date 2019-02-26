<?php 
  require_once('functions.php'); 
  edit();


  date_default_timezone_set('America/Sao_Paulo');
  $data_updated = date('Y-m-d H:i:s');

?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Vendedor</h2>

<form action="edit.php?id=<?php echo $salesm['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="salesm['name']" value="<?php echo $salesm['name']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">E-mail</label>
      <input type="text" class="form-control" name="salesm['email']" value="<?php echo $salesm['email']; ?>">
    </div>

    
  </div>
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Telefone</label>
      <input type="text" class="form-control" name="salesm['telefone']" value="<?php echo $salesm['telefone']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">CPF</label>
      <input type="text" class="form-control" name="salesm['cpf']" value="<?php echo $salesm['cpf']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Data da Criação</label>
      <input type="text" class="form-control" name="salesm['created_at']" value="<?php echo $salesm['created_at']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Atualização</label>
      <input type="text" class="form-control" name="salesm['updated_at']" value="<?php echo $data_updated; ?>">
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