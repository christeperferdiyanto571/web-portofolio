<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Render view 'portfolio'
$html = view('portfolio')->render();

// Adjust asset links from CLI localhost domain to relative public path for static hosting (GitHub Pages / Vercel / Netlify)
$html = str_replace([
    'http://localhost/',
    'http://127.0.0.1/',
    'http://::1/'
], './public/', $html);

// Also handle any naked localhost without trailing slash if present
$html = str_replace([
    'http://localhost',
    'http://127.0.0.1'
], './public', $html);

file_put_contents('index.html', $html);
echo "[SUCCESS] Static index.html generated cleanly! Total size: " . number_format(strlen($html)) . " bytes.\n";
