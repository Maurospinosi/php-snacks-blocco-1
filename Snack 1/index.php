<?php
$matches = [
  "matches_1" => [
    "home_team" => "Cantu",
    "away_team" => "Pesaro",
    "result_home_team" => "81",
    "result_away_team" => "72",
  ],
  "matches_2" => [
    "home_team" => "Brindisi",
    "away_team" => "Roma",
    "result_home_team" => "92",
    "result_away_team" => "67",
  ],
  "matches_3" => [
    "home_team" => "Fortitudo Bologna",
    "away_team" => "Varese",
    "result_home_team" => "83",
    "result_away_team" => "88",
  ],
  "matches_4" => [
    "home_team" => "Sassari",
    "away_team" => "Trieste",
    "result_home_team" => "72",
    "result_away_team" => "74",
  ],
];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 1</title>
  </head>
  <body>
    <h1>Risultati lega A</h1>
    <ul>
      <!-- PRIIMO MATCH -->
      <h2>
        <li>
          <?php echo $matches["matches_1"]["home_team"]?>
          -
          <?php echo $matches["matches_1"]["away_team"]?>
          |
          <?php echo $matches["matches_1"]["result_home_team"]?>
          -
          <?php echo $matches["matches_1"]["result_away_team"]?>
        </li>
      </h2>
      <!-- SECONDO MATCH -->
      <h2>
        <li>
          <?php echo $matches["matches_2"]["home_team"]?>
          -
          <?php echo $matches["matches_2"]["away_team"]?>
          |
          <?php echo $matches["matches_2"]["result_home_team"]?>
          -
          <?php echo $matches["matches_2"]["result_away_team"]?>
        </li>
      </h2>
      <!-- TERZO MATCH -->
      <h2>
        <li>
          <?php echo $matches["matches_3"]["home_team"]?>
          -
          <?php echo $matches["matches_3"]["away_team"]?>
          |
          <?php echo $matches["matches_3"]["result_home_team"]?>
          -
          <?php echo $matches["matches_3"]["result_away_team"]?>
        </li>
      </h2>
      <!-- Quarto MATCH -->
      <h2>
        <li>
          <?php echo $matches["matches_4"]["home_team"]?>
          -
          <?php echo $matches["matches_4"]["away_team"]?>
          |
          <?php echo $matches["matches_4"]["result_home_team"]?>
          -
          <?php echo $matches["matches_4"]["result_away_team"]?>
        </li>
      </h2>
    </ul>
  </body>
</html>
<!--
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
