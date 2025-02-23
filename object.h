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
            int how_many, ID, help_id = 0, element_number = 0, help_element  = 0, x=0,y=0, a_id[50], abc[50];
            float price;
            std::string name, category, help_line, category_help, row_line, string_array[50];

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
                if (element_number % 5 == 0) // ID jest co 5. wartością w wierszu
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
    y = 0;
        std::fstream file;
            file.open("doxc.txt", std::ios::in);
            if(file.good()==false)
            {
                std::cout<<"error"<<std::endl;
            }
            else
            {
                std::cout<<"Manage to open file!"<<std::endl<<std::endl;
            }
                while(getline(file, help_line, '|'))
                {
                    if (element_number % 5 == 0) // ID jest co 5. wartością w wierszu
                {
                    try
                    {
                        help_id = std::stoi(help_line);
                        a_id[y/5] = help_id/5 +1;
                        id_array[y][x] = &a_id[y];
                        std::cout<<help_id<< "; "<<a_id[y/5]<<"; ";

                    }
                    catch (const std::invalid_argument &e)
                    {
                        std::cerr << "Koniec tabeli: " << e.what() << std::endl<<std::endl;
                    }
                }
                element_number++;
                    y++;
                }

                file.close();

                element_number = 0;
                y = 0;

                file.open("doxc.txt", std::ios::in);
            if(file.good()==false)
            {
                std::cout<<"error"<<std::endl;
            }
            else
            {
                std::cout<<"Manage to open file!"<<std::endl<<std::endl;
            }
        x = 1;
                while(getline(file,help_line, '|'))
                {
                    if (element_number % 5 == 2) // ID jest co 5. wartością w wierszu
                    {
                        string_array[y] = help_line;
                        id_array[y][x] = &string_array[y];
                        std::cout<<y<<"; ";
                    }
                element_number++;
                y++;
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

                std::cout<<"podaj nazwe kategori: ";
                std::cin>>category_help;

            x = 0; y = 0;

                while(getline(file, help_line, '|'))
                {
                    if(category_help==help_line)
                    {
                        help_id = y-2;
                        std::cout<<y;

                    }
                    element_number++;
                    y++;
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

            while(getline(file, help_line, '|'))
            {
                if (element_number % 5 == 0) // ID jest co 5. wartością w wierszu
                {
                try
                    {
                    if(stoi(help_line)==*(int*)id_array[help_id][0])
                    {
                        std::cout<< *(int*)id_array[help_id][0]<<"|"<<std::endl;
                    }
                    }
                    catch (const std::invalid_argument &e)
                    {
                        std::cerr << "you fucked something up: " << e.what() << std::endl<<std::endl;
                    }
                }
            }

        file.close();

        return 0;
          }



    };

}
