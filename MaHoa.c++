#include <iostream>
#include <string>
#include <vector>

std::vector<char> maHoa(const std::string& duongDan, int khoa) {
   
    std::vector<char> kyTu('a', 'z' + 1);
    std::vector<char> ketQua;

    for (char c : duongDan) {
        int viTri = c - 'a';
        int newViTri = (viTri + khoa) % 26;
        ketQua.push_back(kyTu[newViTri]);
    }

    return ketQua;
}

int main() {
    std::string duongDan = "boyfriend";
    int khoa = 3;

    std::vector<char> ketQua = maHoa(duongDan, khoa);

    std::cout << "Đoạn mã ban đầu: ";
    for (char c : duongDan) {
        std::cout << c << " ";
    }
    std::cout << std::endl;

    std::cout << "Đoạn mã đã chuyển hóa: ";
    for (char c : ketQua) {
        std::cout << c << " ";
    }
    std::cout << std::endl;

    std::cout << "Đoạn mã ban đầu: " << duongDan << std::endl;
    std::cout << "Khóa của đoạn mã là: " << khoa << std::endl;
    std::cout << "Đoạn mã đã chuyển hóa: ";
    for (char c : ketQua) {
        std::cout << c;
    }
    std::cout << std::endl;

    return 0;
}