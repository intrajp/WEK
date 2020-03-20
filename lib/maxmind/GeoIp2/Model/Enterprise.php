<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


namespace GeoIp2\Model;

/**
 * Model class for the data returned by GeoIP2 Enterprise database lookups.
 *
 * The only difference between the City and Enterprise model classes is which
 * fields in each record may be populated. See
 * https://dev.maxmind.com/geoip/geoip2/web-services for more details.
 */
class Enterprise extends City
{
}
