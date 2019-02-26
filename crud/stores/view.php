<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Loja <?php echo $store['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $store['name']; ?></dd>

	<dt>Nome Resumido:</dt>
	<dd><?php echo $store['slug']; ?></dd>

	<dt>Url:</dt>
	<dd><?php echo $store['url']; ?></dd>

	<dt>Descrição:</dt>
	<dd><?php echo $store['description']; ?></dd>
</dl>

<dl class="dl-horizontal">
	
	<dt>Data da Criação:</dt>
	<dd><?php echo $store['created_at']; ?></dd>

	<dt>Data de Atualização:</dt>
	<dd><?php echo $store['updated_at']; ?></dd>

	<dt>Data da exclusão:</dt>
	<dd><?php echo $store['deleted_at']; ?></dd>
	
</dl>

<dl class="dl-horizontal">
	<dt>Imagem:</dt>
	<dd><?php echo $store['image']; ?></dd>

	<dt>Logotipo:</dt>
	<dd><?php echo $store['logo']; ?></dd>	

	<dt>Visibilidade:</dt>
	<dd><?php echo $store['visibility']; ?></dd>

	<dt>Ordem:</dt>
	<dd><?php echo $store['orderID']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $store['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>