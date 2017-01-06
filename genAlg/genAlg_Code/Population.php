	#ifndef ParaException<br>
	#define ParaException<br>
<br>
	class ParameterAgainstNatureException : public std::exception {<br>
	public:<br>
		virtual const char* what() const noexcept override { <br>
			return "Something goes against nature. Object cannot be casted.";<br>
		}<br>
	};<br>
	#endif // ParaException<br>
<br>
	#ifndef Population_H<br>
	#define Population_H<br>
<br>
	#include <iostream><br>
	#include <cstdlib><br>
	#include <time.h><br>
<br>
	class Population {<br>
		/*<br>
		* note that the chromosomes should be declared in the derived class, due to the various approaches<br>
		* in various problems, we cannot generalize chromosome type in the mother abstract class<br>
		*/<br>
<br>
		int size; // population size, number of chromosomes in the system<br>
	public:<br>
		// class constructor<br>
		Population(int size) {<br>
			if (size <= 0) throw ParameterAgainstNatureException();<br>
<br>
			this->size = size; <br>
		} <br>
		virtual ~Population() { }<br>
<br>
		int getSize() const { return size; }<br>
		void setSize(int newSize) { size = newSize; }<br>
<br>
		// pure virtual functions awaits implementation<br>
		virtual int evaluate() = 0;<br>
		virtual void crossover(int count) = 0;<br>
		virtual void mutate(double prob) = 0;<br>
	};<br>
<br>
	#endif // Population_H<br>
