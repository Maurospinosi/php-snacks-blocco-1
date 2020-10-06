<?php
$matches = [
   [
    "home_team" => "Cantu",
    "away_team" => "Pesaro",
    "result_home_team" => "81",
    "result_away_team" => "72",
  ],
   [
    "home_team" => "Brindisi",
    "away_team" => "Roma",
    "result_home_team" => "92",
    "result_away_team" => "67",
  ],
   [
    "home_team" => "Fortitudo Bologna",
    "away_team" => "Varese",
    "result_home_team" => "83",
    "result_away_team" => "88",
  ],
   [
    "home_team" => "Sassari",
    "away_team" => "Trieste",
    "result_home_team" => "72",
    "result_away_team" => "74",
  ],
];
for($i=0; $i<count($matches); $i++){
  echo $matches[$i]["home_team"]." "."-"." ".$matches[$i]["away_team"]." "."|"." ".$matches[$i]["result_home_team"]." "."-"." ".$matches[$i]["result_away_team"]."</br>";
}

?>
<!--
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
