<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Cursos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Curso</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="12%">Nome</th>
		<th>Data da Criação</th>
		<th>Data da Atualização</th>
		<th>Data da Exclusão</th>
		<th>Visibilidade</th>
		<th>URL</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($courses) : ?>
<?php foreach ($courses as $course) : ?>
	<tr>
		<td><?php echo $course['id']; ?></td>
		<td><?php echo $course['name']; ?></td>
		<td><?php echo $course['created_at']; ?></td>
		<td><?php echo $course['updated_at']; ?></td>
		<td><?php echo $course['deleted_at']; ?></td>
		<td><?php echo $course['visibility']; ?></td>
		<td><?php echo $course['url']; ?></td>
		
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $course['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $course['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="delete.php?id=<?php echo $course['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-course="<?php echo $course['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>