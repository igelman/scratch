<?php
/**
 * Created by PhpStorm.
 * User: aboutuser
 * Date: 8/10/15
 * Time: 8:54 AM
 */
require './vendor/autoload.php';
use JonnyW\PhantomJs\Client;

$client = Client::getInstance();

$request  = $client->getMessageFactory()->createRequest();
$response = $client->getMessageFactory()->createResponse();

$request->setMethod('GET');
$request->setUrl('http://localhost:8888/scratch/test-stub.html');

$client->send($request, $response);

echo $response->getStatus() . PHP_EOL;
if($response->getStatus() === 200) {
    echo $response->getContent();
}
//phpinfo();
?>