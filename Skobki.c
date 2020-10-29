#include <iostream>
using namespace std;

bool Skobki ( string str)
{
    bool flag = true;
    int counter = 0;
    for (int i =0; (i <= str.length()) && counter >=0;i++)
        {
           
            if (str[i] == '(')
                        counter++;
                         
            if (str[i] == ')')
                        counter--;
        }
        if (counter == 0) flag = true;
        else flag = false;
    return flag;
}

int main ()
{

  bool flag =  Skobki("21)((12)");
  
  cout << flag;
}
