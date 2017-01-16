<script type="syntaxhighlighter" class="brush: cpp; toolbar: false;"><![CDATA[
	#pragma once
	class Edge
	{
	private:
		int edgeID;
		double attractiveness=0;
		int startNode;
		int endNode;
		double distance;
		
	public:
		Edge();
		~Edge();
		double getAttractiveness() { return attractiveness; }
		void setAttractiveness(double attractiveness) { this->attractiveness = attractiveness; }
		int getEdgeID() { return edgeID; }
		void setEdgeID(int edgeID) { this->edgeID = edgeID; }
		int getStartNode() { return this->startNode; }
		int getEndNode() { return this->endNode; }
		double getdistance() { return this->distance; }
		void setStartNode(int startNode) { this->startNode = startNode; }
		void setEndNode(int endNode) { this->endNode = endNode; }
		void setdistance(double distance) { this->distance = distance; }

		void pheromoneDecay()
		{
			attractiveness = attractiveness * 0.8;
		}
	};
	Edge::Edge()
	{

	}
	Edge::~Edge()
	{

	}
]]></script>