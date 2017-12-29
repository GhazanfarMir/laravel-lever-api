<?php

require 'vendor/autoload.php';

use GhazanfarMir\Lever\Api\Client as HttpClient;

$lever = new HttpClient('ebury');

$jobs = json_decode($lever->get());

foreach ($jobs as $job)
{
    echo $job->text . "\n";
}





