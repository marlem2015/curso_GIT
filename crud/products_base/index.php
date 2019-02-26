<?php
    require_once('functions.php');
    index();

?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Produtos - Base</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Produto - Base</a>
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
		<th>Referência</th>
		<th width="20%">Nome</th>
		<th>Loja</th>
		<th>Curso</th>
		<th>Vendedor</th>
		<th>Páginas</th>
		<th>Valor PB</th>
		<th>Valor Color</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($products) : ?>
<?php foreach ($products as $product) : ?>
	<tr>
		<td><?php echo $product['id']; ?></td>
		<td><?php echo $product['reference']; ?></td>
		<td><?php echo $product['name']; ?></td>
		<td>
		<?php 
		// buscar no banco de dados o nome da loja
		global $store;
  		$store = find('ec_stores', $product['store_id']);

  		if ($product['store_id'] !=0) {

  			echo $store['name'];

  		}  ?>
			
		</td>

		<td>
		<?php 
		// buscar no banco de dados o nome da loja
		global $course;
  		$course = find('ec_courses', $product['course_id']);

  		if ($product['course_id'] !=0) {

  			echo $course['name'];
  		}
		?>
			
		</td>

		<td>
		<?php 
		// buscar no banco de dados o nome da loja
		global $salesman;
  		$salesman = find('ec_salesman', $product['salesm_id']);

  		if ($product['salesm_id'] !=0) {
  			echo $salesman['name'];  			
  		}
		 ?>
			
		</td>
		<td><?php echo $product['pages']; ?></td>
		<td><?php echo $product['price']; ?></td>
		<td><?php echo $product['price_color']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="delete.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $product['id']; ?>">
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