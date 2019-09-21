<?php

namespace Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey\CreateCar;


interface StatusInterface
{
    const UNKNOWN = 'unknown';
    const WORKING = 'working';
    const NOT_WORKING = 'not_working';
    const TECH_INSPECTION = 'tech_inspection';
    const REPAIRING = 'repairing';
    const HIGHJACKED = 'highjacked';
    const IN_GARAGE = 'in_garage';
}
