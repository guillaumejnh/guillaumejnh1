<?php
$prenom = "Guillaume";
$troll = [
    "Même l'IA a du mal à suivre la logique de $prenom.",
    "$prenom a réussi à compiler du code... en PowerPoint.",
    "Légende dit que $prenom a déjà supprimé system32 pour aller plus vite.",
    "$prenom = développeur back ? Non, hackeur de son propre cerveau.",
    "$prenom a inventé un nouveau langage : le PHP++.",
    "$prenom a tenté de déboguer son café ce matin.",
    "On dit que $prenom peut résoudre un bug simplement en le fixant du regard.",
    "$prenom a une fois optimisé un algorithme en dormant sur son clavier.",
    "$prenom est tellement Cloud native qu'il a la tête dans les nuages.",
    "Le code de $prenom est comme un bon vin - personne ne comprend comment il fonctionne, mais ça marche.",
    "$prenom a essayé de faire un git push de ses devoirs à son professeur.",
    "Quand $prenom fait du pair programming, c'est avec son reflet dans l'écran.",
    "L'IDE de $prenom a demandé une pause syndicale après sa dernière session de codage."
];
$phrase = $troll[array_rand($troll)];

// Génère une citation tech aléatoire
$citations = [
    "« Le code, c'est comme l'humour : quand on doit l'expliquer, c'est qu'il est mauvais. » — Cory House",
    "« Il y a deux façons d'écrire du code sans bugs. Seule la troisième fonctionne. » — Alan J. Perlis",
    "« Un bon développeur est celui qui regarde des deux côtés avant de traverser une rue à sens unique. » — Doug Linder",
    "« Le débogage, c'est comme être un détective dans un film policier où vous êtes aussi le meurtrier. » — Filipe Fortes",
    "« Le Cloud, c'est juste l'ordinateur de quelqu'un d'autre. » — Richard Stallman"
];
$citation = $citations[array_rand($citations)];

// Génère une couleur de fond aléatoire
$backgrounds = [
    "linear-gradient(to right, #1f2937, #db2777)",
    "linear-gradient(to right, #3b82f6, #10b981)",
    "linear-gradient(to right, #8b5cf6, #ec4899)",
    "linear-gradient(to right, #06b6d4, #3b82f6)",
    "linear-gradient(to right, #f59e0b, #ef4444)"
];
$background = $backgrounds[array_rand($backgrounds)];

// Génère un emoji aléatoire
$emojis = ["👾", "🚀", "🤖", "💻", "🔥", "🧙‍♂️", "🦄", "🧠"];
$emoji = $emojis[array_rand($emojis)];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page spéciale pour Guillaume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #ffffff;
            --secondary-color: rgba(255, 255, 255, 0.7);
            --accent-color: #fbbf24;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: <?= $background ?>;
            color: var(--primary-color);
            text-align: center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: background 0.5s ease;
        }
        
        .container {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 90%;
            margin: 2rem;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .container::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            opacity: 0.5;
            pointer-events: none;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }
        
        .troll-text {
            font-size: 1.5rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            position: relative;
            transition: transform 0.3s ease;
        }
        
        .troll-text:hover {
            transform: scale(1.03);
        }
        
        .citation {
            font-style: italic;
            color: var(--secondary-color);
            margin: 2rem 0;
            padding: 1rem;
            border-left: 4px solid var(--accent-color);
            text-align: left;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        
        .buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .btn {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: var(--primary-color);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .emoji-rain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .emoji {
            position: absolute;
            font-size: 1.5rem;
            animation: fall linear infinite;
            opacity: 0.7;
        }
        
        @keyframes fall {
            0% {
                transform: translateY(-10vh) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0.2;
            }
        }
        
        .cloud-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(0, 0, 0, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1.5rem;
                margin: 1rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .troll-text {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cloud-badge">
            <i class="fas fa-cloud"></i> Cloud Project
        </div>
        
        <h1><?= $emoji ?> Page troll pour <?= $prenom ?> <?= $emoji ?></h1>
        
        <div class="troll-text" id="trollText">
            <?= $phrase ?>
        </div>
        
        <div class="citation">
            <?= $citation ?>
        </div>
        
        <div class="buttons">
            <button class="btn" id="newTrollBtn">
                <i class="fas fa-random"></i> Nouvelle blague
            </button>
            <button class="btn" id="changeThemeBtn">
                <i class="fas fa-palette"></i> Changer le thème
            </button>
        </div>
    </div>
    
    <div class="emoji-rain" id="emojiRain"></div>
    
    <script>
        // Fonction pour créer une pluie d'emojis
        function createEmojiRain() {
            const emojiContainer = document.getElementById('emojiRain');
            emojiContainer.innerHTML = '';
            
            const emojis = ['💻', '☁️', '🚀', '⚡', '🔥', '🧙‍♂️', '🤖', '👾'];
            const count = 20;
            
            for (let i = 0; i < count; i++) {
                const emoji = document.createElement('div');
                emoji.className = 'emoji';
                emoji.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                
                // Position aléatoire
                emoji.style.left = `${Math.random() * 100}vw`;
                
                // Durée et délai aléatoires
                const duration = 5 + Math.random() * 10;
                const delay = Math.random() * 5;
                
                emoji.style.animationDuration = `${duration}s`;
                emoji.style.animationDelay = `${delay}s`;
                
                emojiContainer.appendChild(emoji);
            }
        }
        
        // Fonction pour changer le thème
        document.getElementById('changeThemeBtn').addEventListener('click', function() {
            const backgrounds = [
                "linear-gradient(to right, #1f2937, #db2777)",
                "linear-gradient(to right, #3b82f6, #10b981)",
                "linear-gradient(to right, #8b5cf6, #ec4899)",
                "linear-gradient(to right, #06b6d4, #3b82f6)",
                "linear-gradient(to right, #f59e0b, #ef4444)",
                "linear-gradient(to right, #4f46e5, #7c3aed)",
                "linear-gradient(to right, #0f766e, #047857)"
            ];
            
            const randomBg = backgrounds[Math.floor(Math.random() * backgrounds.length)];
            document.body.style.background = randomBg;
        });
        
        // Fonction pour changer la blague
        document.getElementById('newTrollBtn').addEventListener('click', function() {
            // Cette fonction recharge la page pour obtenir une nouvelle blague
            location.reload();
        });
        
        // Créer la pluie d'emojis au chargement
        window.addEventListener('load', createEmojiRain);
    </script>
</body>
</html>
