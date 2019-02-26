<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Curso <?php echo $course['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $course['name']; ?></dd>

	<dt>Data da Criação:</dt>
	<dd><?php echo $course['created_at']; ?></dd>

	<dt>Data da Atualização:</dt>
	<dd><?php echo $course['updated_at']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data da Exclusão:</dt>
	<dd><?php echo $course['deleted_at']; ?></dd>

	<dt>Visibilidade:</dt>
	<dd><?php echo $course['visibility']; ?></dd>

	<dt>URL:</dt>
	<dd><?php echo $course['url']; ?></dd>	
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $course['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>