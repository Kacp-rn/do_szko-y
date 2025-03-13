#pragma once

#include <iostream>
#include <string>
#include <unistd.h>
#include <stdlib.h>
#include <termios.h>

namespace car
{
    class Car
    {
    public:
        Car();
        ~Car() {};

    public:
        void move();
        void accelerate();
        void countdown();
        void win();

        int speed;
        int timer;
        int distance;
        bool gas_pressed;
        bool arrow_pressed;
        bool win_condition;

        char getKey();
    };
}