<?php

namespace Services\Messengers;

class SmsMessengerService
{
    public function send(string $client, string $text): string 
    {
        return "Receiver: " . $client . " - " . "Message: " . $text . ". Sended";
    }
}