	#ifndef NQCHROMOSOME_H<br>
	#define NQCHROMOSOME_H<br>
<br>
	#include <iostream><br>
	#include <cstdlib><br>
	#include <cmath><br>
	#include <string><br>
	#include <time.h><br>
	#include "Chromosome1D.h"<br>
<br>
	class NQChromosome : public Chromosome1D<int> {<br>
	public:<br>
		NQChromosome(int geneCount):Chromosome1D(geneCount) {}<br>
		NQChromosome(const NQChromosome *nq):Chromosome1D(nq) {}<br>
		~NQChromosome() {}<br>
<br>
		virtual void evaluate() override;<br>
		virtual void crossover(NQChromosome *chromosome);<br>
		virtual bool mutate(double prob) override;<br>
		virtual std::string toString() override;<br>
		std::string toBoard();<br>
	};<br>
<br>
	void NQChromosome::evaluate() {<br>
		int distance; // distance between the queens<br>
		int collision = 0; // how many queens threaten this queen<br>
		if (this->getFitness() >= 0) return; // fitness of this queen is determined<br>
<br>
		for(int i=0; i < this->getGeneCount(); i++) {<br>
			for(int j=i+1; j < this->getGeneCount(); j++) {<br>
				distance = std::abs(getGenes(i) - getGenes(j));<br>
<br>
				if((distance == 0) || (distance == j-i))<br>
					collision++;<br>
			}<br>
		}<br>
<br>
		this->setFitness(collision);<br>
	}<br>
<br>
	void NQChromosome::crossover(NQChromosome *chromosome) {<br>
		int crossoverpoint = (int)(rand()%getGeneCount() ); // random<br>
		int help; // swapping buffer<br>
<br>
		for(int i=crossoverpoint; i < this->getGeneCount(); i++) {<br>
			help = this->getGenes(i);<br>
			this->setGenes(i, chromosome->getGenes(i));<br>
			chromosome->setGenes(i, help);<br>
		}<br>
<br>
		this->setFitness(-1); //invalidate fitness<br>
		chromosome->setFitness(-1); //invalidate fitness<br>
	}<br>
<br>
	bool NQChromosome::mutate(double prob) {<br>
		if (((double)rand()/RAND_MAX)>=prob) return false;<br>
<br>
		do {<br>
			this->setGenes(int(rand()%getGeneCount()), int(rand()%getGeneCount()));<br>
		} while(((double)rand()/RAND_MAX)<prob);<br>
<br>
		this->setFitness(-1);<br>
		return true;<br>
	}<br>
<br>
	std::string NQChromosome::toString() {<br>
		std::string strOut;<br>
<br>
		for(int i=0; i < getGeneCount(); i++)<br>
			strOut += std::to_string(getGenes(i)) + " ";<br>
		strOut += '\n';<br>
<br>
		return strOut;<br>
	}<br>
<br>
	std::string NQChromosome::toBoard() {<br>
		std::string strOut;<br>
<br>
		for(int j=0; j < getGeneCount(); j++) {<br>
			for(int k=0; k < getGeneCount(); k++) {<br>
				if(k == getGenes(j)) {<br>
					strOut += " Q ";<br>
				} else {<br>
					strOut += " . ";<br>
				}<br>
			}<br>
			strOut +=  '\n';<br>
	    }<br>
<br>
		return strOut;<br>
	}<br>
<br>
	#endif // NQCHROMOSOME_H<br>
