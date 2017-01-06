	<p>
		#ifndef ParaException<br>
	#define ParaException<br>

	class ParameterAgainstNatureException : public std::exception {<br>
	public:<br>
		virtual const char* what() const noexcept override {<br>
			return "Something goes against nature. Object cannot be casted.";<br>
		}<br>
	};<br>
	#endif // ParaException<br>


	#ifndef CHROMOSOME1D_H<br>
	#define CHROMOSOME1D_H<br>

	#include <iostream><br>
	#include <cstdlib><br>
	#include <cmath><br>
	#include <string><br>
	#include <time.h><br>

	template <typename E><br>
	class Chromosome1D {<br>
		int fitness;<br>
		int geneCount;<br>
		E *genes; // represent gene/position/value in form of an array, datatype can be varied<br>

	public:<br>
		// class constructor: construct a dynamic array of genes<br>
		Chromosome1D(int geneCount) {<br>
			if(geneCount <= 0) throw ParameterAgainstNatureException();<br>
			this->geneCount = geneCount;<br>
			genes = new E[geneCount];<br>

			for (int i=0; i < geneCount; i++)<br>
				genes[i] = (int)((rand()%geneCount));<br>

			this->fitness = -1; //fitness unknown<br>
		}<br>

		Chromosome1D(const Chromosome1D *other)<br>
				: fitness(other->fitness), geneCount(other->geneCount), genes(new E[other->geneCount]) {<br>
			std::copy(other->genes, other->genes + other->geneCount, genes);<br>
		}<br>

		// class destructor is virtual, and can be overridden<br>
		virtual ~Chromosome1D() { delete [] genes; }<br>

		int getFitness() const { return fitness; }<br>
		void setFitness(int newFitness) { fitness = newFitness; }<br>

		int getGeneCount() const { return geneCount; }<br>
		void setGeneCount(int newGeneCount) { geneCount = newGeneCount; }<br>

		E* getGenes() { return genes; }<br>
		E getGenes(const int pos) const { return genes[pos]; }<br>
		void setGenes(const E* newGenes) { genes = newGenes; }<br>
		void setGenes(const int pos, E newVal) { genes[pos] = newVal; }<br>

		virtual void evaluate() = 0;<br>
		/* virtual void crossover(Chromosome1D *chromosome) {<br>
			throw "Cannot match chromosome type.";<br>
		} */<br>
		virtual bool mutate(double prob) = 0;<br>
		virtual std::string toString() = 0;<br>
	};<br>

	#endif // CHROMOSOME1D_H<br>

	</p>
