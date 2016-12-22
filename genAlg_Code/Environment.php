
	#ifndef Environment_H<br>
	#define Environment_H<br>
	<br>
	#include <iostream><br>
	#include <cstdlib><br>
	#include <string><br>
	#include <time.h><br>
	#include "NQPopulation.h"<br>
	<br>
	/*<br>
	* Environment class (or so-called Genetic-Algorithm class) serves as the control sequence of the population.<br>
	* Think of this as the interface controlling when the population will evaluate,<br>
	* cross over, or mutate. That is, natural selection is the effect from environment to<br>
	* the living organism.<br>
	*<br>
	* At the same time, Environment encapsulates the chromosomes in the swarm,<br>
	* so that the client program (main program) does not directly access or mess<br>
	* with the interior data<br>
	*/<br>
	class Environment {<br>
		NQPopulation *crowd;<br>
	public:<br>
		// Class constructor<br>
		Environment(int crowdSize, int geneCount) {<br>
			crowd = new NQPopulation(crowdSize, geneCount);<br>
		}<br>

		~Environment() { delete crowd; } // Class destructor<br>

		void natSelection(int cycleCount, int tmSize, bool isElitist, double mutProb) {<br>

			while (crowd->evaluate() != 0 && --cycleCount >= 0) {<br>
				crowd->populationSelection(tmSize, isElitist);<br>
				crowd->crossover(crowd->getSize());<br>
				crowd->mutate(mutProb);<br>
			}<br>
		}<br>
		<br>
		// return answer to the n-queen puzzle as an dynamic integer array (Genes of the best individual)<br>
		int* getAnswer() {<br>
			if (crowd->getBest()->getFitness() == 0)<br>
				return crowd->getBest()->getGenes();<br>
			else<br>
				return NULL;<br>
		}<br>
		<br>
		std::string getStrAnswer() { return crowd->getBest()->toString(); }<br>
		<br>
		std::string getBoardAnswer() { return crowd->getBest()->toBoard(); }<br>
	};<br>
	<br>
	#endif // Environment_H<br>

