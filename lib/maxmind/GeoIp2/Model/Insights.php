<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace GeoIp2\Model;

/**
 * Model class for the data returned by GeoIP2 Precision: Insights web service.
 *
 * The only difference between the City and Insights model classes is which
 * fields in each record may be populated. See
 * https://dev.maxmind.com/geoip/geoip2/web-services for more details.
 */
class Insights extends City
{
}
