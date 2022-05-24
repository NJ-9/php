<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Vous vous êtes connecté avec succès ! Bravo !!</h1>

    <?php
    $email = $_SESSION["email"]; 
    echo "Bonjour $email. Je t'ai créé la session : " . session_id() . " ";
    ?>

</body>
</html>