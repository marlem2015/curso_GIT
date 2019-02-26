<?php

require_once('../config.php');
require_once(DBAPI);

$stores = null;
$store = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $stores;
	$stores = find_all('ec_stores');
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['store'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $store = $_POST['store'];
    //$store['modified'] = $store['created'] = $today->format("Y-m-d H:i:s");
    
    save('ec_stores', $store);
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

    if (isset($_POST['store'])) {

      $store = $_POST['store'];
      //$store['modified'] = $now->format("Y-m-d H:i:s");

      update('ec_stores', $id, $store);
      header('location: index.php');
    } else {

      global $store;
      $store = find('ec_stores', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $store;
  $store = find('ec_stores', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $store;
  $store = remove('ec_stores', $id);

  header('location: index.php');
}