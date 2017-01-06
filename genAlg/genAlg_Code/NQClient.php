
	#include iostream<br>
	#include cstdlib<br>
	#include string<br>
	#include cstring<br>
	#include time.h<br>
	#include "Environment.h"<br>
<br>
	using namespace std;<br>

	 class FailedArgumentException : public std::exception {<br>
	 public:<br>
		virtual const char* what() const noexcept override {<br>
			return "There is no argument given. Input argument 'help' for instruction.";<br>
		}<br>
	 };<br>
<br>
	int main(int argc, char* argv[]) {<br>
		srand (time(NULL)); //initiate random number generator<br>
		int n, popsize, gencnt, tmsize;<br>
		double mutprob;<br>
<br>
		if (argc == 2 && strcmp(argv[1], "help") == 0) {<br>
			cout << endl;<br>
			cout << "To solve 'N' queens problem, please run the command:" << endl;<br>
			cout << endl;<br>
			cout << "     ./prog <N> <popsize> <gencnt> <tmsize> <mutprob>" << endl;<br>
			cout << endl;<br>
			cout << "- prog: program's name" << endl;<br>
			cout << "- N: the number of the queens represented in NxN chess board (int)" << endl;<br>
			cout << "- popsize: the number of individuals in the population we simulate (int)" << endl;<br>
			cout << "- gencnt: the number of generation we loop through, generation counts (int)" << endl;<br>
			cout << "- tmsize: size of tournament in the selection process, tournament size (int)" << endl;<br>
			cout << "- mutprob: probability that the gene will mutate, mutation probability (double, range 0-1)" << endl;<br>
			cout << "*note that all the variable must be input respectively to the given order" << endl;<br>
			cout << endl;<br>
			return 0;<br>
		} else if (argc == 6) {<br>
			try {<br>
				n = atoi(argv[1]);<br>
				popsize = atoi(argv[2]);<br>
				gencnt = atoi(argv[3]);<br>
				tmsize = atoi(argv[4]);<br>
				mutprob = atof(argv[5]);<br>
<br>
				int* answer;<br>
				Environment* nqueen = new Environment(popsize, n);<br>
<br>
				nqueen->natSelection(gencnt, tmsize, true, mutprob);<br>
<br>
				answer = nqueen->getAnswer();<br>
<br>
				if (answer != NULL) {<br>
					for(int i=0; i < n; i++)<br>
						cout << answer[i] << ' ';<br>
					cout << endl;<br>
	      <br>
					cout << nqueen->getBoardAnswer();<br>
				} else {<br>
					cout << endl;<br>
					cout << "Cannot find answer in the scope of the given parameter." << endl;<br>
					cout << endl;<br>
				}<br>
<br>
				delete [] answer;<br>
			}<br>
			catch (...) {<br>
				throw FailedArgumentException();<br>
			}<br>
		} else throw FailedArgumentException();<br>
<br>
		return 0;<br>
	}<br>

