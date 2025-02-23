#include"object.h"

using namespace object;

int main()
{

int choose;

    Object objekt;

        std::cout<<"wybierz:"<<std::endl<<"1. odczyt tabeli"<<std::endl<<" 2. dodawanie wiersza w tabeli"<<std::endl<<"3. wyszykiwanie w tabeli"<<std::endl<<"4.zakoncz program"<<std::endl;

    while(true)
    {
        choose = 0;
        std::cin>>choose;
            switch(choose)
                {
                    case 1:objekt.opening_read();break;
                    case 2:objekt.adding_row();break;
                    case 3:objekt.searching_by_category();break;
                    case 4:std::cout<<"Zatrzymano program";std::exit(0);break;
                }
    }
}
