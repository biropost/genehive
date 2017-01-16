<?php include("Environment.php"); ?>
<?php

$n = 11;
$popsize = 2;
$gencnt = 2;
$tmsize = 2;
$mutprob = 0.2;

$nqueen = new Environment($popsize, $n);

$nqueen->natSelection($gencnt, $tmsize, true, $mutprob);

if ($nqueen->getAnswer())
    echo $nqueen->getStrAnswer();
else
    echo "meh";