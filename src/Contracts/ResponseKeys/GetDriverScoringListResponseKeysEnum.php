<?php

namespace YandexFleetTaxi\Client\Contracts\ResponseKeys;

interface GetDriverScoringListResponseKeysEnum
{
    const PARK_NAME = 'park_name';
    const HAS_DEBT = 'has_debt';
    const HIRE_DATE = 'hire_date';
    const DKVU_IS_PASSED = 'dkvu_is_passed';
    const FIRST_NAME = 'first_name';
    const LAST_NAME_TRUNCATED = 'last_name_truncated';
    const PHONES_MASKED = 'phones_masked';
    const VEHICLE_NUMBER_MASKED = 'vehicle_number_masked';
    const VEHICLE_BRAND = 'vehicle_brand';
    const VEHICLE_MODEL = 'vehicle_model';
    const VEHICLE_YEAR = 'vehicle_year';
    const VEHICLE_COLOR = 'vehicle_color';
}
