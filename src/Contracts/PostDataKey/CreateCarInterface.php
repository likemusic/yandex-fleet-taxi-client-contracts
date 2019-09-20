<?php

namespace Likemusic\YandexFleetTaxiClient\Contracts\PostDataKey;

interface CreateCarInterface
{
    //used
    const BOOSTER_COUNT = 'booster_count';
    const BRAND = 'brand';
    const CALLSIGN = 'callsign';
    const CARGO_LOADERS = 'cargo_loaders';
    const COLOR = 'color';
    const MODEL = 'model';
    const NUMBER = 'number';
    const PARK_ID = 'park_id';
    const REGISTRATION_CERT = 'registration_cert';
    const STATUS = 'status';
    const TRANSMISSION = 'transmission';
    const VIN = 'vin';
    const YEAR = 'year';
    const AMENITIES='amenities';

    // skipped
//    const BODY_NUMBER='body_number';
//    const CARGO_HOLD_DIMENSIONS='cargo_hold_dimensions';
//    const CARRIER_PERMIT_OWNER_ID='carrier_permit_owner_id';
//    const CARRYING_CAPACITY='carrying_capacity';
//    const CATEGORIES='categories';
//    const CHAIRS='chairs';
//    const CHASSIS='chassis';
//    const LOG_TIME='log_time';
//    const PERMIT='permit';
//    const RENTAL='rental';
//    const TARIFFS='tariffs';
}
