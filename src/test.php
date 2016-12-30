<?php include("Environment.php"); ?>
<?php

$n = 10;
$popsize = 5000;
$gencnt = 5000;
$tmsize = 500;
$mutprob = 0.2;

$nqueen = new Environment($popsize, $n);

$nqueen->natSelection($gencnt, $tmsize, true, $mutprob);

echo $nqueen->getStrAnswer();