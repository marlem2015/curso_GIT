<?php

require_once('../config.php');
require_once(DBAPI);

$salesman = null;
$salesm = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $salesman;
	$salesman = find_all('ec_salesman');
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['salesm'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $salesm = $_POST['salesm'];
    //$salesm['modified'] = $salesm['created'] = $today->format("Y-m-d H:i:s");
    
    save('ec_salesman', $salesm);
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

    if (isset($_POST['salesm'])) {

      $salesm = $_POST['salesm'];
      //$salesm['modified'] = $now->format("Y-m-d H:i:s");

      update('ec_salesman', $id, $salesm);
      header('location: index.php');
    } else {

      global $salesm;
      $salesm = find('ec_salesman', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $salesm;
  $salesm = find('ec_salesman', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $salesm;
  $salesm = remove('ec_salesman', $id);

  header('location: index.php');
}