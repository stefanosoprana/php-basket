<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($players as $k => $player) { ?>
      <div>
        <h2><?php echo $player['codiceGiocatore'] ?></h2>
        <p>Codice giocatore: <?php echo $player['codiceGiocatore'] ?> </p>
        <p>Rimbalzi: <?php echo $player['rimbalzi'] ?></p>
        <p>Falli: <?php echo $player['falli'] ?></p>
        <p>Tiri da 2: <?php echo $player['tiriDa2'] ?></p>
        <p>Tiri da 3: <?php echo $player['tiriDa3'] ?></p>
      </div>
    <?php }; ?>
  </body>
</html>
