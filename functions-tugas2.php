<?php

// Fungsi untuk melakukan redirect ke URL tertentu
function redirect($url)
{
    header("Location: $url");
    exit();
}

// untuk menampilkan pesan error
function display_error($message)
{
    echo '<div class="error-message">' . $message . '</div>';
}

// untuk menampilkan pesan sukses
function display_success($message)
{
    echo '<div class="success-message">' . $message . '</div>';
}

// untuk mengambil data dari database (contoh)
function get_data_from_database($table, $id)
{
    // implementasi pengambilan data dari database
    // $table adalah nama tabel, $id adalah ID data yang ingin diambil
    // return data dalam bentuk array atau objek
}

// untuk menyimpan data ke database (contoh)
function save_data_to_database($table, $data)
{
    // implementasi penyimpanan data ke database
    // $table adalah nama tabel, $data adalah array data yang akan disimpan
    // return true jika berhasil, false jika gagal
}

// untuk validasi input (contoh)
function validate_input($input)
{
    // implementasi validasi input, misalnya, cek apakah input adalah email yang valid
    // return true jika valid, false jika tidak valid
}

// untuk mengambil data customer (contoh)
function get_customer_data($customer_id)
{
    // implementasi pengambilan data customer dari database
    // return data customer dalam bentuk array atau objek
}

// untuk mengambil data item (contoh)
function get_item_data($item_id)
{
    // implementasi pengambilan data item dari database
    // return data item dalam bentuk array atau objek
}

// untuk halaman admin
function admin()
{
    require_once('../view/admin-panel/admin-login.php');
}

// untuk halaman dashboard admin
function dashboard()
{
    // implementasi halaman dashboard admin 
    require_once('../view/admin-panel/admin-dashboard.php');
}

// untuk halaman login customer
function customer_login()
{
    // implementasi halaman login customer
    require_once('../view/forms/customer-login.php');
}

// untuk proses login customer
function customer_login_save()
{
    // implementasi proses login customer 
    echo "Proses Login Customer";
}

// untuk halaman registrasi customer
function customer_register()
{
    // implementasi halaman registrasi customer 
    require_once('../view/forms/customer-register.php');
}

// untuk proses registrasi customer
function customer_register_save()
{
    // implementasi proses registrasi customer
    echo "Proses Register Customer";
}

// untuk halaman profil customer
function customer_profile()
{
    // implementasi halaman profil customer 
    require_once('../view/forms/customer-profil.php');
}

// untuk proses edit profil customer
function customer_profile_edited()
{
    // implementasi proses edit profil customer 
    echo "Proses Edit Profil Customer";
}

// untuk halaman detail item
function item($id)
{
    // implementasi halaman detail item dengan ID tertentu 
    require_once('../view/shop/item.php');
    getItemById($id);
}

// untuk halaman keranjang belanja
function cart()
{
    // implementasi halaman keranjang belanja 
    require_once('../view/shop/cart.php');
}

// untuk halaman detail pesanan
function order($id)
{
    // implementasi halaman detail pesanan dengan ID tertentu
    require_once('../view/shop/order.php');
    getItemById($id);
}

// untuk halaman kontak
function contact()
{
    // implementasi halaman kontak 
    require_once('../view/shop/contact.php');
}

// untuk proses logout
function logout()
{
    // implementasi proses logout 
    echo "Proses Logout";
}
