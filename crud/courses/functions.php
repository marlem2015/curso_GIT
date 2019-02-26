<?php

require_once('../config.php');
require_once(DBAPI);

$courses = null;
$course = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $courses;
	$courses = find_all('ec_courses');
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['course'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $course = $_POST['course'];
    //$course['updated_at'] = $course['created_at'] = $today->format("Y-m-d H:i:s");
    
    save('ec_courses', $course);
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

    if (isset($_POST['course'])) {

      $course = $_POST['course'];
      $course['updated_at'] = $now->format("Y-m-d H:i:s");

      update('ec_courses', $id, $course);
      header('location: index.php');
    } else {

      global $course;
      $course = find('ec_courses', $id);
    } 
  } else {
    header('location: index.php');
  }
}


/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $course;
  $course = find('ec_courses', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $course;
  $course = remove('ec_courses', $id);

  header('location: index.php');
}