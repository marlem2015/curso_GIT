<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['name']; ?></dd>

	<dt>Imagem:</dt>
	<dd><?php echo $customer['imagem']; ?></dd>

	<dt>Páginas:</dt>
	<dd><?php echo $customer['pages']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Desconto:</dt>
	<dd><?php echo $customer['discount_id']; ?></dd>

	<dt>Data da Criação:</dt>
	<dd><?php echo $customer['created_at']; ?></dd>

	<dt>Data de Atualização:</dt>
	<dd><?php echo $customer['updated_at']; ?></dd>

	<dt>Valor PB:</dt>
	<dd><?php echo $customer['price']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Valor extra PB:</dt>
	<dd><?php echo $customer['extra_price']; ?></dd>

	<dt>Visibilidade:</dt>
	<dd><?php echo $customer['visibility']; ?></dd>

	<dt>Data da exclusão:</dt>
	<dd><?php echo $customer['deleted_at']; ?></dd>

	<dt>Loja:</dt>
	<dd><?php echo $customer['store_id']; ?></dd>

	<dt>Curso:</dt>
	<dd><?php echo $customer['course_id']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>