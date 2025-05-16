<?php
// Récupère la chaîne DSN stockée dans Azure Key Vault (via variable d'environnement)
$dsn  = getenv("DATABASE_URL");

// Login SQL Server
$user = 'Yohann';
$pass = 'Azerty123.';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie à Azure SQL Server avec PDO.";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}
