#pragma once



class Vector
{
	int element;
	Vector* pNext = NULL;
public:
	Vector* getNext() const
	{
		return this->pNext;
	}
	int getValue() const
	{
		return element;
	}
	void setNext(Vector *pNext) { this->pNext = pNext; }
	Vector(int element);
	~Vector();

};


Vector::Vector(int element) 
{ 
	this->element = element;
	this->pNext = NULL; 
}
Vector::~Vector()
{

}

class Path
{
	int _size;
	Vector* pFirst;	
public:
	Path();
	~Path();

	int size() { return _size; }
	bool empty() { return((bool)!_size); }

	void addPath(int path) 
	{
		Vector* pVector = new Vector(path);
		if (_size)
		{
			Vector* pTmp = pFirst;
			while (pTmp->getNext() != NULL)
				pTmp = pTmp->getNext();
			pTmp->setNext(pVector);
		}
		else
			pFirst = pVector;
		_size++;
	}
	void removePath()
	{
		if (_size==1) 
		{
			Vector* pTmp = pFirst;
			delete pTmp;
			pFirst = NULL;
			_size--;
			
		}
		else if (_size > 1)
		{
			Vector* pTmp = pFirst->getNext();
			Vector* pEnd = pFirst;
			while (pTmp->getNext() != NULL)
			{
				pTmp = pTmp->getNext();
				pEnd = pEnd->getNext();
			}
			pEnd->setNext(NULL);
			delete pTmp;
			_size--;
		}
	}
	bool contains(int check)
	{
		if (_size)
		{
			Vector* pTmp = pFirst;
			while(pTmp->getNext() != NULL)
			{
				if (pTmp->getValue() == check)
					return true;
				else
					pTmp = pTmp->getNext();
			}
			return false;
		}
		return false;
	}
	int getLastPath() {
		if (_size)
		{
			Vector *pTmp = pFirst;
			while (pTmp->getNext() != NULL)
				pTmp = pTmp->getNext();
			return pTmp->getValue();
		}
		return -1;
	}
	

};

Path::Path()
{
	this->_size = 0;
	pFirst = NULL;
}


Path::~Path()
{
	if (_size)
	{
		Vector* pTmp;
		while (pFirst != NULL)
		{
			pTmp = pFirst->getNext();
			delete pFirst;
			pFirst = pTmp;
		}
	}
}

