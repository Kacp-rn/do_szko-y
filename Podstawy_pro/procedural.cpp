#include <iostream>
#include <fstream>
#include <cstring>

#define MAX_PRODUCTS 100
#define MAX_NAME 50
#define MAX_CATEGORY 30

using namespace std;

struct Product {
    int id;
    char name[MAX_NAME];
    char category[MAX_CATEGORY];
    float price;
    int quantity;
};

Product products[MAX_PRODUCTS];
int productCount = 0;

void addProduct() {
    if (productCount >= MAX_PRODUCTS) {
        cout << "Nie można dodać więcej produktów. Osiągnięto limit." << endl;
        return;
    }
    
    Product p;
    p.id = productCount + 1;
    
    cout << "Podaj nazwę produktu: ";
    cin.ignore();
    cin.getline(p.name, MAX_NAME);
    
    cout << "Podaj kategorię produktu: ";
    cin.getline(p.category, MAX_CATEGORY);
    
    cout << "Podaj cenę produktu: ";
    cin >> p.price;
    
    cout << "Podaj ilość produktu: ";
    cin >> p.quantity;
    
    products[productCount++] = p;
    cout << "Produkt dodany!" << endl;
}

void removeProduct() {
    int id;
    cout << "Podaj ID produktu do usunięcia: ";
    cin >> id;
    
    bool found = false;
    for (int i = 0; i < productCount; i++) {
        if (products[i].id == id) {
            found = true;
            for (int j = i; j < productCount - 1; j++) {
                products[j] = products[j + 1];
            }
            productCount--;
            cout << "Produkt usunięty." << endl;
            break;
        }
    }
    if (!found) {
        cout << "Nie znaleziono produktu." << endl;
    }
}

void searchProduct() {
    char keyword[MAX_NAME];
    cout << "Podaj nazwę lub kategorię: ";
    cin.ignore();
    cin.getline(keyword, MAX_NAME);
    
    bool found = false;
    for (int i = 0; i < productCount; i++) {
        if (strstr(products[i].name, keyword) || strstr(products[i].category, keyword)) {
            cout << "ID: " << products[i].id << ", Nazwa: " << products[i].name << ", Kategoria: " << products[i].category << ", Cena: " << products[i].price << ", Ilość: " << products[i].quantity << endl;
            found = true;
        }
    }
    if (!found) {
        cout << "Nie znaleziono produktu." << endl;
    }
}

void displayProducts() {
    if (productCount == 0) {
        cout << "Brak produktów w katalogu." << endl;
        return;
    }
    
    for (int i = 0; i < productCount; i++) {
        cout << "ID: " << products[i].id << ", Nazwa: " << products[i].name << ", Kategoria: " << products[i].category << ", Cena: " << products[i].price << ", Ilość: " << products[i].quantity << endl;
    }
}

void saveToFile() {
    ofstream file("doxc.txt");
    for (int i = 0; i < productCount; i++) {
        file << products[i].id << "," << products[i].name << "," << products[i].category << "," << products[i].price << "," << products[i].quantity << endl;
    }
    file.close();
    cout << "Dane zapisane do pliku." << endl;
}

void loadFromFile() {
    ifstream file("doxc.txt");
    if (!file) {
        cout << "Brak pliku z danymi." << endl;
        return;
    }
    
    productCount = 0;
    while (file >> products[productCount].id) {
        file.ignore();
        file.getline(products[productCount].name, MAX_NAME, ',');
        file.getline(products[productCount].category, MAX_CATEGORY, ',');
        file >> products[productCount].price;
        file.ignore();
        file >> products[productCount].quantity;
        file.ignore();
        productCount++;
    }
    file.close();
    cout << "Dane załadowane z pliku." << endl;
}

void menu() {
    int choice;
    do {
        cout << "\n--- MENU ---\n";
        cout << "1. Dodaj produkt\n";
        cout << "2. Usuń produkt\n";
        cout << "3. Wyszukaj produkt\n";
        cout << "4. Wyświetl produkty\n";
        cout << "5. Zapisz do pliku\n";
        cout << "6. Wczytaj z pliku\n";
        cout << "7. Zakończ\n";
        cout << "Wybierz opcję: ";
        cin >> choice;

        switch (choice) {
            case 1: addProduct(); break;
            case 2: removeProduct(); break;
            case 3: searchProduct(); break;
            case 4: displayProducts(); break;
            case 5: saveToFile(); break;
            case 6: loadFromFile(); break;
            case 7: cout << "Koniec programu." << endl; break;
            default: cout << "Niepoprawna opcja." << endl;
        }
    } while (choice != 7);
}

int main() {
    menu();
    return 0;
}
