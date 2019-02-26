<?php

require_once('../config.php');
require_once(DBAPI);

$products = null;
$product = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $products;
	$products = find_all('ec_products');
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['product'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $product = $_POST['product'];
    //$product['modified'] = $product['created'] = $today->format("Y-m-d H:i:s");
    
    save('ec_products', $product);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['product'])) {

      $product = $_POST['product'];
      //$product['modified'] = $now->format("Y-m-d H:i:s");

      update('ec_products', $id, $product);
      header('location: index.php');
    } else {

      global $product;
      $product = find('ec_products', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $product;
  $product = find('ec_products', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $product;
  $product = remove('ec_products', $id);

  header('location: index.php');
}