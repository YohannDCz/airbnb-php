<?php
declare(strict_types=1);

// Router Vercel pour application PHP
// - Redirige toutes les URLs (sauf assets/statics gérés par vercel.json)
// - Sert les templates PHP en conservant leurs chemins relatifs
// - Délègue les POST/GET des formulaires aux fichiers dans src/routeur/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

// Démarre la session (attention: stockage éphémère en serverless)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$path = rtrim($path, '/') === '' ? '/' : rtrim($path, '/');

// Compat PHP < 8 pour str_starts_with
if (!function_exists('str_starts_with')) {
    function str_starts_with(string $haystack, string $needle): bool {
        return $needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}

function includeInDir(string $dir, string $file): void {
    $cwd = getcwd();
    chdir($dir);
    require $file;
    chdir($cwd);
}

// 1) Endpoints "routeur" (POST de formulaires)
if (str_starts_with($path, '/src/routeur/')) {
    $relative = substr($path, strlen('/src/routeur/'));
    // Sécurise un minimum: n'autorise que .php dans ce dossier
    if ($relative !== '' && preg_match('/^[A-Za-z0-9_\-\/]+\.php$/', $relative)) {
        $dir = __DIR__ . '/../src/routeur';
        $file = $relative;
        if (!is_file($dir . '/' . $file)) {
            http_response_code(404);
            echo 'Not found';
            exit;
        }
        includeInDir($dir, $file);
        exit;
    }
}

// 2) Feuille de style dynamique
if ($path === '/styles/dark_theme.php' || $path === '/templates/styles/dark_theme.php') {
    $dir = __DIR__ . '/../templates/styles';
    $file = 'dark_theme.php';
    includeInDir($dir, $file);
    exit;
}

// 3) Templates (par sous-répertoire)
$templateMap = [
    '/general/'    => __DIR__ . '/../templates/general',
    '/user/'       => __DIR__ . '/../templates/user',
    '/backoffice/' => __DIR__ . '/../templates/backoffice',
    '/templates/general/'    => __DIR__ . '/../templates/general',
    '/templates/user/'       => __DIR__ . '/../templates/user',
    '/templates/backoffice/' => __DIR__ . '/../templates/backoffice',
];

foreach ($templateMap as $prefix => $dir) {
    if (str_starts_with($path . '/', $prefix)) {
        $relative = ltrim(substr($path, strlen(rtrim($prefix, '/'))), '/');
        if ($relative === '') {
            break;
        }
        if (preg_match('/^[A-Za-z0-9_\-\/]+\.php$/', $relative) && is_file($dir . '/' . $relative)) {
            includeInDir($dir, $relative);
            exit;
        }
    }
}

// 4) Page d'accueil par défaut
if ($path === '/' || $path === '/index.php') {
    includeInDir(__DIR__ . '/../templates/general', 'homepage.php');
    exit;
}

// 5) Fallback 404 si rien ne matche
http_response_code(404);
echo '404 Not Found';
