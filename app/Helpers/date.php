<?php

use Illuminate\Support\Carbon;

/**
 * Return a Carbon instance.
 */
function carbon(string $parseString = '', string $tz = null): Carbon
{
    return new Carbon($parseString, $tz);
}

/**
 * Return a formatted Carbon date.
 */
function humanize_date(Carbon $date, string $format = 'd F Y, H:i'): string
{
    return $date->format($format);
}

function phone()
{
    return'+1-408-656-1932';
}

function fax()
{
    return '+1-408-656-1932';
}

function address()
{
    return '811 S. Central Expwy #434';
}

function address2()
{
    return 'Richardson TX 75081, USA';
}
