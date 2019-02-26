<?php 
	require_once('functions.php'); 
	view($_GET['id']);
	$database = open_database();  
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto <?php echo $product['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $product['name']; ?></dd>

	<dt>Loja:</dt>
	<dd><?php 

	// buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_stores";
      $result = $database->query($sql);

       while($row = mysqli_fetch_assoc($result)) { 
      
        if ($row['id'] == $product['store_id']) {

        	echo $row['name']; 
        }}
        ?></dd>

    <dt>Referência:</dt>
	<dd><?php echo $product['reference']; ?></dd>

	<dt>Curso:</dt>
	<dd><?php 
	// buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_courses";
      $result = $database->query($sql);

       while($row = mysqli_fetch_assoc($result)) { 
      
        if ($row['id'] == $product['course_id']) {

        	echo $row['name']; 
        }}
	 ?></dd>

	<dt>Vendedor:</dt>
	<dd><?php 
	// buscar no banco de dados o nome da loja
      $sql = "SELECT * FROM ec_salesman";
      $result = $database->query($sql);

       while($row = mysqli_fetch_assoc($result)) { 
      
        if ($row['id'] == $product['salesm_id']) {

        	echo $row['name']; 
        }}
        ?></dd>

	<dt>Imagem:</dt>
	<dd><?php echo $product['image']; ?></dd>

	
</dl>

<dl class="dl-horizontal">
	<dt>Data da Criação:</dt>
	<dd><?php echo $product['created_at']; ?></dd>

	<dt>Data de Atualização:</dt>
	<dd><?php echo $product['updated_at']; ?></dd>

	<dt>Data da exclusão:</dt>
	<dd><?php echo $product['deleted_at']; ?></dd>	
</dl>

<dl class="dl-horizontal">
	<dt>Páginas:</dt>
	<dd><?php echo $product['pages']; ?></dd>
	
	<dt>Valor PB:</dt>
	<dd><?php echo $product['price']; ?></dd>

	<dt>Valor extra PB:</dt>
	<dd><?php echo $product['extra_price']; ?></dd>

	<dt>Valor Color:</dt>
	<dd><?php echo $product['price_color']; ?></dd>

	<dt>Valor extra Color:</dt>
	<dd><?php echo $product['extra_price_color']; ?></dd>

	<dt>Desconto:</dt>
	<dd><?php echo $product['discount_id']; ?></dd>

	<dt>Visibilidade:</dt>
	<dd><?php echo $product['visibility']; ?></dd>

	

	
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>