#pragma once
#include "Edge.h"
class Node
{

private:
	
	int nodeIdentity;
	

public:
	void setnodeIdentity(int nodeIdentity) {this->nodeIdentity= nodeIdentity;}
	int getnodeIdentity() { return nodeIdentity; }
	
	
	Node();
	~Node();
};

Node::Node()
{

}
Node::~Node()
{

}