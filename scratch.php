<?php
/**
 * Created by PhpStorm.
 * User: aboutuser
 * Date: 8/10/15
 * Time: 8:54 AM
 */
use JonnyW\PhantomJs\Client;

$client = Client::getInstance();

$request  = $client->getMessageFactory()->createRequest();
$response = $client->getMessageFactory()->createResponse();

$request->setMethod('GET');
$request->setUrl('http://google.com');

$client->send($request, $response);

if($response->getStatus() === 200) {
    echo $response->getContent();
}
//phpinfo();
?>