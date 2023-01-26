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
 * cek halaman yang ingin diakses
 * 
 */


if ($page === '/') {

    require_once __DIR__ . '/../login.php';
} else {
    if (!isset($_SESSION['users'])) {
        /**
         * REDIRECT / MEMINDAHKAN USERS
         * 
         */
        header('Location' . env('APP_URL'));
    }
    require_once __DIR__ . '/../layout.php';
}
