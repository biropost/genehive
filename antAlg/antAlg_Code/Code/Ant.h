#pragma once
#include "Node.h"
#include "Edge.h"
#include <stack>
#include <list>
#include "Path.h"
#include <stdlib.h>  
#include <time.h> 
#include <math.h>
#include <iostream>
using namespace std;

typedef enum antState
{
	SEARCHING = 1,
	RETURNING = 2,
	IDLE = 3,
	FINISHED = 0
} antState;



class Ant
{

private:
	double alpha;
	double beta;
	int currentLocationID;
	int usedEdgeID; 
	Node* listofNode;
	Edge* listofEdges;
	antState state = IDLE;
	Path returnPath; //saves EdgeIDs
	int tripstoMake;
	int startNode;
	int endNode;
	int arrayNodeSize;
	int arrayEdgeSize;


	void moveToNodeForward(int destinationID)
	{
		//moves to Node with destinationID
		for (int i = 0; i < arrayEdgeSize; i++)
		{
			if ((listofEdges[i].getStartNode() == currentLocationID && listofEdges[i].getEndNode() == destinationID
				|| listofEdges[i].getEndNode() == currentLocationID && listofEdges[i].getStartNode() == destinationID))
			{
				currentLocationID = destinationID;
				usedEdgeID = listofEdges[i].getEdgeID();
				returnPath.addPath(listofEdges[i].getEdgeID());
				break;
			}
		}
	}
	void moveToNodeBackward(int destinationID)
	{
		//moving backward through graph
		for (int i = 0; i < arrayEdgeSize; i++)
		{
			if (listofEdges[i].getStartNode() == currentLocationID && listofEdges[i].getEndNode() == destinationID
				|| listofEdges[i].getEndNode() == currentLocationID && listofEdges[i].getStartNode() == destinationID)
			{
				currentLocationID = destinationID;
				usedEdgeID = listofEdges[i].getEdgeID();
				break;
			}
		}
	}
	int selectEdgeForward()
	{
		int selectedEdge = -1;
		double probibilitytotal = 0;
		double probibility = 0;
		double bestprobibility = 0;
		int prviousEdge = returnPath.getLastPath();
			
		//calculating the probability for each edge in node
		for (int i = 0; i < arrayEdgeSize; i++)
		{
			if (currentLocationID == listofEdges[i].getStartNode() || currentLocationID == listofEdges[i].getEndNode()
				&& listofEdges[i].getEdgeID() != prviousEdge)
			{

				double t = pow((1 + listofEdges[i].getAttractiveness()), alpha);
				double n = pow(1 / listofEdges[i].getdistance(), beta);
				probibilitytotal += t*n;
			}
		}
		//finding edge with highest probability
		for (int i = 0; i < arrayEdgeSize; i++)
		{
			
			if (currentLocationID == listofEdges[i].getStartNode() || currentLocationID == listofEdges[i].getEndNode()
				&& listofEdges[i].getEdgeID() != prviousEdge)
			{
				if (returnPath.contains(listofEdges[i].getEdgeID()))
				{
					//lower probability to take same path
					double t = pow((1 + listofEdges[i].getAttractiveness()), alpha);
					double n = pow(1 / listofEdges[i].getdistance(), beta);
					probibility = ((t*n*0.1)/probibilitytotal) + (double)(rand() / 10000);
				}
				else
				{
					double t = pow((1 + listofEdges[i].getAttractiveness()), alpha);
					double n = pow(1 / listofEdges[i].getdistance(), beta);
					probibility = ((t*n)/probibilitytotal) + (double)(rand() / 10000);
				}
	
				if (probibility >= bestprobibility)
				{
					bestprobibility = probibility;
					selectedEdge = listofEdges[i].getEdgeID();
				}
			}

		}
		int destination = -1;
		//selecting edge
		for (int i = 0; i < arrayEdgeSize; i++)
		{
			if (listofEdges[i].getEdgeID() == selectedEdge && currentLocationID == listofEdges[i].getStartNode())
			{
				destination = listofEdges[i].getEndNode();
			}
			else if (listofEdges[i].getEdgeID() == selectedEdge && currentLocationID == listofEdges[i].getEndNode())
			{
				destination = listofEdges[i].getStartNode();
			}
			
		}
		return destination;

		
	}
	int selectEdgeBackward()
	{
		int edge = -1;
		if (!returnPath.empty())
		{
			edge = returnPath.getLastPath();
			returnPath.removePath();
		}
			
		for (int i = 0; i < arrayEdgeSize; i++)
		{
			if (listofEdges[i].getEdgeID() == edge && currentLocationID == listofEdges[i].getStartNode())
			{
				return listofEdges[i].getEndNode();
			}
			else if (listofEdges[i].getEdgeID() == edge && currentLocationID == listofEdges[i].getEndNode())
			{
				return listofEdges[i].getStartNode();
			}
		}

	}
	int selectBestPath()
	{
		
		int pheromonelvl = 0;
		int path = -1;

		for (int i = 0; i < arrayEdgeSize; i++)
		{
			if (currentLocationID == listofEdges[i].getStartNode()	&& !returnPath.contains(listofEdges[i].getEdgeID())
				&& (pheromonelvl < listofEdges[i].getAttractiveness() || listofEdges[i].getEndNode() == endNode)
				&& listofEdges[i].getEndNode() != startNode)
			{
				if (listofEdges[i].getEndNode() == endNode)
				{
					pheromonelvl = listofEdges[i].getAttractiveness()*20;
					path = listofEdges[i].getEndNode();
				}
				else
				{
					pheromonelvl = listofEdges[i].getAttractiveness();
					path = listofEdges[i].getEndNode();
				}
				usedEdgeID = listofEdges[i].getEdgeID();
				returnPath.addPath(usedEdgeID);
				
			}
			else if(currentLocationID == listofEdges[i].getEndNode() && !returnPath.contains(listofEdges[i].getEdgeID())
				&& (pheromonelvl < listofEdges[i].getAttractiveness() || listofEdges[i].getStartNode() == endNode)
					&& listofEdges[i].getStartNode() != startNode)
			{
				if (listofEdges[i].getEndNode() == endNode)
				{
					pheromonelvl = listofEdges[i].getAttractiveness() * 20;
					path = listofEdges[i].getStartNode();
				}
				else
				{
					pheromonelvl = listofEdges[i].getAttractiveness();
					path = listofEdges[i].getStartNode();
				}
				usedEdgeID = listofEdges[i].getEdgeID();
				returnPath.addPath(usedEdgeID);
			}
		}
		return path;

	}
public:
	Ant();
	~Ant();
	bool isFinished() {
		if (state == FINISHED)
			return true;
		else
			return false;
	}
	void setupAnt(int startNode, int endNode, int tripstoMake, Node* listofNode, Edge* listofEdges, int arrayNodeSize, int arrayEdgeSize, double alpha, double beta)
	{
		this->alpha = alpha;
		this->beta = beta;
		this->currentLocationID = startNode;
		this->usedEdgeID = -1;
		this->arrayNodeSize = arrayNodeSize;
		this->arrayEdgeSize = arrayEdgeSize;
		this->startNode = startNode;
		this->endNode = endNode;
		this->tripstoMake = tripstoMake;
		this->listofNode = listofNode;
		this->listofEdges = listofEdges;
		state = SEARCHING;
	}
	
	void layPheromones()
	{
		for (int i = 0; i < arrayEdgeSize; i++)
		{
			if (listofEdges[i].getEdgeID() == usedEdgeID)
			{
				listofEdges[i].setAttractiveness(listofEdges[i].getAttractiveness()+10/listofEdges[i].getdistance());
			}
		}
	}
	
	void printPath()
	{

		
		cout << "Selected Path : " << endl << currentLocationID;
		do
		{
			
			moveToNodeForward(selectBestPath());
			cout << " --> " << currentLocationID;
		} while (currentLocationID != endNode);
		cout << endl;
		
	}

	void travel()
	{
		
		int amountofEdges = 0;
		
		//Finite State machine for ACO
		switch (state)
		{
		case SEARCHING:
			if (currentLocationID != endNode)
			{
				moveToNodeForward(selectEdgeForward());
			}
			else
			{
				state = RETURNING;
			}
			break;
		case RETURNING:
			if (currentLocationID == startNode)
			{
				tripstoMake--;
				if (tripstoMake == 0)
					state = FINISHED;
				else
					state = SEARCHING;
			}
			else{
				moveToNodeBackward(selectEdgeBackward());
			}
			break;
		case FINISHED:
			break;
		default:
			break;
		}
		
	}
};

Ant::Ant()
{
	
}


Ant::~Ant()
{
}