<?php
namespace Services\Messengers;

use Connectors\FacebookConnector;

class FacebookMessengerService {
    
    private $connector;

    public function __construct(FacebookConnector $facebookConnector)
    {
        $this->connector = $facebookConnector;
    }

    public function send(int $client, string $text) : string
    {
        if ($this->connector instanceof FacebookConnector) {
            return sprintf('Facebook message sended: %s - %s', $client, $text);
        }
        return 'FacebookConnector not found';
    }
}