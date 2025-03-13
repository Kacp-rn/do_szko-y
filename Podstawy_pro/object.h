#pragma once

#include <string>
#include <fstream>
#include<iostream>
#include<cstdlib>

namespace object
{

    class Object
    {
        public:
            void* id_array[50][2];  
            int how_many, ID, help_id = 0, element_number = 0, y=0, a_id[50];
            float price;
            std::string name, category, help_line, category_help, row_line;

        void opening_read()
        {
            std::fstream file;
            file.open("doxc.txt", std::ios::in);
            if(file.good()==false)
            {
                std::cout<<"error"<<std::endl;
            }
            else
            {
                std::cout<<"Succes!!!"<<std::endl<<std::endl;
            }

            while(getline(file, row_line))
            {
                std::cout<<row_line<<std::endl;
            }

            file.close();
        }

      void adding_row()
      {
            element_number = 0;

            std::fstream file;
            file.open("doxc.txt", std::ios::in);
            if(file.good()==false)
            {
                std::cout<<"error"<<std::endl;
            }
            else
            {
                std::cout<<"Succes!!!"<<std::endl<<std::endl;
            }

            while(getline(file, help_line,'|'))
            {
                if (element_number % 5 == 0) 
                {
                    try
                    {
                        help_id = std::stoi(help_line);
                    }
                    catch (const std::invalid_argument &e)
                    {
                        std::cerr << "Koniec tabeli: " << e.what() << std::endl<<std::endl;
                    }
                }
                element_number++;
            }
            file.close();

            std::fstream file1;
            file1.open("doxc.txt",std::ios::app);

            std::cout<<"ID is autoincrement"<<std::endl;
            ID= help_id +1;
            std::cout<<"podaj nazwe produktu: ";
            std::cin>>name;
            std::cout<<"podaj kategorie prduktu: ";
            std::cin>>category;
            std::cout<<"podaj cene produktu: ";
            std::cin>>price;
            std::cout<<"podaj ilość produktu: ";
            std::cin>>how_many;

            file1 << ID << "|" << name << "|" << category << "|" << price << "|" << how_many << "|\n";

            file1.close();
      }

      int searching_by_category()
    {
        std::fstream file;
            file.open("doxc.txt", std::ios::in);
            if(file.good()==false)
            {
                std::cout<<"error"<<std::endl;
            }
            else
            {
                std::cout<<"Manage to open file!"<<std::endl;
            }
                while(getline(file, help_line, '|'))
                {
                    if (element_number % 5 == 0)
                {
                    try
                    {
                        help_id = std::stoi(help_line);
                        a_id[y] = help_id +1;
                        id_array[y][0] = &a_id[y];
                        y++;
                    }
                    catch (const std::invalid_argument &e)
                    {
                        std::cerr << "Koniec tabeli: " << e.what() << std::endl<<std::endl;
                    }
                }
                element_number++;

                }

                file.close();

                element_number = 0;
                y = 1;

                file.open("doxc.txt", std::ios::in);
            if(file.good()==false)
            {
                std::cout<<"error"<<std::endl;
            }
            else
            {
                std::cout<<"Manage to open file!"<<std::endl<<std::endl;
            }

            std::cout<<"podaj nazwe kategori: ";
                std::cin>>category_help;

                while(getline(file,help_line, '|'))
                {
                    if (element_number % 5 == 2)
                    {

                    if(category_help==help_line)
                    {
                        help_id = y;
                    }
                    y++;
                    }
                element_number++;
                }
                file.close();

                file.open("doxc.txt", std::ios::in);
            if(file.good()==false)
            {
                std::cout<<"error"<<std::endl;
            }
            else
            {
                std::cout<<"Manage to open file!"<<std::endl<<std::endl;
            }
                element_number = 0;

                while(getline(file, help_line,'|'))
                {
                    switch(element_number%5)
                    {
                        case 0:
                        {
                            try
                                {
                                    if(stoi(help_line) == help_id)
                                        {
                                        getline(file, help_line, '\n');
                                        std::cout<<help_id<<"|"<<help_line<<std::endl;
                                        }
                                }
                            catch (const std::invalid_argument &e)
                                {
                                    std::cerr << "dziala: " << e.what() << std::endl<<std::endl;
                                }
                    }
                    }
                    element_number++;
                }
                
        file.close();

        return 0;
          }
    };
}
