<?php include("Environment.php"); ?>
<?php

$n = 4;
$popsize = 200;
$gencnt = 200;
$tmsize = 2;
$mutprob = 0.2;

$nqueen = new Environment($popsize, $n);

$nqueen->natSelection($gencnt, $tmsize, true, $mutprob);

if ($nqueen->getAnswer())
    echo $nqueen->getStrAnswer();
else
    echo "meh";