<?php
require_once "./src/Course.php";
require_once "./src/DecoratorDepart.php";
require_once "./src/DecoratorRes.php";

// Vérifie si le bouton a été cliqué
$courseStarted = isset($_POST['start_race']);
$participants = [];

if ($courseStarted) {
    $course = new Course();
    $course->run();
    $participants = $course->getParticipants();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP STAR RACE - SAIDI Adel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a2e;
            color: white;
            text-align: center;
        }
        .container {
            margin: 50px auto;
            width: 80%;
            background-color: #16213e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
        }
        h1 {
            color: #e94560;
        }
        .result {
            font-size: 1.2em;
            margin-top: 20px;
        }
        button {
            background-color: #e94560;
            color: white;
            font-size: 1.2em;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }
        button:hover {
            background-color: #d63447;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🏁 Star Race 🏁</h1>

        
        <form method="POST">
            <button type="submit" name="start_race">Lancer la course 🚀</button>
        </form>

        <?php if ($courseStarted): ?>
            <h2>🚀 Participants</h2>
            <?php DecoratorDepart::afficher($participants); ?>

            <h2>🏆 Résultats</h2>
            <?php DecoratorRes::afficher($participants); ?>
        <?php endif; ?>
    </div>

</body>
</html>
