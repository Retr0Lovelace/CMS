<?php

$error = $_SERVER['REDIRECT_STATUS'];

$error_title = '';
$error_message = '';

if ($error == 404) {
  $error_title = '404 Page non trouvée';
  $error_message = 'Désolé, mais la page que vous tentez d\'afficher n\'existe pas.';
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <title>Page Not Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      line-height: 1.2;
      margin: 0;
    }

    html {
      color: #888;
      display: table;
      font-family: sans-serif;
      height: 100%;
      text-align: center;
      width: 100%;
    }

    body {
      display: table-cell;
      vertical-align: middle;
      margin: 2em auto;
    }
    i{
      margin-right: 12px;
    }
    h1 {
      color: #555;
      font-size: 2em;
      font-weight: 400;
    }

    p {
      margin: 0 auto;
      width: 280px;
    }

    @media only screen and (max-width: 280px) {

      body,
      p {
        width: 95%;
      }

      h1 {
        font-size: 1.5em;
        margin: 0 0 0.3em;
      }

    }
  </style>
</head>

<body>
  <h1><i class="far fa-grin-beam-sweat"></i><?php echo $error_title; ?></h1>
  <p><?php echo $error_message; ?></p>
</body>

</html>
