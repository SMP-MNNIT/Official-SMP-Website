#include<bits/stdc++.h>
using namespace std ;
int main()
{
    int n,i,ans=0;
    cin>>n;
    char a[n];
    stack<char> b;
    for(i=0;i<n;i++)
    {
        cin>>a[i];
    }
    for(i=0;i<n;i++)
    {
       if(a[i]=='(' || a[i]=='[' || a[i]=='{')
       {
           b.push(a[i]);
       }
       else 
       {
           if((b.top()=='(' && a[i]==')') || (b.top()=='[' && a[i]==']') || (b.top()=='{' && a[i]=='}')  )
           {
               b.pop();
           }
           else
           {
               ans=1;
               break;
           }
       }
    }
    if(ans==0 && b.empty())
    {
        cout<<"Balanced"<<endl;
    }
    else 
    cout<<"UnBalanced"<<endl;

return 0;
}