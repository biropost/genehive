<script type="syntaxhighlighter" class="brush: cpp; toolbar: false;"><![CDATA[
	// Ant Colony Opt.cpp : Defines the entry point for the console application.
	//
	#include "txtfilereader.h"
	#include <stdlib.h>  
	#include <time.h> 
	#include <iostream>
	#include <string>
	#include "ACO.h"


	using namespace std;

	int main()
	{
		string file = "";
		int n=0;
		double alpha=0;
		double beta=0;
		
		int ants=0;
		int startNode=0;
		int endNode=0;
		int trips=0;
		cout << "Ant Colony Algorythm!" << endl;
		cout << "------------------------------------------------------------------------" << endl;
		
		
		cout << endl <<"Please enter your file name, (needs to be saved in same Folder!)" << endl;
		cin >> file;

		srand(time(NULL));
		double** matrix;
		
		
		try{
			bool incorrectEntry = true;
			matrix = readfile(file,n);
			while(incorrectEntry)
			{
				cout << "Select Alpha Value: " ;
				cin >> alpha;
				if(alpha >=0 && alpha <1)
					incorrectEntry = false;
				else
					cout << "Incorrect Entry!" << endl;
			}
			incorrectEntry = true;
			
			while(incorrectEntry)
			{
				cout << "Select Beta Value: " ;
				cin >> beta;
				if(beta >= 0 && beta < 1)
					incorrectEntry = false;
				else
					cout << "Incorrect Entry!" << endl;
			}
			incorrectEntry = true;
			
			while(incorrectEntry)
			{
				cout << "Amount of Ants for Search: ";
				cin >> ants;
				if(ants > 1 && ants < 1000)
					incorrectEntry = false;
				else
					cout << "Incorrect Entry!" << endl;
			}
			incorrectEntry = true;
			
			ACO *test = new ACO(matrix,n,alpha,beta);
			char again = 'a';
			do{
				while(incorrectEntry)
				{
					cout << "select start Node: ";
					cin >> startNode;
					if(startNode >= 1 && startNode <= n){
						incorrectEntry = false;
						
					}
					else
						cout << "Invalid Entry!" << endl;
				}
				
				incorrectEntry = true;
				while(incorrectEntry)
				{
					cout << "select end Node: ";
					cin >> endNode;
					if(endNode >= 1 && endNode <= n && endNode != startNode){
						incorrectEntry = false;
					}
					else
						cout << "Invalid Entry!" << endl;
						
				}
				incorrectEntry = true;
				
				if(endNode < startNode)
				{
					int help;
					help = endNode;
					endNode = startNode;
					startNode = help;
				}
				while(incorrectEntry)
				{
					cout <<"how many trips?: ";
					cin >> trips;
					if(trips > 1 && trips < 10){
						incorrectEntry = false;
					cout << endl;}
					else
						cout << "Invalid Entry!" << endl;
					
				}
				incorrectEntry = true;
				try{
					
					test->findroute(ants, startNode, endNode, trips);
					
					cout << "Press 'y' for new Route: ";
					cin >> again;
				}catch(...){
					cout << "Error with the Colony!" << endl;
				}
				
				
			}while(again == 'y');
			delete test;
			
		}
		catch(...){
			cout << "Error with File Reader!" << endl;
		}
		
		
	    return 0;

	}
]]></script>
