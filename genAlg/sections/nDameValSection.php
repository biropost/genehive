<div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#f8f8f8;">
        <div class="DIY">
            <div class="container">
                <form class="form-inline text-center" method="POST">

                    <div class="form-group ">  
                                        
                       <input type="N-value" class="input-lg form-control dnainput" id="N_value" placeholder="N-value" name="n">
                       <input type="population size" class="input-lg form-control dnainput" id="population_size" placeholder="population size" name="popsize">
                       <input type="generation count" class="input-lg form-control dnainput" id="generation_count" placeholder="generation count" name="gencnt">
                       <input type="tournament size" class="input-lg form-control dnainput" id="tournament_size" placeholder="tournament size" name="tmsize">
                       <input type="mutation probability" class="input-lg form-control dnainput" id="mutation_prob" placeholder="mutation probability" name="mutprob">
                       <button type="submit" class="btn btn-lg btn-default">go!</button>   
                                                                             
                    </div>

                </form>

            </div>
        </div>

    <?php
        include('src/Environment.php');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
            $n = $_POST['n'] + 0;
            if ($n > 30) # set maximum n
                $n = 30;

            $popsize = $_POST['popsize'] + 0;
            if ($popsize > 5000)
                $popsize = 5000;

            $gencnt = $_POST['gencnt'] + 0;
            if ($gencnt > 10000)
                $gencnt = 10000;

            $tmsize = $_POST['tmsize'] + 0;
            if ($tmsize > 100)
                $tmsize = 100;

            $mutprob = $_POST['mutprob'] + 0;
            if ($mutprob >= 1)
                $mutprob = 0.9;
            elseif ($mutprob < 0)
                $mutprob = 0;

            $nqueen = new Environment($popsize, $n);

            $nqueen->natSelection($gencnt, $tmsize, true, $mutprob);

            if ($nqueen->getAnswer()) {
                $strAnswer = $nqueen->getStrAnswer();
                echo $strAnswer;
            } else {
                echo "meh";
            }
        }
    ?>



<?php include("progressbar.php");?>
</div>