<?php
$name = $_GET['name'] ?? null;
$mail = $_GET['mail'] ?? null;
$age = $_GET['age'] ?? null;

if ($_SERVER["REQUEST_METHOD"] == "GET" && $name !== null && $mail !== null && $age !== null) {
    if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
        $accessMessage = "Accesso riuscito";
    } else {
        $accessMessage = "Accesso negato";
    }
} else {
    $accessMessage = "Accesso negato";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/favicon.ico">
    <title>Form Response</title>
    <!-- BOOTSTRAP 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="card m-5 p-3 text-center fs-3 <?= $accessMessage === "Accesso riuscito" ? 'bg-success' : 'bg-danger' ?>"
        style="width: 25rem;">
        <p>
            <?= $accessMessage ?>
        </p>
    </div>
</body>

</html>