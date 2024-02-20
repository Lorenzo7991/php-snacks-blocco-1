<?php
$basketball_games = [
    [
        "home_team" => "Team A",
        "away_team" => "Team B",
        "home_team_points" => 85,
        "away_team_points" => 78
    ],
    [
        "home_team" => "Team C",
        "away_team" => "Team D",
        "home_team_points" => 92,
        "away_team_points" => 95
    ],
    [
        "home_team" => "Team E",
        "away_team" => "Team F",
        "home_team_points" => 102,
        "away_team_points" => 98
    ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/favicon.ico">
    <title>Basketball Games</title>
    <!-- BOOTSTRAP 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>

<body class="bg-dark">
    <div class="container text-white mt-5 fs-4">
        <ul class="list-unstyled">
            <?php foreach ($basketball_games as $game): ?>
                <li class="my-3">
                    <?= "{$game['home_team']} - {$game['away_team']} | {$game['home_team_points']} - {$game['away_team_points']}" ?>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</body>

</html>