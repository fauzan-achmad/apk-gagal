<?php

/**
 * Load packages.
 * 
 */

use Dotenv\Dotenv;

/**
 * memuat packages.
 */

require_once __DIR__ . '/../vendor/autoload.php';
/**
 * 
 * memuat fungsi helpers
 */

require_once __DIR__ . '/../src/helpers.php';
session_start();

/**
 * mendapatkan parameter page.
 * 
 */

$page = $_GET['page'] ?? '/';

/**
 * memuat konfigurasi
 * 
 */

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

/**
 * memuat koneksi database
 * 
 */

require_once __DIR__ . '/../src/database/connection.php';
/**
 * cek mode debug.
 * 
 */

if (!filter_var($_ENV['APP_DEBUG'], FILTER_VALIDATE_BOOL)) {

    error_reporting(1); //Set laporan error
}

/**
 * Check admin user.
 * 
 */

$query = $connection->query("SELECT * FROM users WHERE email = 'admin@employee.co.id' LIMIT 1");
$admin = $query->fetch_assoc();

if (!$admin) {
    $name = 'Admin';
    $email = 'admin@employee.co.id';
    $password = password_hash('admin', PASSWORD_DEFAULT);

    $connection->query("INSERT INTO users ( name, email, password ) VALUES (
    '$name',
    '$email',
    '$password'
)");
}

/**
 * cek halaman yang ingin diakses
 * 
 */

if ($page === '/') {

    require_once __DIR__ . '/../login.php';
} else {
    if (!isset($_SESSION['user'])) {
        /**
         * REDIRECT / MEMINDAHKAN USERS
         * 
         */
        header('Location:' . env('APP_URL'));
        die();
    }
    require_once __DIR__ . '/../layout.php';
}
