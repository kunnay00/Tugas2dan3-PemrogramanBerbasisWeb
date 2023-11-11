<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';


abstract class Controller {
    abstract static function index(); // SHOW ALL
    abstract static function show($data); // SHOW SPECIFIC
    abstract static function add(); // ADD DATA FORM
    abstract static function save(); // SAVE DATA
    abstract static function edit($data); // EDIT SPECIFIC
    abstract static function update($data); // UPDATE DATA
    abstract static function remove($data);
}

abstract class AbstractStudents {
    abstract static function select(); // untuk select semua data dari tabel student
    abstract static function insert($id, $name, $email, $role_fk); // untuk insert/memasukkan data ke tabel student
    abstract static function delete(); // untuk menghapus data student
    abstract static function joinRoles($clauseAddition = ""); // untuk join roles
    abstract static function fresh(); // untuk mengembalikan data
    abstract static function selectById($id); // untuk select data berdasarkan id
    abstract static function selectWhere($clause); // untuk select data berdasarkan kondisi
    abstract static function updateById($id, $name, $email, $role_fk); // untuk update data berdasarkan id
    abstract static function updateWhere($clause, $name, $email, $role_fk); // untuk update data berdasarkan kondisi
    abstract static function deleteById($id);  //untuk menghapus data berdasarkan id
    abstract static function deleteWhere($clause); //untuk menghapus data berdasarkan kondisi
}


interface CustomFunctions {
    static function purge();
    static function restore();
}