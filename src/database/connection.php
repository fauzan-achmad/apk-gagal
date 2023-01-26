<?php


$connection = mysqli_connect(
    env('DATABASE_HOST'),
    env('DATABASE_USERNAME'),
    env('DATABASE_PASSWORD'),
    env('DATABASE_NAME'),
    env('DATABASE_PORT'),
);

if (!$connection) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
