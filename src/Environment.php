<?php include("NQPopulation.php"); ?>
<?php

class Environment {
    private $crowd;

    public function __construct($crowdSize, $geneCount) {
        $this->crowd = new NQPopulation($crowdSize, $geneCount);
    }

    public function natSelection($cycleCount, $tmSize, $isElitist, $mutProb) {
        while ($this->crowd->evaluate() != 0 && --$cycleCount >= 0) {
            $start = microtime(true);
            $this->crowd->populationSelection($tmSize, $isElitist);
            $this->crowd->crossover($this->crowd->getSize());
            $this->crowd->mutate($mutProb);
            $time_elapsed_secs = microtime(true) - $start;
            echo $cycleCount . ": " . $this->crowd->getBest()->getFitness() . " " . $time_elapsed_secs . "\n";
            echo $this->crowd->getBest()->__toString();
        }
        echo "Finished: " . $this->crowd->getBest()->getFitness() . "\n";
    }

    public function getAnswer() {
        if ($this->crowd->getBest()->getFitness() == 0)
            return $this->crowd->getBest()->getGenes();
        else
            return null;
    }

    public function getStrAnswer() { return $this->crowd->getBest()->__toString(); }

    public function getBoardAnswer() { return $this->crowd->getBest()->toBoard(); }
}