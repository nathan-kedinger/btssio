<?php
// Infos de redirection
$delai=0.1; // Délai en secondes
$url='model/homepage.php'; // Adresse vers laquelle rediriger le visiteur
// Redirection dans x secondes
header('Refresh: '.$delai.';url='.$url);

ini_set('display_errors', 'on');