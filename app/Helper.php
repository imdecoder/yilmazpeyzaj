<?php

use Carbon\Carbon;

function timeAgo($date)
{
    return Carbon::parse($date)->diffForHumans();
}

function segments($index = null)
{
    $baseUrl = config('BASE_URL');
    $baseArray = explode('/', trim(parse_url($baseUrl, PHP_URL_PATH) ?? '', '/'));

    $requestUri = $_SERVER['REQUEST_URI'];
    $parsedUrl = parse_url($requestUri, PHP_URL_PATH);
    $requestArray = explode('/', trim($parsedUrl ?? '', '/'));

    $diffArray = array_values(array_diff($requestArray, $baseArray));

	if ($index || $index === 0)
	{
		if (isset($diffArray[$index]))
		{
			return $diffArray[$index];
		}
		else
		{
			return false;
		}
	}
	else
	{
		return $diffArray;
	}
}

function turkishLira($par)
{
	return number_format($par, 2, ',', '.');
}

function hashid($limit = 11)
{
	$chars = 'bcdfghjklmnpqrstvwxyz';
	$chars .= 'BCDFGHJKLMNPQRSTVWXYZ';
	$chars .= '0123456789';

	while (1)
	{
		$key = '';
		srand((double) microtime() * 1000000);

		for ($i = 0; $i < $limit; $i++)
		{
			$key .= substr($chars, (rand() % (strlen($chars))), 1);
		}

		break;
	}

	return $key;
}
