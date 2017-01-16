#pragma once
#include "Edge.h"
#include "Node.h"
#include "Ant.h"
#include <stdlib.h>  
#include <time.h> 
#include <iostream>
using namespace std;

class ACO
{
private:
	Node* listofNode;
	Edge* listofEdges;
	Ant* listofAnts;
	double** amatrix;
	int amatrixsize;
	int amountofedges = 0;
	double alpha;
	double beta;
	bool allFinished(int ants)
	{
		for (int i = 0; i < ants; i++)
		{
			if (!listofAnts[i].isFinished())
			{
				return true;
			}
		}
		return false;
	}
public:
	ACO();
	ACO(double** amatrix, int amatrixsize, double alpha, double beta);
	~ACO();
	void printSelectedPath(int startNode, int endNode)
	{
		Ant ant;
		ant.setupAnt(startNode, endNode, 1, listofNode, listofEdges, amatrixsize, amountofedges, 2, 0);

		ant.printPath();	
	}
	void findroute(int ants, int startNode, int endNode,int trips)
	{
		int antsfinsished = 0;
		//create array of ants
		listofAnts = new Ant[ants];
		for (int i = 0; i < ants; i++)
		{
			listofAnts[i].setupAnt(startNode, endNode, trips, listofNode, listofEdges, amatrixsize, amountofedges, alpha, beta);
		}
				
		while(allFinished(ants))
		{
			//let all ants travel
			for (int i = 0; i < ants; i++)
			{
				listofAnts[i].travel();
			}
			//lay Pheromones for traveled edges
			for (int i = 0; i < ants; i++)
			{
				listofAnts[i].layPheromones();
			}
			//decay Pheromones for all edges
			for (int i = 0; i < amountofedges; i++)
			{
				listofEdges[i].pheromoneDecay();
			}
		}
		delete[] listofAnts;
		printSelectedPath(startNode, endNode);
	}
	
};
ACO::ACO()
{

}
ACO::ACO(double** amatrix, int amatrixsize, double alpha, double beta)
{
	this->alpha = alpha;
	this->beta = beta;
	this->amatrixsize = amatrixsize;
	//creating nodes
	listofNode = new Node[amatrixsize];
	//finding out how many edges in graph
	for (int i = 0; i < amatrixsize; i++){
		for (int j = i; j < amatrixsize; j++){
			if (amatrix[i][j] != -1)
				amountofedges++;
			}
	}

	listofEdges = new Edge[amountofedges];
	int edgecount = 0;

	//creating edges
	for (int i = 0; i < amatrixsize; i++)
	{
		listofNode[i].setnodeIdentity(i + 1);
		
		for (int j = i; j < amatrixsize; j++)
		{
			
			if (amatrix[i][j] != -1)
			{
				listofEdges[edgecount].setEdgeID(edgecount + 1);
				listofEdges[edgecount].setStartNode(i+1);
				listofEdges[edgecount].setEndNode(j+1);
				listofEdges[edgecount].setdistance(amatrix[i][j]);
				edgecount++;
			}
		}
	}
	for (int i = 0; i < amatrixsize; i++)
	{
		delete[] amatrix[i];
	}
	delete[] amatrix;
}
ACO::~ACO()
{
	delete[] listofEdges;
	delete[] listofNode;
	
	
	
}



