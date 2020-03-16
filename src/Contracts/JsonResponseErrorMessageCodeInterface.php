<?php

namespace Likemusic\YandexFleetTaxiClient\Contracts;

interface JsonResponseErrorMessageCodeInterface
{
    const INVALID_PHONE = 'invalid_phone';
    const DUPLICATE_DRIVER_LICENSE = 'duplicate_driver_license';
    const INVALID_DRIVER_LICENSE = 'invalid_driver_license';
    const DUPLICATE_PHONE = 'duplicate_phone';
}
