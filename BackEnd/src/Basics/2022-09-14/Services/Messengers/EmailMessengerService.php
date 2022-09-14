<?php
namespace Services\Messengers;

class EmailMessengerService {
    private $host;
    private $username;
    private $password;

    public function __construct(string $host, string $username, string $password) 
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function send(string $client, string $text)
    {
        return "Email: " . $text . " to: " . $text . " sended";
    }
}