#include<iostream>
#include<stdlib.h>
using namespace std;
class SLL
{
	int rno;
	string name,claas;
	SLL *next;
	public:
		void insert_end(int,string,string);
		void traverse();
}*start=NULL,*temp,*n;

void SLL::insert_end(int i,string s1,string s2)
{
		n=new SLL;
		n->rno=i;
		n->name=s1;
		n->claas=s2;
		if(start==NULL)
		{
			start=n;
		}
		else
		{
			temp=start;
			while(temp->next!=NULL)
			{
				temp=temp->next;
			}
			temp->next=n;
		}
} 

void SLL :: traverse()
{
	if(start==NULL)
	{
		cout<<"List is Empty"<<endl;
	}
	temp=start;
	while(temp!=NULL)
	{
		cout<<"Data = "<<temp->name<<endl;
		temp=temp->next;
	}
}

int main()
{
	SLL obj;
	int m,rno;
	string name,claas;
	cout<<"Enter the Total No .of Nodes : "<<endl;
	cin>>m;
	for(int i =1;i<=m;i++)
	{
		cout<<"Enter the Student Roll No. : "<<endl;
		cin>>rno;
		cout<<"Enter the Student Name : "<<endl;
		cin>>name;
		cout<<"Enter the Student Class : "<<endl;
		cin>>claas;
	}
	obj.insert_end(rno,name,claas);
	obj.traverse();
	return 0;
}
