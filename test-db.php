<?php
// Récupère les infos de connexion depuis les vars d'environnement
$host = getenv('DB_HOST') ?: 'mysql-partiel-guillaume.mysql.database.azure.com';
$db   = getenv('DB_NAME') ?: 'partieldb';
$user = getenv('DB_USER') ?: 'adminmysql@mysql-partiel-guillaume';
$pass = getenv('DB_PASS') ?: 'Partiel2024!';

// Monte la chaîne DSN complète, avec port et charset
$dsn  = "mysql:host={$host};dbname={$db};port=3306;charset=utf8";

try {
    // Instancie PDO
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie à MySQL avec PDO.";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}
