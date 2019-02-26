<?php 
  require_once('functions.php'); 

  $database = open_database();  
  edit();

  date_default_timezone_set('America/Sao_Paulo');
  $data_updated = date('Y-m-d H:i:s');
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto - Base</h2>

<form action="edit.php?id=<?php echo $product['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo2">Referência</label>
      <input type="text" class="form-control" name="product['reference']" value="<?php echo $product['reference']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="product['name']" value="<?php echo $product['name']; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="description">Descrição</label>
      <input type="text" class="form-control" name="product['description']" value="<?php echo $product['description']; ?>">
    </div>

  </div>
  <div class="row">
     <div class="form-group col-md-2">
      <label for="campo2">Imagem</label>
      <input type="text" class="form-control" name="product['image']" value="<?php echo $product['image']; ?>">
    </div>
  
  
     <div class="form-group col-md-4">
      <label for="campo1">Loja</label>

      <select name="product['store_id']" id="stores" class="form-control">
      <?php 
      // buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_stores";
      $result = $database->query($sql);

      while ($row = mysqli_fetch_assoc($result)) { 

        if ($row['id'] == $product['store_id']) {?>

           <option value="<?php echo $row['id']?>" selected='selected'><?php echo $row['name']; ?></option>;  

        <?php } else {?>
      
        <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>;     
     
     <?php } }?>
      </select>     

    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Curso</label>
      <select name="product['course_id']" id="courses" class="form-control">
      <?php 
      // buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_courses";
      $result = $database->query($sql);

      while($row = mysqli_fetch_assoc($result)) { 
      
        if ($row['id'] == $product['course_id']) {?>

           <option value="<?php echo $row['id']?>" selected='selected'><?php echo $row['name']; ?></option>;  

        <?php } else {?>
      
        <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>;      
     
     <?php } } ?>
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

       while($row = mysqli_fetch_assoc($result)) { 
      
        if ($row['id'] == $product['salesm_id']) {?>

           <option value="<?php echo $row['id']?>" selected='selected'><?php echo $row['name']; ?></option>;  

        <?php } else {?>
      
        <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>;      
     
     <?php } } ?>
      </select> 
      
    </div>    

    <div class="form-group col-md-1">
      <label for="campo3">Páginas</label>
      <input type="text" class="form-control" name="product['pages']" value="<?php echo $product['pages']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Valor PB</label>
      <input type="text" class="form-control" name="product['price']" value="<?php echo $product['price']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Valor Extra PB</label>
      <input type="text" class="form-control" name="product['extra_price']" value="<?php echo $product['extra_price']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Valor Color</label>
      <input type="text" class="form-control" name="product['price_color']" value="<?php echo $product['price_color']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Valor Extra Color</label>
      <input type="text" class="form-control" name="product['extra_price_color']" value="<?php echo $product['extra_price_color']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Descontos</label>
      <input type="text" class="form-control" name="product['discount_id']" disabled value="<?php echo $product['discount_id']; ?>">
    </div>
  
    <div class="form-group col-md-2">
      <label for="campo2">Data da Criação</label>
      <input type="text" class="form-control" name="product['created_at']" value="<?php echo $product['created_at']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Atualização</label>
      <input type="text" class="form-control" name="product['updated_at']" value="<?php echo $data_updated; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data da Exclusão</label>
      <input type="text" class="form-control" name="product['deleted_at']" value="<?php echo $product['deleted_at']; ?>">
    </div>   

    <div class="form-group col-md-2">
      <label for="campo3">Visibilidade</label>
      <input type="text" class="form-control" name="product['visibility']" value="<?php echo $product['visibility']; ?>">
    </div>    

    <div class="form-group col-md-1">
      <label for="campo3">Ordem</label>
      <input type="text" class="form-control" name="product['orderID']" value="<?php echo $product['orderID']; ?>">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">Finalizado</label>
      <input type="text" class="form-control" name="product['finishing']" value="<?php echo $product['finishing']; ?>">
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