#include "car.h"

using namespace car;

int main()
{
    char input;
    Car car;
    car.countdown();
    while (!car.win_condition)
    {
        char key = car.getKey();
        input = key;

        if (input == '\033')
        {
            std::cin.get();         // Drugi znak '[' (ignorujemy)
            input = std::cin.get(); // Trzeci znak ('C' dla strzałki w prawo)
            if (input == 'C')
            {
                {
                    car.gas_pressed = true;

                    while (car.timer <= 100)
                    {
                        car.move();
                        input = car.getKey();
                        if (input == '0')
                        {
                            car.arrow_pressed = true;
                            car.accelerate();
                        }
                        input = 'C';
                        car.timer++;
                        usleep(100000);
                        system("clear");
                    }
                }
            }
            car.win();
        }
    }
    return 0;
}