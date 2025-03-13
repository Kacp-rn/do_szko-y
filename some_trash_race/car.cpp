#include "car.h"

using namespace car;

Car::Car()
{
    speed = 1;
    timer = 0;
    gas_pressed = false;
    arrow_pressed = false;
}

void Car::move()
{
    for (int i = 0; i < timer; i++)
    {
        std::cout << "_";
    }
    std::cout << "o=o";
    for (int i = 0; i < 100 - timer; i++)
    {
        std::cout << "_";
    }
    std::cout << std::endl;
}
void Car::accelerate()
{
    if (gas_pressed == 1)
    {
        speed = 2;
        timer += speed;
    }
}

void Car::countdown()
{
    for (int i = 3; i > 0; i--)
    {
        std::cout << i << std::endl;
        sleep(1);
        system("clear");
    }
}

void Car::win()
{
    if (timer >= 100)
    {
        win_condition = true;
    }
}

char Car::getKey()
{
    struct termios oldt, newt;
    char ch;

    // Pobranie aktualnych ustawień terminala
    tcgetattr(STDIN_FILENO, &oldt);
    newt = oldt;

    // Wyłączenie buforowania wejścia i trybu kanonicznego (czyli potrzeby naciskania Enter)
    newt.c_lflag &= ~(ICANON | ECHO);
    tcsetattr(STDIN_FILENO, TCSANOW, &newt);

    // Odczytanie znaku
    ch = getchar();

    // Przywrócenie starych ustawień terminala
    tcsetattr(STDIN_FILENO, TCSANOW, &oldt);

    return ch;
}