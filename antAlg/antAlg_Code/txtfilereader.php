<script type="syntaxhighlighter" class="brush: cpp; toolbar: false;"><![CDATA[
	// txtfilereader.cpp : Defines the entry point for the console application.
	//

	#include <iostream>
	#include <fstream>
	#include <string>
	using namespace std;



	double** readfile(string filedirectory, int &n)
	{
		
		double** amatrix = NULL;
		string line;
		ifstream myfile(filedirectory);
		if (myfile.is_open())
		{
			getline(myfile, line); //getting first line (size of array)
			n = std::stoi(line);  //converting string to int
			amatrix = new double*[n];
			for (int i = 0; i < n; i++) amatrix[i] = new double[n]; //creating 2d array
			string numbers;
			int i = 0;
			while (getline(myfile, line))
			{
				int position = 0;
				int arrayx = 0;

				while (line[position] != '\0')
				{
					if (line[position] == ' ') //if space
					{
						position++;
					}
					else//node
					{
						while (line[position] != ' ' && line[position] != '\0')
						{
							numbers.push_back(line[position]);
							position++;
						}
						amatrix[i][arrayx] = std::stod(numbers);
						numbers = "";
						arrayx++;
					}
				}
				i++;
			}

			myfile.close();
		}
		else throw "Error";

		return amatrix;
	}
]]></script>


