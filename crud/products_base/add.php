<?php 
  require_once('functions.php');

  require_once('../inc/database.php');

  $database = open_database();  

  add();

  date_default_timezone_set('America/Sao_Paulo');
  $data_created = date('Y-m-d H:i:s');
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Produto - Base</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <div class="form-group col-md-2">
      <label for="campo3">Referência</label>
      <input type="text" class="form-control" name="product['reference']">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="product['name']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Descrição</label>
      <input type="text" class="form-control" name="product['description']">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-3">
      <label for="campo3">Imagem</label>
      <input type="text" class="form-control" name="product['image']">
    </div>
  
  
  
    <div class="form-group col-md-4">
      <label for="campo1">Loja</label>

      <select name="product['store_id']" id="stores" class="form-control">
      <?php 
      // buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_stores";
      $result = $database->query($sql);

      while($row = mysqli_fetch_assoc($result)) { ?>
      
        <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>;     
     
     <?php } ?>
      </select>     

    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Curso</label>
      <select name="product['course_id']" id="courses" class="form-control">
      <?php 
      // buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_courses";
      $result = $database->query($sql);

      while($row = mysqli_fetch_assoc($result)) { ?>
      
        <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>;     
     
     <?php } ?>
      </select> 
      
    </div>
  </div>

    <div class="row">
    <div class="form-group col-md-3">
      <label for="campo3">Vendedor</label>
      <select name="product['salesm_id']" id="salesman" class="form-control">
      <?php 
      // buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_salesman";
      $result = $database->query($sql);

      while($row = mysqli_fetch_assoc($result)) { ?>
      
        <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>;     
     
     <?php } ?>
      </select> 
      
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">Páginas</label>
      <input type="text" class="form-control" name="product['pages']">
    </div>
  
    <div class="form-group col-md-2">
      <label for="campo1">Valor PB</label>
      <input type="text" class="form-control" name="product['price']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Valor PB Extra</label>
      <input type="text" class="form-control" name="product['extra_price']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Valor Color</label>
      <input type="text" class="form-control" name="product['price_color']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Valor Extra Color</label>
      <input type="text" class="form-control" name="product['extra_price_color']">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Descontos</label>
      <input type="text" class="form-control" name="product['discount_id']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data da Criação</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="product['created_at']" disabled>
    </div>

     <div class="form-group col-md-2">
      <label for="campo3">Data da Atualização</label>
      <input type="text" class="form-control" value="<?php echo $data_created; ?>" name="product['updated_at']" disabled>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Visibilidade</label>
      <input type="text" class="form-control" name="product['visibility']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Ordem</label>
      <input type="text" class="form-control" name="product['orderID']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Finalizado</label>
      <input type="text" class="form-control" name="product['finishing']">
    </div> 
    
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php 

close_database($database);

include(FOOTER_TEMPLATE); ?>