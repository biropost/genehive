	#ifndef NQPopulation_H<br>
	#define NQPopulation_H<br>
<br>
	#include <iostream><br>
	#include <cstdlib><br>
	#include <time.h><br>
	#include "Population.h"<br>
	#include "NQChromosome.h"<br>
<br>
	class NQPopulation : public Population {<br>
		NQChromosome *best; // point the best chromosome in this population<br>
		NQChromosome **individuals; // all the chromosomes in this population, see as indiviodual organism<br>
	public:<br>
		// Class constructor<br>
		NQPopulation(int size, int geneCount) : Population(size) {<br>
			individuals = new NQChromosome * [size];<br>
			for(int i=0; i < getSize(); i++) {<br>
				individuals[i]= new NQChromosome(geneCount);<br>
			}<br>
		}<br>
<br>
		// Class destructor<br>
		virtual ~NQPopulation() {<br>
			for(int i=0; i < getSize(); i++)<br>
				delete individuals[i];<br>
			delete [] individuals;<br>
		}<br>
<br>
		NQChromosome* getBest() { return best; }<br>
		void setBest(NQChromosome* newBest) { best = newBest; }<br>

		NQChromosome** getIndividuals() { return individuals; }<br>
		NQChromosome* getIndividuals(int pos) { return individuals[pos]; }<br>
		void setIndividuals(NQChromosome** newIndiv) {<br>
			for(int i=0; i < getSize(); i++)<br>
				delete individuals[i];<br>
			delete [] individuals;<br>
			individuals = newIndiv;<br>
		}<br>
		void setIndividuals(int pos, NQChromosome* newChrom) { individuals[pos] = newChrom; }<br>
<br>
		virtual int evaluate() override;<br>
		virtual void crossover(int count) override;<br>
		virtual void populationSelection(int tmSize, bool isElitist);<br>
		virtual NQChromosome* tournamentSelection(int tmSize);<br>
		virtual void mutate(double prob) override;<br>
	};<br>
<br>
	int NQPopulation::evaluate() {<br>
		NQChromosome *bestIndividual = individuals[0];<br>
		bestIndividual->evaluate();<br>

		for(int i=0; i < getSize(); i++){<br>
			individuals[i]->evaluate();<br>
			if(individuals[i]->getFitness() <= bestIndividual->getFitness()) {<br>
				bestIndividual = individuals[i];<br>
			}<br>
		}<br>
<br>
		this->setBest(bestIndividual);<br>
		return best->getFitness();<br>
	}<br>
<br>
	void NQPopulation::crossover(int count){<br>
		/*<br>
		* The last element of the array individuals can't take part in crossover, which means that<br>
		* the second last element can't be the "left" element in the crossover.<br>
		* To make sure that this also applies to odd sizes count can't be greater than size-2<br>
		*/<br>
<br>
		if(count > this->getSize()-2)<br>
			count = this->getSize()-2;<br>

		for(int i=0; i < count; i+=2) {<br>
			 individuals[i]->crossover(individuals[i+1]);<br>
		}<br>
	}<br>
<br>
	void NQPopulation::populationSelection(int tmSize, bool isElitist) {<br>
		int i = this->getSize()-1;<br>
<br>
		NQChromosome **buffer; // buffer chromosomes, used in swapping etc.<br>
		buffer = new NQChromosome * [getSize()];<br>
<br>
		if(isElitist) {<br>
			NQChromosome *best = new NQChromosome(getBest());<br>
			buffer[i] = best;<br>
		}<br>
		while(--i >= 0) {<br>
			NQChromosome *sel = new NQChromosome(tournamentSelection(tmSize));<br>
			buffer[i] = sel;<br>
		}<br>
<br>
	  setIndividuals(buffer);<br>
	}<br>
<br>
	NQChromosome* NQPopulation::tournamentSelection(int tmSize) {<br>
		NQChromosome *compIndiv, *tournamentBest;<br>
		tournamentBest = this->getIndividuals((int)(rand()%getSize()));<br>
<br>
		while(--tmSize > 0) {<br>
			compIndiv = this->getIndividuals((int)(rand()%getSize()));<br>
			if(tournamentBest->getFitness() > compIndiv->getFitness()) {<br>
				tournamentBest = compIndiv;<br>
			}<br>
		}<br>
<br>
		return tournamentBest;<br>
	}<br>
<br>
	void NQPopulation::mutate(double prob){<br>
		for(int i=0; i < this->getSize()-1; i++)<br>
			individuals[i]->mutate(prob);<br>
	}<br>
<br>
	#endif // NQPopulation_H<br>
<br>

