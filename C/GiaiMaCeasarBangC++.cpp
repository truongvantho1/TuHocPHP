#include <iostream>
#include <vector>
#include <cctype>
#include <string>

using namespace std;

int main() {
    char input[100];
    int m = 26;
    
	cout << "Nhap doan ma can giai ma : ";
    cin.getline(input, 100);
    
   	vector<char> result;
	for (int j = 0; j < m; j++) { 
	    for (size_t i = 0; input[i] != '\0'; ++i) {
	        char Kytu = tolower(input[i]);
	        if (Kytu >= 'a' && Kytu <= 'z') {
	            int ViTri = Kytu - 'a';        
	            int newViTri = (ViTri + j) % 26; 
	            char newKytu = 'a' + newViTri;
	            result.push_back(newKytu);
	        } else {
	            result.push_back(input[i]);
	        	}
	    	}result.push_back(' ');
	    }
	
	   	cout << "Doan ma can giai ma la:" << input << endl;
	    
	    cout << "Day la ma da chuyen hoa: " << string(result.begin() , result.end()) << endl;
	
	    return 0;
	}
