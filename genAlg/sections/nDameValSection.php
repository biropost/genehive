<div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#f8f8f8;">
        <div class="DIY">
            <div class="container">
                <form class="form-inline text-center" method="POST">

                    <div class="form-group ">  
                                        
                       <input type="N-value" class="input-lg form-control dnainput" id="N_value" placeholder="N-value" name="n" required>
                       <input type="population size" class="input-lg form-control dnainput" id="population_size" placeholder="population size" name="popsize" required>
                       <input type="generation count" class="input-lg form-control dnainput" id="generation_count" placeholder="generation count" name="gencnt" required>
                       <input type="tournament size" class="input-lg form-control dnainput" id="tournament_size" placeholder="tournament size" name="tmsize" required>
                       <input type="mutation probability" class="input-lg form-control dnainput" id="mutation_prob" placeholder="mutation probability" name="mutprob" required>
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

                $answer = "<br><div class=\"row\" style=\"padding-top: 40px;\"><div class=\"alert alert-success col-xs-8 col-xs-offset-2\">";
                $answer .= $strAnswer;
                $answer .= "</div></div>";



                 for ($i=0; $i < $n; $i++) { 
                    for ($o=0; $o < $n; $o++) { 
                        if ($o%2 = 1) {
                            if ($o = /*array[o]*/) {
                                echo ('green_queen.svg');
                            }
                            else {
                                echo ('green_field.svg');
                            }
                        }
                        else {
                            if ($o = /*array[o]*/) {
                                echo ('grey_queen.svg');
                            }
                            else {
                                echo ('grey_field.svg');
                            }

                        }
                    }
                    echo "<br>";
                }
                

                echo $answer . "<br>";

                # this is just in case you need each values
                # it is an array with the size of n
                #so, have fun decorating :) i'm counting on you
                # for($i=0; $i<$n; $i++)
                #    echo $nqueen->getAnswer()[$i] . " ";
                # echo "<br>";
            } else {
                $answer = "<br><div class=\"row\" style=\"padding-top: 40px;\"><div class=\"alert alert-danger col-xs-8 col-xs-offset-2\">";
                $answer .= "Keine Lösung wurdes gefunden!";
                $answer .= "</div></div>";

                echo $answer . "<br>";
            }
        }
    ?>


</div>