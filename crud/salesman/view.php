<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Vendedor <?php echo $salesm['name']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $salesm['name']; ?></dd>

	<dt>E-mail:</dt>
	<dd><?php echo $salesm['email']; ?></dd>	
</dl>

<dl class="dl-horizontal">
	<dt>Telefone:</dt>
	<dd><?php echo $salesm['telefone']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $salesm['cpf']; ?></dd>

	<dt>Data da Criação:</dt>
	<dd><?php echo $salesm['created_at']; ?></dd>

	<dt>Data de Atualização:</dt>
	<dd><?php echo $salesm['updated_at']; ?></dd>
	
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $salesm['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>