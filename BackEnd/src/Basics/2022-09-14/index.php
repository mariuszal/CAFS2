<?php

require_once './Services/Messengers/EmailMessengerService.php';
require_once './Services/Messengers/SmsMessengerService.php';
require_once './Services/Messengers/FacebookMessengerService.php';
require_once './Connectors/FacebookConnector.php';

use Connectors\FacebookConnector;
use Services\Messengers\SmsMessengerService;
use Services\Messengers\EmailMessengerService;
use Services\Messengers\FacebookMessengerService;


$text = 'Hello World';

$host = 'smtp.gmail.com';
$port = 587;
$username = 'testtest@gmail.com';
$password = 'testtest';

$emailMessaenger = new Services\Messengers\EmailMessengerService($host, $username, $password);
$emailMessaenger->send('hello@nonamez.name', $text);

$smsMessager = new Services\Messengers\SmsMessengerService();
$smsMessager->send('+37061234567', $text);

$facebookAppName = 'test-name';
$facebookAppKey  = '';

$facebookConnector = new Connectors\FacebookConnector($facebookAppName, $facebookAppKey);
$facebookMessenger = new Services\Messengers\FacebookMessengerService($facebookConnector);
$facebookMessenger->send(4, $text);                                                                                                                                                                                                                                                                                                                                                                                                                                        