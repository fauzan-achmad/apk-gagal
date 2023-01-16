<?php

/**
 * fungsi pengembangan aplikasi
 */

function env(string $key, mixed $default = null)
{

    return $_ENV[$key] ?? $default;
}

function asset(string $asset)
{

    return env('APP_URL') . $asset;
}
