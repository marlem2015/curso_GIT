<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Loja</h2>

<form action="edit.php?id=<?php echo $store['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="store['name']" value="<?php echo $store['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Nome Resumido</label>
      <input type="text" class="form-control" name="store['slug']" value="<?php echo $store['slug']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Url</label>
      <input type="text" class="form-control" name="store['url']" value="<?php echo $store['url']; ?>">
    </div>

    <div class="form-group col-md-5">
      <label for="campo3">Descrição</label>
      <input type="text" class="form-control" name="store['description']" value="<?php echo $store['description']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo1">Data da Criação</label>
      <input type="text" class="form-control" name="store['created_at']" value="<?php echo $store['created_at']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Data da Atualização</label>
      <input type="text" class="form-control" name="store['updated_at']" value="<?php echo $store['updated_at']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data da Exclusão</label>
      <input type="text" class="form-control" name="store['deleted_at']" value="<?php echo $store['deleted_at']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Imagem</label>
      <input type="text" class="form-control" name="store['image']" disabled value="<?php echo $store['image']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Logotipo</label>
      <input type="text" class="form-control" name="store['logo']" value="<?php echo $store['logo']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Visibilidade</label>
      <input type="text" class="form-control" name="store['visibility']" value="<?php echo $store['visibility']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Ordem</label>
      <input type="text" class="form-control" name="store['orderID']" value="<?php echo $store['orderID']; ?>">
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