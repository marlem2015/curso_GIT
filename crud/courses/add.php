<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE);

date_default_timezone_set('America/Sao_Paulo');
$data_created = date('Y-m-d H:i:s');

 ?>

<h2>Novo Curso</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-6">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="course['name']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Data da Criação</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="course['created_at']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data da Atualização</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="course['updated_at']">
    </div>
  </div>
  
  <div class="row">
   
    <div class="form-group col-md-3">
      <label for="campo2">Visibilidade</label>
      <input type="text" class="form-control" name="course['visibility']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">URL</label>
      <input type="text" class="form-control" name="course['url']">
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