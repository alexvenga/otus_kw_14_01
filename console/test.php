#!/usr/bin/env php
<?php

include_once '../vendor/autoload.php';

$client = new \MongoDB\Client('mongodb://localhost:27017');
$collection = $client->demo->hellow;
$cursor = $collection->find([]);
foreach ($cursor as $doc) {
    print_r($doc);
}
