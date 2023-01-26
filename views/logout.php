<?php

unset($_SESSION['user']);

echo "<script> document.location.href = ' " . env('APP_URL') .  " '</script>";
