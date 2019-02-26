<?php 
  require_once('functions.php'); 
  edit();

  date_default_timezone_set('America/Sao_Paulo');
$data_updated = date('Y-m-d H:i:s');

?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Curso</h2>

<form action="edit.php?id=<?php echo $course['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="course['name']" value="<?php echo $course['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Data da Criação</label>
      <input type="text" class="form-control" name="course['created_at']" value="<?php echo $course['created_at']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Atualização</label>
      <input type="text" class="form-control" name="course['updated_at']" value="<?php echo $data_updated; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Data da Exclusão</label>
      <input type="text" class="form-control" name="course['deleted_at']" value="<?php echo $course['deleted_at']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Visibilidade</label>
      <input type="text" class="form-control" name="course['visibility']" value="<?php echo $course['visibility']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">URL</label>
      <input type="text" class="form-control" name="course['url']" value="<?php echo $course['url']; ?>">
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