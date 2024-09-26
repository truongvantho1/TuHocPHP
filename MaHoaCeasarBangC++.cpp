#include <iostream>
#include <vector>
#include <cctype>

using namespace std;
int main() {
    char input[100];
    int m;

    cout << "Nhap doan ma can ma hoa: ";
    cin.getline(input, 100);

    cout << "Nhap khoa: ";
    cin >> m;

   	vector<char> result;

    for (size_t i = 0; input[i] != '\0'; ++i) {
        char Kytu = tolower(input[i]);

        if (Kytu >= 'a' && Kytu <= 'z') {
            int ViTri = Kytu - 'a';        
            int newViTri = (ViTri + m) % 26; 
            char newKytu = 'a' + newViTri;
            result.push_back(newKytu);
        } else {
            result.push_back(input[i]);
        }
    }

   	cout << "Day la ma ban dau:" << input << endl;
    cout << "Khoa cua doan ma la: "<< m  << endl;
    cout << "Day la ma da chuyen hoa : " << string(result.begin(), result.end()) << endl;

    return 0;
}
