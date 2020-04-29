<?php

namespace YandexFleetTaxi\Client\Contracts\References\DriverStatus;

interface IdInterface
{
    const NOT_WORKING = 'not_working';//Не работает
    const WORKING = 'working';//Работает
    const FIRED = 'fired';//Уволен
}
