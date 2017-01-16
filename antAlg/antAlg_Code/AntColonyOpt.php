<script type="syntaxhighlighter" class="brush: cpp; toolbar: false;"><![CDATA[
	// Ant Colony Opt.cpp : Defines the entry point for the console application.
	//

	#include "ACO.h"
	#include "txtfilereader.h"
	#include <stdlib.h>  
	#include <time.h> 
	#include <iostream>
	#include "Path.h"
	using namespace std;

	int main()
	{
		srand(time(NULL));
		double** matrix;
		matrix = readfile("testmatrix.txt");
		ACO *test = new ACO(matrix,8,0.1,0.1);
		test->findroute(10, 1, 8,4);
		delete test;
	    return 0;
	}
]]></script>
