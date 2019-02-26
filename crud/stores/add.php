<?php 
  require_once('functions.php'); 
  add();

  date_default_timezone_set('America/Sao_Paulo');
$data_created = date('Y-m-d H:i:s');

?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nova Loja</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="store['name']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Nome Resumido</label>
      <input type="text" class="form-control" name="store['slug']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Url</label>
      <input type="text" class="form-control" name="store['url']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo1">Descrição</label>
      <input type="text" class="form-control" name="store['description']">
    </div>
   
  
  
    <div class="form-group col-md-2">
      <label for="campo1">Data da Criação</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="store['created_at']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Data da Atualização</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="store['updated_at']">
    </div>
    </div> 
    <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Imagem</label>
      <input type="text" class="form-control" name="store['image']">
    </div>   
    
    <div class="form-group col-md-2">
      <label for="campo3">Logotipo</label>
      <input type="text" class="form-control" name="store['logo']" disabled>
    </div>
 
   
    <div class="form-group col-md-1">
      <label for="campo2">Visibilidade</label>
      <input type="text" class="form-control" name="store['visibility']">
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">Ordem</label>
      <input type="text" class="form-control" name="store['orderID']">
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